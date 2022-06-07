-- Задание 1 - Вывести имена всех когда-либо обслуживаемых пассажиров авиакомпаний
SELECT name
FROM Passenger;

-- Задание 2 - Вывести названия всеx авиакомпаний
SELECT name
FROM Company;

-- Задание 3 - Вывести все рейсы, совершенные из Москвы
SELECT *
FROM Trip
WHERE town_from = 'Moscow';

-- Задание 4 - Вывести имена людей, которые заканчиваются на "man"
SELECT name
FROM passenger
WHERE name LIKE "%man";

-- Задание 5 - Вывести количество рейсов, совершенных на TU-134
SELECT COUNT(*) as count
FROM Trip
WHERE plane = "TU-134";

-- Задание 6 - Какие компании совершали перелеты на Boeing
SELECT DISTINCT name
FROM Trip
         JOIN Company ON Trip.company = Company.id
WHERE plane = "Boeing";

-- Задание 7 - Вывести все названия самолётов, на которых можно улететь в Москву (Moscow)
SELECT DISTINCT plane
FROM Trip
WHERE town_to = "Moscow";

-- Задание 8 - В какие города можно улететь из Парижа (Paris) и сколько времени это займёт?
SELECT town_to, SEC_TO_TIME(TIMESTAMPDIFF(SECOND, time_out, time_in)) as flight_time
FROM Trip
WHERE town_from = "Paris";

-- Задание 9 - Какие компании организуют перелеты с Владивостока (Vladivostok)?
SELECT name
FROM Trip
         JOIN Company ON Trip.company = Company.id
WHERE town_from = "Vladivostok";

-- Задание 10 - Вывести вылеты, совершенные с 10 ч. по 14 ч. 1 января 1900 г.
SELECT *
FROM Trip
WHERE time_out BETWEEN '1900-1-1 10:00:00' AND '1900-1-1 14:00:00';

-- Задание 11 - Вывести пассажиров с самым длинным именем
SELECT name
FROM Passenger
WHERE LENGTH(name) = (
    SELECT MAX(LENGTH(name ))
    FROM Passenger
    );

-- Задание 12 - Вывести id и количество пассажиров для всех прошедших полётов
SELECT trip, COUNT(*) AS count
FROM Pass_in_trip
GROUP BY trip;

-- Задание 13 - Вывести имена людей, у которых есть полный тёзка среди пассажиров
SELECT name
FROM Passenger
GROUP BY name
HAVING COUNT(name) > 1;

-- Задание 14 - В какие города летал Bruce Willis
SELECT town_to
FROM Pass_in_trip
         JOIN Trip ON Pass_in_trip.trip = Trip.id
         JOIN Passenger ON Pass_in_trip.passenger = Passenger.id
WHERE name = "Bruce Willis";

-- Задание 15 - Во сколько Стив Мартин (Steve Martin) прилетел в Лондон (London)
SELECT time_in
FROM Pass_in_trip
         JOIN Trip ON Pass_in_trip.trip = Trip.id
         JOIN Passenger ON Pass_in_trip.passenger = Passenger.id
WHERE name = "Steve Martin" AND town_to = "London";

-- Задание 16 - Вывести отсортированный по количеству перелетов (по убыванию) и имени (по возрастанию) список пассажиров, совершивших хотя бы 1 полет.
SELECT name, COUNT(*) as count
FROM Pass_in_trip
    JOIN Passenger ON Passenger.id = Pass_in_trip.passenger
GROUP BY name
order by count DESC, name;

-- Задание 17 - Определить, сколько потратил в 2005 году каждый из членов семьи
SELECT member_name, status, SUM(amount * unit_price) as costs
FROM Payments
         JOIN FamilyMembers ON Payments.family_member = FamilyMembers.member_id
WHERE YEAR(date) = 2005
GROUP BY family_member;

-- Задание 18 - Узнать, кто старше всех в семьe
SELECT member_name
FROM FamilyMembers
ORDER BY birthday
    LIMIT 1;

-- Задание 19 - Определить, кто из членов семьи покупал картошку (potato)
SELECT DISTINCT status
FROM Payments
         JOIN FamilyMembers ON Payments.family_member = FamilyMembers.member_id
         JOIN Goods ON Payments.good = Goods.good_id
WHERE good_name = "potato";

