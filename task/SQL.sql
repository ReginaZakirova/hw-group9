-- Задание 13
SELECT name
FROM Passenger
GROUP BY name
HAVING COUNT(name) > 1

-- Задание 16 - Вывести отсортированный по количеству перелетов (по убыванию) и имени (по возрастанию) список пассажиров, совершивших хотя бы 1 полет.
SELECT name, COUNT(*) as count
FROM Pass_in_trip
    JOIN Passenger ON Passenger.id = Pass_in_trip.passenger
GROUP BY name
order by count DESC, name

-- Задание 17
SELECT member_name, status, SUM(amount * unit_price) as costs
FROM Payments
         JOIN FamilyMembers ON Payments.family_member = FamilyMembers.member_id
WHERE YEAR(date) = 2005
GROUP BY family_member

-- Задание 20 - Сколько и кто из семьи потратил на развлечения (entertainment). Вывести статус в семье, имя, сумму
SELECT status, member_name, SUM(unit_price * amount) AS costs
FROM Payments
         JOIN FamilyMembers ON Payments.family_member = FamilyMembers.member_id
         JOIN Goods ON Payments.good = Goods.good_id
         JOIN GoodTypes ON Goods.type = GoodTypes.good_type_id
WHERE good_type_name = 'entertainment'
GROUP BY family_member

-- Задание 21 - Определить товары, которые покупали более 1 раза
SELECT good_name
FROM Payments
         JOIN Goods ON Payments.good = Goods.good_id
GROUP By good_name
HAVING COUNT(good_name) > 1

-- Задание 26 - Определить группы товаров, которые не приобретались в 2005 году
SELECT good_type_name
FROM GoodTypes
WHERE good_type_id NOT IN (
    SELECT DISTINCT type
    FROM Payments
             JOIN Goods ON Payments.good = Goods.good_id
    WHERE YEAR(date) = 2005
    )

-- Задание 30
SELECT trip, COUNT(passenger) as count
FROM Pass_in_trip
GROUP BY trip
ORDER BY count desc

-- Задание 35
SELECT COUNT(DISTINCT classroom) as count
FROM Schedule
WHERE date = '2019-09-02'

-- Задание 43
SELECT last_name
FROM Schedule
         JOIN Teacher ON Schedule.teacher = Teacher.id
         JOIN Subject ON Schedule.subject = Subject.id
WHERE name = 'Physical Culture'
ORDER BY last_name

-- Задание 44 - Найдите максимальный возраст (колич. лет) среди обучающихся 10 классов ?
SELECT MAX(TIMESTAMPDIFF(year, birthday, curdate())) as max_year
FROM Student
         JOIN Student_in_class ON Student.id = Student_in_class.student
         JOIN Class ON Student_in_class.class = Class.id
WHERE name LIKE '10%'

-- Задание 45 - Какой(ие) кабинет(ы) пользуются самым большим спросом?
SELECT classroom
FROM Schedule
GROUP BY classroom
HAVING COUNT(classroom) = (
    SELECT COUNT(classroom) as count
    FROM Schedule
    GROUP BY classroom
    ORDER BY count desc
    limit 1
)

-- Задание 48
SELECT name, COUNT(name) as count
FROM Student_in_class
    JOIN Class ON Student_in_class.class = Class.id
GROUP BY name
ORDER by count DESC

-- Задание 55 - Удалить компании, совершившие наименьшее количество рейсов.
DELETE FROM Company
WHERE id IN (
    SELECT company
    FROM Trip
    GROUP BY company
    HAVING COUNT(company) = (
        SELECT COUNT(company) as count
        FROM Trip
        GROUP BY company
        ORDER BY count
        limit 1
    )
)

-- Задание 58 - Добавить отзыв с рейтингом 5 на жилье, находящиеся по адресу "11218, Friel Place, New York", от имени "George Clooney"
INSERT INTO Reviews
VALUES (
    (
        SELECT COUNT(*)
        FROM Reviews as max_id
    ) + 1,
    (
        SELECT Reservations.id
        FROM Reservations
        JOIN Rooms ON Reservations.room_id = Rooms.id
        JOIN Users ON Reservations.user_id = Users.id
        WHERE address = '11218, Friel Place, New York' AND name = 'George Clooney'
    ),
    5
)

-- Задание 60 - Выведите идентификаторы преподавателей, которые хотя бы один раз за всё время преподавали в каждом из одиннадцатых классов.
SELECT teacher
FROM Schedule
         JOIN Class ON Schedule.class = Class.id
WHERE name LIKE '11%'
GROUP BY teacher
HAVING COUNT(DISTINCT name) = (
    SELECT COUNT(id)
    FROM Class
    WHERE name LIKE "11%"
)
