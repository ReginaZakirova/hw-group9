<!doctype html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style_tablisa_mendeleeva.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- это для меню -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,500,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!-- от меню-->
    <title>Таблица Менделеева</title>
</head>
<body>
<!-- подключаем хеадер (верх сайта) -->
<?
include 'bloki/header_verh_saita.php';    //подключаем хеадер (верх сайта)
include 'bloki/menu.php';                 //подключаем меню
?>

<div class="shablon_osnovnoy_blok_stranits">
    <br> <br>
  <table>
    <tr>
      <td rowspan="2">Периоды</td>
      <td rowspan="2">Ряды</td>
      <td colspan="10" class="yacheyka-gruppa-elementov">Группа элементов</td>
    </tr>
    <tr>
      <td class="yacheyka-pervaya-stroka">I</td>
      <td class="yacheyka-pervaya-stroka">II</td>
      <td class="yacheyka-pervaya-stroka">III</td>
      <td class="yacheyka-pervaya-stroka">IV</td>
      <td class="yacheyka-pervaya-stroka">V</td>
      <td class="yacheyka-pervaya-stroka">VI</td>
      <td class="yacheyka-pervaya-stroka">VII</td>
      <td class="yacheyka-pervaya-stroka">VIII</td>
      <td class="yacheyka-pervaya-stroka">IX</td>
      <td class="yacheyka-pervaya-stroka">X</td>
    </tr>
    <tr>
      <td class="yacheyka-pervay-stlbes">I</td>
      <td class="yacheyka-pervay-stlbes">1</td>
      <td class="yacheyka">

        <div class="yacheyka">
          <div class="yacheyka-levo-verh">
            <h1>H</h1>
          </div>
          <div class="yacheyka-pravo-verh"><span class="formula"><span><sup>1</sup><sub>1,00797</sub></span></span>
          </div>
          <div class="yacheyka-niz">
            <div class="text-vnizu-yacheyka"><b>Водород</b></div>
          </div>
        </div>

      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td class="yacheyka-pervay-stlbes">II</td>
      <td class="yacheyka-pervay-stlbes">2</td>
      <td>
        <div class="yacheyka">
          <div class="yacheyka-levo-verh">
            <h1>Li</h1>
          </div>
          <div class="yacheyka-pravo-verh"><span class="formula"><span><sup>3</sup><sub>0,939</sub></span></span>
          </div>
          <div class="yacheyka-niz">
            <div class="text-vnizu-yacheyka"><b>Литий</b></div>
          </div>
        </div>
      </td>
      <td>
        <div class="yacheyka">
          <div class="yacheyka-levo-verh">
            <h1>Be</h1>
          </div>
          <div class="yacheyka-pravo-verh"><span class="formula"><span><sup>4</sup><sub>9,0122</sub></span></span>
          </div>
          <div class="yacheyka-niz">
            <div class="text-vnizu-yacheyka"><b>Бериллий</b></div>
          </div>
        </div>
      </td>
      <td>3</td>
      <td>3</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="yacheyka-pervay-stlbes">III</td>
      <td class="yacheyka-pervay-stlbes">3</td>
      <td>

      </td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
    <tr>
      <td rowspan="2" class="yacheyka-pervay-stlbes">IV</td>
      <td class="yacheyka-pervay-stlbes">4</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="yacheyka-pervay-stlbes">5</td>
      <td>4</td>
      <td>5</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>

    <tr>
      <td rowspan="2" class="yacheyka-pervay-stlbes">V</td>
      <td class="yacheyka-pervay-stlbes">6</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="yacheyka-pervay-stlbes">7</td>
      <td>5</td>
      <td>5</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
    <tr>
      <td rowspan="2" class="yacheyka-pervay-stlbes">VI</td>
      <td class="yacheyka-pervay-stlbes">8</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="yacheyka-pervay-stlbes">9</td>
      <td>5</td>
      <td>5</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
    <tr>
      <td rowspan="2" class="yacheyka-pervay-stlbes">VII</td>
      <td class="yacheyka-pervay-stlbes">10</td>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
    <tr>
      <td class="yacheyka-pervay-stlbes">11</td>
      <td>5</td>
      <td>5</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>7</td>
      <td>8</td>
      <td>9</td>
      <td>10</td>
    </tr>
  </table>
</div>
<!-- подключаем PHP с дневной и ночной темой -->
<?  include 'php/temi_noch_i_den.php';   ?>
<!-- подключаем подвал сайта -->
<?  include 'bloki/footer_niz.php';   ?>
</body>
</html>