-- Задание 20 - Сколько и кто из семьи потратил на развлечения (entertainment). Вывести статус в семье, имя, сумму
SELECT status, member_name, SUM(unit_price * amount) AS costs
FROM Payments
         JOIN FamilyMembers ON Payments.family_member = FamilyMembers.member_id
         JOIN Goods ON Payments.good = Goods.good_id
         JOIN GoodTypes ON Goods.type = GoodTypes.good_type_id
WHERE good_type_name = 'entertainment'
GROUP BY family_member;

-- Задание 21 - Определить товары, которые покупали более 1 раза
SELECT good_name
FROM Payments
         JOIN Goods ON Payments.good = Goods.good_id
GROUP By good_name
HAVING COUNT(good_name) > 1;

-- Задание 22 - Найти имена всех матерей (mother)
SELECT member_name
FROM FamilyMembers
WHERE status = "mother";

-- Задание 23 - Найдите самый дорогой деликатес (delicacies) и выведите его стоимость
SELECT good_name, unit_price
FROM Payments
         JOIN Goods ON Payments.good = Goods.good_id
         JOIN GoodTypes ON Goods.type = GoodTypes.good_type_id
WHERE good_type_name = "delicacies"
ORDER BY unit_price DESC
    LIMIT 1;

-- Задание 24 - Определить кто и сколько потратил в июне 2005
SELECT member_name, SUM(amount * unit_price) AS costs
FROM Payments
         JOIN FamilyMembers ON Payments.family_member = FamilyMembers.member_id
WHERE date BETWEEN '2005-6-1' AND '2005-7-1'
GROUP BY member_name;

-- Задание 25 - Определить, какие товары не покупались в 2005 году
SELECT good_name
FROM Goods
WHERE good_id NOT IN (
    SELECT DISTINCT good
    FROM Payments
    WHERE YEAR(date) = 2005
    );

-- Задание 26 - Определить группы товаров, которые не приобретались в 2005 году
SELECT good_type_name
FROM GoodTypes
WHERE good_type_id NOT IN (
    SELECT DISTINCT type
    FROM Payments
             JOIN Goods ON Payments.good = Goods.good_id
    WHERE YEAR(date) = 2005
    );

-- Задание 27 - Узнать, сколько потрачено на каждую из групп товаров в 2005 году. Вывести название группы и сумму
SELECT good_type_name, SUM(amount * unit_price) as costs
FROM Payments
         JOIN Goods ON Payments.good = Goods.good_id
         JOIN GoodTypes ON Goods.type = GoodTypes.good_type_id
WHERE YEAR(date) = 2005
GROUP BY good_type_name;

-- Задание 28 - Сколько рейсов совершили авиакомпании с Ростова (Rostov) в Москву (Moscow) ?
SELECT COUNT(*) as count
FROM Trip
WHERE town_from = "Rostov" AND town_to = "Moscow";

-- Задание 29 - Выведите имена пассажиров улетевших в Москву (Moscow) на самолете TU-134
SELECT DISTINCT name
FROM Pass_in_trip
         JOIN Trip ON Pass_in_trip.trip = Trip.id
         JOIN Passenger ON Pass_in_trip.passenger = Passenger.id
WHERE town_to ="Moscow" AND plane = "TU-134";

-- Задание 30
SELECT trip, COUNT(passenger) as count
FROM Pass_in_trip
GROUP BY trip
ORDER BY count desc;

-- Задание 31 - Вывести всех членов семьи с фамилией Quincey.
SELECT *
FROM FamilyMembers
WHERE member_name LIKE "%Quincey";

-- Задание 32 - Вывести средний возраст людей (в годах), хранящихся в базе данных. Результат округлите до целого в меньшую сторону.
SELECT AVG(TIMESTAMPDIFF(year, birthday, curdate())) as age
FROM FamilyMembers;

-- Задание 33 - Найдите среднюю стоимость икры. В базе данных хранятся данные о покупках красной (red caviar) и черной икры (black caviar).
SELECT AVG(unit_price) AS cost
FROM Payments
         JOIN Goods ON Payments.good = Goods.good_id
WHERE good_name LIKE "%caviar";

-- Задание 34 - Сколько всего 10-ых классов
SELECT COUNT(*) AS count
FROM Class
WHERE name LIKE "10%";

-- Задание 35 - Сколько различных кабинетов школы использовались 2.09.2019 в образовательных целях ?
SELECT COUNT(DISTINCT classroom) as count
FROM Schedule
WHERE date = '2019-09-02';

-- Задание 36 - Выведите информацию об обучающихся живущих на улице Пушкина (ul. Pushkina)?
SELECT *
FROM Student
WHERE address LIKE  "ul. Pushkina%";

