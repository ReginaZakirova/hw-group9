<!doctype html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

    <link rel="stylesheet" href="style/style_index.css">
<link rel="stylesheet" href="style/style_FLEXBOX.css">
<link rel="stylesheet" href="style/style_GRID.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- это для меню -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<!-- от меню-->
<title>Шондин А.С. </title>
    </head>
<body>
  <!-- подключаем хеадер (верх сайта) -->
<? 
include 'bloki/header_verh_saita.php';    //подключаем хеадер (верх сайта)
include 'bloki/menu.php';                 //подключаем меню
?>


  <main>
      <!-- main это основная часть -->
      <div class="podblok-grid">
          <div class="blok-photo">
              <!-- блок сс фотографикй-->
              <img class="photo" src="./images/Shondin.jpg" alt="Лого">
          </div>
          <div class="blok-name">
              <!-- блок с именем-->
              <h1> <? $massiv_soder_str[0]="Шондин Андрей"; echo $massiv_soder_str[0]; ?> </h1>
          </div>
          <div class="blok-info">
              <!-- блок с рассказом-->
              <?php //красим текст основного блока
              $str_inf='Привет! Расскажу немного о себе. Отучился на программиста, но по специальности не работал. Создал несколько сайтов под собственные нужды на Wordpress и Opencart.<br> Мои сайты: <a href="https://na-bannoe.ru/">na-bannoe.ru</a>, <a href="https://choc-ariba.ru/">choc-ariba.ru</a>.';
              $tochka= mb_strpos($str_inf,"."); // вычислили где находится точка
              $massiv_soder_str[1]=strip_tags($rez="<span STYLE='BACKGROUND-COLOR: #474743'>" .mb_substr($str_inf,0,$tochka+1)." </span>".mb_substr($str_inf,$tochka+1));  // strip_tags уберает теги
              echo($rez);
              ?>
              <p>
                  <? $massiv_soder_str[2]="Люблю активный отдых."; echo $massiv_soder_str[2]; ?>
              </p>
          </div>
          <div class="blok-otziv">
              <!-- блок с отзывом-->

              <div>
                  <?
                  $massiv_soder_str[3]=$str_inf_o_sebe="Выступаю за то, что бы все работали в одном редакторе кода, т.к. у каждого есть свои особенности.";
                  $mass_a_inf_o_sebe=explode(' ', $str_inf_o_sebe);            // разбиваем в массив
                  For ($i=0;$i<count($mass_a_inf_o_sebe);$i++){
                      if ($i%2 ==0){                                    // если четное
                          echo "<span STYLE='BACKGROUND-COLOR: #5e5e1c'>" .$mass_a_inf_o_sebe[$i]." </span>";
                      }else {
                          echo "<span STYLE='BACKGROUND-COLOR: #864664'>" .$mass_a_inf_o_sebe[$i]." </span>"; }
                  }
                  ?>
              </div>
          </div>
      </div>
    <div class="flex-grid">
  <div class="blok-flex">
    <h1>  <? $massiv_soder_str[4]="FLEX"; echo $massiv_soder_str[4]; ?></h1>
   <h2>  <? $massiv_soder_str[5]="1 схема"; echo $massiv_soder_str[5]; ?> </h2>
    </p>
    <div class="blok-flex1">
      <div class="blok-flex2">
        <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil1.png" alt="смайлик 1">
          </div>
          <div class="niz">
                          <? $massiv_soder_str[6]="Смайлик с шляпой"; echo $massiv_soder_str[6]; ?>
          </div>
        </div>
      </div>




      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil2.png" alt="смайлик 1">
          </div>
          <div class="niz">
                          <? $massiv_soder_str[7]="Смущающийся смайлик"; echo $massiv_soder_str[7]; ?>
          </div>
        </div>
      </div>



      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil3.png" alt="смайлик 1">
          </div>
          <div class="niz">
              <? $massiv_soder_str[8]="удивленный смайлик"; echo $massiv_soder_str[8]; ?>
          </div>
        </div>
      </div>

      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil4.png" alt="смайлик 1">
          </div>
          <div class="niz">
                          <? $massiv_soder_str[9]="смеющийся смайлик"; echo $massiv_soder_str[9]; ?>
          </div>
        </div>
      </div>
    </div>
  <h1>2 схема</h1>
    <div class ="blok-flex2-shema2">
      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil1.png" alt="смайлик 1">
          </div>
          <div class="niz">
                          <? $massiv_soder_str[10]="Смайлик с шляпой"; echo $massiv_soder_str[10]; ?>
          </div>
        </div>
      </div>
      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil2.png" alt="смайлик 1">
          </div>
          <div class="niz">
              <? $massiv_soder_str[11]="Смущающийся смайлик"; echo $massiv_soder_str[11]; ?>
          </div>
        </div>
      </div>
      <div class="break"></div> <!--ПЕРЕНОС НА НОВУЮ СТРОКУ-->
      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil3.png" alt="смайлик 1">
          </div>
          <div class="niz">
              <? $massiv_soder_str[12]="удивленный смайлик"; echo $massiv_soder_str[12]; ?>
          </div>
        </div>
      </div>
      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil4.png" alt="смайлик 1">
          </div>
          <div class="niz">
              <? $massiv_soder_str[13]="смеющийся смайлик"; echo $massiv_soder_str[13]; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<h1> <? $massiv_soder_str[14]="GRID"; echo $massiv_soder_str[14]; ?> </h1>
