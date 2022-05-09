<?
	$t =date('H:i');
	if ('00:00'<=$t && $t<'06:00')//ночь
   		{
   			echo '<style> 
   			div.times
   			{
  				background-image: url(../images/night.jpg);
  				background-size: contain;
  				background-repeat: no-repeat;	
			}
			</style>';
   		}
   	elseif ('06:00'<=$t && $t<'12:00')//утро
   		{
   			echo '<style> .times
   			{
  				background-image: url(../images/morning.jpg);
  				background-size: contain;
  				background-repeat: no-repeat;
			}
			</style>';
   		}
	elseif ('12:00'<=$t && $t<'18:00')//день
   		{
   			echo '<style> .times
   			{
  				background-image: url(../images/day.jpg);
  				background-size: contain;
  				background-repeat: no-repeat;
			}
			</style>';
   		}
   	else //вечер 
   		{
   			echo '<style> .times
   			{
  				background-image: url(../images/evening.jpg);
  				background-size: contain;
  				background-repeat: no-repeat;
			}
			</style>';
   		}

?>