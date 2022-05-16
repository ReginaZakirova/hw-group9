<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Формы</title>
</head>
<body>
	<form>
		<p>
			<label>Имя пользователя: 	<input type="text" size="20" name="name user">
			</label>
		</p>
		<p>
			<label>email: 	<input type="email" required size="20" name="email_addr">
			</label>
		</p>
		<p>
			<label> Раскрывающийся список: 	
				<select>
					<option value="html">HTML</option>
  					<option value="php">PHP</option>
  					<option value="git">GIT</option>
  					<option value="css">CSS</option>
  					<option value="bitrix">BITRIX</option>
				</select>
			</label>
		</p>
		<fieldset>
			<legend>Хочу быть</legend>
			<p>
				<input type="radio" value="jun"> Junior php developer 
			
				<input type="radio" value="mid"> Middle php developer 
			
				<input type="radio" value="front-end">Front-end разработчик
			
				<input type="radio" value="disign"> Нет, хочу быть дизайнером 
			</p>
		</fieldset>
		<fieldset>
			<legend>Мои навыки в программировании</legend>
			<p>
				<input type="checkbox" value="god"> Бог программирования
			
				<input type="checkbox" value="guru"> Гуру программирования 
			
				<input type="checkbox" value="easy">
				 Эм, я еще учусь
			</p>	
		</fieldset>
		<p>
			<label>Во сколько мне удобно приходить на занятия?
				<input type="time">
			</label>
		</p>
		<p>
			<label> Мои пожелания и комментарии по курсам
				<textarea name="comments" rows="4">
				
				</textarea>
			</label>
		</p>
			<button type="submit">Все, я справился с заполнением формы</button>
	</form>	
</body>
</html>