<h2><? $massiv_soder_str[15]="1 схема"; echo $massiv_soder_str[15]; ?>  </h2>
  </p>
  <div class="blok-grid1">
    <div class="blok-grid2">
      <div class="verh">
        <img class="kartinka-verh " src="images/smil1.png" alt="смайлик 1">
      </div>
      <div class="niz">
          <? $massiv_soder_str[16]="Смайлик с шляпой"; echo $massiv_soder_str[16]; ?>
      </div>
    </div>
    <div class="blok-grid2">
      <div class="verh">
        <img class="kartinka-verh " src="images/smil2.png" alt="смайлик 1">
      </div>
      <div class="niz">
          <? $massiv_soder_str[17]="Смущающийся смайлик"; echo $massiv_soder_str[17]; ?>
      </div>
    </div>
    <div class="blok-grid2">
      <div class="verh">
        <img class="kartinka-verh " src="images/smil3.png" alt="смайлик 1">
      </div>
      <div class="niz">
          <? $massiv_soder_str[18]="удивленный смайлик"; echo $massiv_soder_str[18]; ?>
      </div>
    </div>
    <div class="blok-grid2">
      <div class="verh">
        <img class="kartinka-verh " src="images/smil4.png" alt="смайлик 1">
      </div>
      <div class="niz">
          <? $massiv_soder_str[19]="смеющийся смайлик"; echo $massiv_soder_str[19]; ?>
      </div>
    </div>
  </div>
  <center><h1>  <? $massiv_soder_str[20]="2 схема"; echo $massiv_soder_str[20]; ?></h1></center>
  <div class="blok-grid2-shema2">
    <div class="blok1">
      <div class="blok-grid2">
        <div class="verh">
          <img class="kartinka-verh " src="images/smil1.png" alt="смайлик 1">
        </div>
        <div class="niz">
          <? $massiv_soder_str[21]="Смайлик с шляпой"; echo $massiv_soder_str[21]; ?>
        </div>

      </div>
    </div>
    <div class="blok2">
      <div class="blok-grid2">
        <div class="verh">
          <img class="kartinka-verh " src="images/smil2.png" alt="смайлик 1">
        </div>
        <div class="niz">
            <? $massiv_soder_str[22]="Смущающийся смайлик"; echo $massiv_soder_str[22]; ?>
        </div>
      </div>
    </div>
    <div class="blok3">
      <div class="blok-grid2">
        <div class="verh">
          <img class="kartinka-verh " src="images/smil3.png" alt="смайлик 1">
        </div>
        <div class="niz">
            <? $massiv_soder_str[23]="удивленный смайлик"; echo $massiv_soder_str[23]; ?>
        </div>
      </div>
    </div>
    <div class="blok4">
      <div class="blok-grid2">
        <div class="verh">
          <img class="kartinka-verh " src="images/smil4.png" alt="смайлик 1">
        </div>
        <div class="niz">
            <? $massiv_soder_str[24]="Смеющийся смайлик"; echo $massiv_soder_str[24]; ?>
        </div>
      </div>
    </div>
  </div>
  </div>
      <!-- п -->
</main>
  <!-- подключаем подвал сайта -->
  <footer>

  <?

  include 'php/footer_dz_svet_podschet_slob_i_bukv.php';  // подключаем PHP c Дз о подсчете дней, букв, слов
  include_once 'php/temi_noch_i_den.php';               // подключаем PHP с дневной и ночной темой
  $den_ili_noch = smena_dnya_i_nochi();                 //запускаем фукнцию по смене дня и ночи
  echo  $den_ili_noch;
  include 'bloki/footer_niz.php';

  ?>
      </footer>
</body>