-- Задание 37 - Сколько лет самому молодому обучающемуся ?
SELECT TIMESTAMPDIFF(year, birthday, curdate()) as year
FROM Student
ORDER BY birthday DESC
    LIMIT 1;

-- Задание 38 - Сколько Анн (Anna) учится в школе ?
SELECT COUNT(*) AS count
FROM Student
WHERE first_name = "Anna";

-- Задание 39 - Сколько обучающихся в 10 B классе ?
SELECT COUNT(*) as count
FROM Student_in_class
    JOIN Class ON Student_in_class.class = Class.id
WHERE name = "10 B";

-- Задание 40 - Выведите название предметов, которые преподает Ромашкин П.П. (Romashkin P.P.) ?
SELECT name as subjects
FROM Schedule
         JOIN Teacher ON Schedule.teacher = Teacher.id
         JOIN Subject ON Schedule.subject = Subject.id
WHERE last_name = "Romashkin" AND first_name LIKE "P%" AND middle_name LIKE "P%";

-- Задание 41 - Во сколько начинается 4-ый учебный предмет по расписанию ?
SELECT start_pair
FROM Timepair
WHERE id = 4;

-- Задание 42 - Сколько времени обучающийся будет находиться в школе, учась со 2-го по 4-ый уч. предмет ?
SELECT TIMEDIFF(
               (SELECT end_pair FROM Timepair WHERE id = 4),
               (SELECT start_pair FROM Timepair WHERE id = 2)
           ) as time;

-- Задание 43 - Выведите фамилии преподавателей, которые ведут физическую культуру (Physical Culture). Остортируйте преподавателей по фамилии.
SELECT last_name
FROM Schedule
         JOIN Teacher ON Schedule.teacher = Teacher.id
         JOIN Subject ON Schedule.subject = Subject.id
WHERE name = 'Physical Culture'
ORDER BY last_name;

-- Задание 44 - Найдите максимальный возраст (колич. лет) среди обучающихся 10 классов ?
SELECT MAX(TIMESTAMPDIFF(year, birthday, curdate())) as max_year
FROM Student
         JOIN Student_in_class ON Student.id = Student_in_class.student
         JOIN Class ON Student_in_class.class = Class.id
WHERE name LIKE '10%';

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
);

-- Задание 46 - В каких классах введет занятия преподаватель "Krauze" ?
SELECT DISTINCT name
FROM Schedule
         JOIN Class ON Schedule.class = Class.id
         JOIN Teacher ON Schedule.teacher = Teacher.id
WHERE last_name = "Krauze";

-- Задание 47 - Сколько занятий провел Krauze 30 августа 2019 г.?
SELECT COUNT(*) AS count
FROM Schedule
    JOIN Teacher ON Schedule.teacher = Teacher.id
WHERE last_name ="Krauze" AND date ="2019-8-30";

-- Задание 48 - Выведите заполненность классов в порядке убывания
SELECT name, COUNT(name) as count
FROM Student_in_class
    JOIN Class ON Student_in_class.class = Class.id
GROUP BY name
ORDER by count DESC;

-- Задание 49 - Какой процент обучающихся учится в 10 A классе ?
SELECT 100 *
       (
           SELECT COUNT(*)
           FROM Student_in_class
                    JOIN Class ON Student_in_class.class = Class.id
           WHERE name = "10 A"
       )/
       (
           SELECT COUNT(*)
           FROM Student_in_class
       ) AS percent;

-- Задание 50 - Какой процент обучающихся родился в 2000 году? Результат округлить до целого в меньшую сторону.
SELECT floor(100 *
    (
        SELECT COUNT(*)
        FROM Student_in_class
              JOIN Student ON Student_in_class.student = Student.id
        WHERE YEAR(birthday) = 2000
    )/
    (
        SELECT COUNT(*)
        FROM Student_in_class
    )) AS percent;

-- Задание 51 - Добавьте товар с именем "Cheese" и типом "food" в список товаров (Goods).
INSERT INTO Goods
VALUES (
    (
        SELECT COUNT(*)
        FROM Goods as max_id
    ) + 1,
    "Cheese",
    (
        SELECT good_type_id
        FROM GoodTypes
        WHERE good_type_name = "food"
    )
);

