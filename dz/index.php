<!doctype html>
<head>
<link rel="stylesheet" href="style/style_index.css">
<link rel="stylesheet" href="style/style_FLEXBOX.css">
<link rel="stylesheet" href="style/style_GRID.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- это для меню -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<!-- от меню-->
<title> Шондин А.С. </title>
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
<div class="blok-photo">  <!-- блок сс фотографикй-->
<img class="photo" src="./images/Shondin.jpg" alt="Лого">
</div>
<div class="blok-name">  <!-- блок с именем-->
  <h1>Шондин Андрей</h1>
</div>
<div class="blok-info">  <!-- блок с рассказом-->
  Привет! Расскажу немного о себе. Отучился на программиста, но по специальности не работал. Создал несколько сайтов под собственные нужды на Wordpress и Opencart.<br> Мои сайты: <a href="https://na-bannoe.ru/">na-bannoe.ru</a>, <a href="https://choc-ariba.ru/">choc-ariba.ru </a>.
    <p> Люблю активный отдых.</p>
</div>
<div class="blok-otziv">  <!-- блок с отзывом-->         Выступаю за то, что бы все работали в одном редакторе кода, т.к. у каждого есть свои особенности.</div>
</div> <!-- закрываем бюлок анкета-->
</div> <!-- закрываем подблок с гридом -->
    <div class="flex-grid">
  <div class="blok-flex">
    <h1>FLEX</h1>
   <h2>1 схема</h2>
    </p>
    <div class="blok-flex1">
      <div class="blok-flex2">
        <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil1.png" alt="смайлик 1">
          </div>
          <div class="niz">
            Смайлик с шляпой
          </div>
        </div>
      </div>
      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil2.png" alt="смайлик 1">
          </div>
          <div class="niz">
            Смущающийся смайлик
          </div>
        </div>
      </div>
      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil3.png" alt="смайлик 1">
          </div>
          <div class="niz">
            удивленный смайлик
          </div>
        </div>
      </div>
      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil4.png" alt="смайлик 1">
          </div>
          <div class="niz">
            смеющийся смайлик
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
            Смайлик с шляпой
          </div>
        </div>
      </div>
      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil2.png" alt="смайлик 1">
          </div>
          <div class="niz">
            Смущающийся смайлик
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
            удивленный смайлик
          </div>
        </div>
      </div>
      <div class="blok-flex2">
          <div class="container">
          <div class="verh">
            <img class="kartinka-verh " src="images/smil4.png" alt="смайлик 1">
          </div>
          <div class="niz">
            смеющийся смайлик
          </div>
        </div>
      </div>
    </div>
  </div>
<h1>GRID</h1>
<h2>1 схема</h2>
  </p>
  <div class="blok-grid1">
    <div class="blok-grid2">
      <div class="verh">
        <img class="kartinka-verh " src="images/smil1.png" alt="смайлик 1">
      </div>
      <div class="niz">
        Смайлик с шляпой
      </div>
    </div>
    <div class="blok-grid2">
      <div class="verh">
        <img class="kartinka-verh " src="images/smil2.png" alt="смайлик 1">
      </div>
      <div class="niz">
        Смущающийся смайлик
      </div>
    </div>
    <div class="blok-grid2">
      <div class="verh">
        <img class="kartinka-verh " src="images/smil3.png" alt="смайлик 1">
      </div>
      <div class="niz">
        удивленный смайлик
      </div>
    </div>
    <div class="blok-grid2">
      <div class="verh">
        <img class="kartinka-verh " src="images/smil4.png" alt="смайлик 1">
      </div>
      <div class="niz">
        смеющийся смайлик
      </div>
    </div>
  </div>
  <center><h1>2 схема</h1></center>
  <div class="blok-grid2-shema2">
    <div class="blok1">
      <div class="blok-grid2">
        <div class="verh">
          <img class="kartinka-verh " src="images/smil1.png" alt="смайлик 1">
        </div>
        <div class="niz">
          Смайлик с шляпой
        </div>

      </div>
    </div>
    <div class="blok2">
      <div class="blok-grid2">
        <div class="verh">
          <img class="kartinka-verh " src="images/smil2.png" alt="смайлик 1">
        </div>
        <div class="niz">
          Смущающийся смайлик
        </div>
      </div>
    </div>
    <div class="blok3">
      <div class="blok-grid2">
        <div class="verh">
          <img class="kartinka-verh " src="images/smil3.png" alt="смайлик 1">
        </div>
        <div class="niz">
          удивленный смайлик
        </div>
      </div>
    </div>
    <div class="blok4">
      <div class="blok-grid2">
        <div class="verh">
          <img class="kartinka-verh " src="images/smil4.png" alt="смайлик 1">
        </div>
        <div class="niz">
          Смеющийся смайлик
        </div>
      </div>
    </div>
  </div>
  </div>
      <!-- подключаем PHP с дневной и ночной темой -->
      <?  include 'php/temi_noch_i_den.php';   ?>

</main>
  <!-- подключаем подвал сайта -->
  <?  include 'bloki/footer_niz.php';   ?>
</body>