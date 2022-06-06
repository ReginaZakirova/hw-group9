<div class="grid-footer">
	<div class="social">
		<div class="social-ic">
			<a href="https://www.skype.com/ru/" target="_blank">
				<img class="social-ic-im" src="images\soc_ic\skype.svg" alt="skype">
			</a>
		</div>
		<div class="social-ic">
			<a href="https://web.telegram.org/" target="_blank">
				<img class="social-ic-im" src="images\soc_ic\telegram.svg" alt="telegram">
			</a>
		</div>
		<div class="social-ic">
			<a href="https://www.viber.com/ru/" target="_blank">
				<img class="social-ic-im" src="images\soc_ic\viber.svg" alt="viber">
			</a>
		</div>
		<div class="social-ic">
			<a href="https://www.whatsapp.com/" target="_blank">
				<img class="social-ic-im" src="images\soc_ic\whatsapp.svg" alt="whatsapp">
			</a>
		</div>
	</div>
	<div class="copyright">
		<p> <?
				$str1 = '08-10-1992';// первая дата
				$str2 = date('d-m-y');// вторая дата 
				$days1 = strtotime($str1);// в секундах
				$days2 = strtotime($str2);// в секундах
				echo "<br>дата рождения = $str1<br>";
				echo "<br> текущая дата = $str2<br>";
				$r = ($days2-$days1)/(pow(60, 2)*24);
				echo "<br> разница в днях между датами = $r<br>";
				$str2 = file_get_contents('index.php');
				//echo '<br>'.$str2;
				$str22 = strip_tags($str2);
				$arr2 = preg_split('//u',$str22,-1,PREG_SPLIT_NO_EMPTY);
				$arrg = ['я','и','ю','ы','а','о','э','у','е'];
				$countg = 0;
				foreach($arr2 as $char){
 					if(in_array($char,$arrg)){
   						$countg++;
  					}
				}
				$str3 = preg_replace ("/[,?!.]/", " ", $str22);// меняем в строке знаки препинания на пробел
				$arr3 = explode(' ', $str3);
				echo '<br>  количество слов = '.count($arr3).'<br>';
				echo " количество гласных =$countg";
		 ?></p>
	</div>
</div>