-- Задание 52 - Добавьте в список типов товаров (GoodTypes) новый тип "auto".
INSERT INTO GoodTypes
VALUES (
    (
        SELECT COUNT(*)
        FROM GoodTypes as max_id
    ) + 1,
    "auto"
);

-- Задание 53 - Измените имя "Andie Quincey" на новое "Andie Anthony".
UPDATE FamilyMembers
SET member_name = "Andie Anthony"
WHERE member_name = "Andie Quincey";

-- Задание 54 - Удалить всех членов семьи с фамилией "Quincey".
DELETE FROM FamilyMembers
WHERE member_name LIKE "%Quincey";

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
);

-- Задание 56 - Удалить все перелеты, совершенные из Москвы (Moscow).
DELETE FROM Trip
WHERE town_from = "Moscow";

-- Задание 57 - Перенести расписание всех занятий на 30 мин. вперед.
UPDATE Timepair
SET start_pair = start_pair + interval 30 minute,
    end_pair = end_pair + interval 30 minute;

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
);

-- Задание 59 - Вывести пользователей,указавших Белорусский номер телефона ? Телефонный код Белоруссии +375.
SELECT *
FROM Users
WHERE phone_number LIKE "+375%";

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
);

-- Задание 61 - Выведите список комнат, которые были зарезервированы в течение 12 недели 2020 года.
SELECT Rooms.*
FROM Reservations
         JOIN Rooms ON Reservations.room_id = Rooms.id
WHERE YEARWEEK(start_date, 1) = 202012;

-- Задание 62 - Вывести в порядке убывания популярности доменные имена 2-го уровня, используемые пользователями для
-- электронной почты. Полученный результат необходимо дополнительно отсортировать по возрастанию названий доменных имён.
SELECT SUBSTRING_INDEX(email, '@', -1) as domain, COUNT(*) as count
FROM Users
GROUP BY domain
order by count desc, domain;

-- Задание 63 - Выведите отсортированный список (по возрастанию) имен студентов в виде Фамилия.И.О.
SELECT CONCAT(last_name, '.', LEFT(first_name, 1), '.', LEFT(middle_name, 1), '.') as name
FROM Student
order by name;

-- Задание 64 - Выведите имена всех пар пассажиров, летевших вместе на одном рейсе два или более раз, и количество этих
-- совместных полётов. В passengerName1 разместите имя пассажира с наименьшим идентификатором.
SELECT passengerName1, passengerName2, COUNT(trip1) AS count
FROM (
    SELECT Passenger.id AS passenger_id1, name AS passengerName1, trip AS trip1
    FROM Passenger
    JOIN Pass_in_trip
        ON Passenger.id = Pass_in_trip.passenger
    GROUP BY Passenger.id, trip) AS Table1
JOIN (
    SELECT Passenger.id AS passenger_id2, name AS passengerName2, trip AS trip2
    FROM Passenger
    JOIN Pass_in_trip
        ON Passenger.id = Pass_in_trip.passenger
    GROUP BY Passenger.id, trip) AS Table2
ON Table1.trip1 = Table2.trip2
WHERE (passenger_id1 < passenger_id2) GROUP BY passengerName1, passengerName2
HAVING (count >= 2)

-- Задание 65 - Необходимо вывести рейтинг для комнат, которые хоть раз арендовали, как среднее значение рейтинга отзывов округленное до целого вниз.
SELECT room_id, FLOOR(AVG(rating)) as rating
FROM Reviews
         JOIN Reservations ON Reviews.reservation_id = Reservations.id
GROUP BY room_id

-- Задание 66 - Вывести список комнат со всеми удобствами (наличие ТВ, интернета, кухни и кондиционера), а также общее
-- количество дней и сумму за все дни аренды каждой из таких комнат.
SELECT home_type, address, IFNULL(SUM(DATEDIFF(end_date, start_date)),0) AS days, IFNULL(SUM(total),0) AS total_fee
FROM Rooms
         LEFT JOIN Reservations ON Rooms.id = Reservations.room_id
WHERE has_tv AND has_internet AND has_kitchen AND has_air_con
GROUP BY Rooms.id

-- Задание 67 - Вывести время отлета и время прилета для каждого перелета в формате "ЧЧ:ММ, ДД.ММ - ЧЧ:ММ, ДД.ММ",
-- где часы и минуты с ведущим нулем, а день и месяц без.
SELECT CONCAT(DATE_FORMAT(time_out, '%H:%i, %e.%c'),' - ',DATE_FORMAT(time_in, '%H:%i, %e.%c')) AS flight_time
FROM Trip