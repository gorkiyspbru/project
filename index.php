<!DOCTYPE html>
<html>
<head>
  <title>Аренда беседки в МУРИНО</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Общие стили -->
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <!-- Прописание правил -->
  <link rel="stylesheet" type="text/css" href="style/rules.css">
  <!-- Стили для горизонтального меню -->
  <link rel="stylesheet" type="text/css" href="style/menu.css">
  <!-- Стили модального окна -->
  <link rel="stylesheet" href="modalform/libs/remodal/remodal.css">
  <link rel="stylesheet" href="modalform/libs/remodal/remodal-default-theme.css">
  <link rel="stylesheet" href="modalform/css/formstyle.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <!-- Скрипт fittext -->
  <script type="text/javascript" src="js/jquery.fittext.js" ></script>
  <!-- Google API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsaa_SIVRywd-nAswhHy5hZIeI3E4Xc2g"></script>
  <!-- Скрипт Google MAP -->
  <script src="js/map.js" type="text/javascript"></script>
</head>
<body>
  <header>
    <nav>
      <div class="top-menu">
        <ul class="menu-main">
          <li><a href="#price">Беседка</a></li>
          <li><a href="#service">Услуги и цены</a></li>
          <li><a href="#comments">Отзывы</a></li>
          <li><a href="#contact">Контакты</a></li>
        </ul>
      </div>
    </nav>         
    <div class="img">
      <img id="logo" src="images/logo.png" alt="logo">
      <h1 id="span_1">Беседка в аренду с мангалом</h1>
      <img class="besedka" src="images/besedka.png" alt="">
    </div>
  </header>
  <section>

    <div class="about_us">
      <img  class="gross" src="images/listva.png" alt="">
      <div id="span_2">
        <p>Закрытая територия.</p>
        <p>Имеется мангал, туалет!</p>
        <p>Беседка оснафена:</p>
        <ul>
          <li>электричеством;</li>
          <li>светом;</li>
          <li>инфракрасными обогревателями;</li>
        </ul>
      </div>
    </div>

    <div class="price" id="price">
      <a name="price"></a>
      <img  class="gross" src="images/Birthday-Parties.jpg" alt="">
      <div class="side-left" id="price-left">
        <p>С понедельника по пятницу:</p>
        <p>3 часа - 2 000р;</p>
        <p>целый день - 4 500р;</p>
      </div>
      <div class="side-right" id="price-right">
        <p>Суббота, воскресенье и праздничные дни:</p>
        <p>3 часа - 3 000р;</p>
        <p>целый день - 7 000р;</p>
      </div>
    </div>

    <div class="service" id="service">
      <a name="service"></a>
      <img  class="gross" src="images/povar.png" alt="">
      <div class="side-left" id="service-left">
        <p>Заказ услуги повара:</p>
        <p>1 500р за первый час;</p>
      </div>
      <div class="side-right" id="service-right">
        <p>Продление услуги повара:</p>
        <p>500р за час;</p>
      </div>
    </div>

    <div class="mangal" id="mangal">
      <img  class="gross" src="images/faer.png" alt="">
      <div class="side-left" id="mangal-left">
        <p>10 литров угля</p>
        <p>за 200 рублей</p>
      </div>
      <div class="side-right" id="mangal-right">
        <p>0,5 литра</p>
        <p>средства</p>
        <p>для розжига угля</p>
        <p>за 200 рублей</p>
      </div>
    </div>

    <div class="holiday">
      <img  class="gross" src="images/holiday.png" alt="">
      <h3 id="span_3">Организация любых праздников и мероприятий!</h3>
    </div>

    <div class="comments">
      <a name="comments"></a>
      <img  class="gross" src="images/image.png" alt="">
      <h3 id="span_4">Отзывы наших гостей:</h3>
      <div class="otziv">
        <table>
          <tr>
            <td><img src="images/otziv_1.jpg"></td>
            <td></td>
            <td><img src="images/otziv_2.jpg"></td>
            <td></td>
            <td><img src="images/otziv_3.jpg"></td>
            <td></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="contact-map">
      <a name="contact"></a>
      <h3 id="span_5">Как нас найти!</h3>
      <div class="contact" id="contact">
        <p>Ленинградская область,</p>
        <p>Всеволожский район,</p>
        <p>пос. Мурино,</p>
        <p>ул. Садовая, дом 48</p><br/>
        <p>тел. +7-812-ХХХ-ХХ-ХХ</p><br/>
        <!-- <a href="#" class="zakaz">ЗАБРОНИРОВАТЬ</a><br/> -->
      </div>
      <div id="map" class="map">
        <!-- вставляется карта Google Map -->
      </div>
    </div>

    <!--  -->

    <div class="butWrap">
    <a class="linkButton" data-remodal-target="secondModal" title="Заказ брони">ЗАБРОНИРОВАТЬ</a>
    </div>
    <div class="remodal" data-remodal-id="secondModal" data-remodal-options="hashTracking: false,closeOnConfirm: false">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div class="formArea">
      
      <form id="secondForm" class="form" autocomplete="off">
      <p class="formTitle">Сделайте заказ и наш консультант свяжется с вами для уточнения дополнительной информации!<br/>Спасибо, что обратились к нам!</p>
      <p class="msgs"></p>

          <fieldset class="form-fieldset ui-input __first">
            <input name="uname" type="text" id="username" tabindex="0"/>
            <label for="username">
              <span data-text="Введите ваше имя">Введите ваше имя</span>
            </label>
          </fieldset>

          <fieldset class="form-fieldset ui-input __second">
            <input name="uphone" type="tel" id="phone" tabindex="0" pattern="^[ 0-9]+$"/>
            <label for="phone">
              <span data-text="Введите ваш телефон">Введите ваш телефон</span>
            </label>
          </fieldset>

          <input name="formInfo" class="formInfo" type="hidden" value=""/>

          <div class="form-footer">
            <input type="submit" class="formBtn" value="ЗАБРОНИРОВАТЬ" />
          </div>
      </form>
      </div>
    </div>
  </section>
  <footer>
    <div id="footer">
    
    </div>
  </footer>
     
  <!-- Скрипт адаптации текста fitText при измении размеров окна браузера  -->

  <script>
          
    /*
    $("#").fitText(0.8, { minFontSize: '8px', maxFontSize: '70px' })
    */

    $("#span_1").fitText(1.5);
    $("#span_2").fitText(2.5);
    $("#price").fitText(5);
    $("#service").fitText(5);
    $("#mangal").fitText(4);
    $("#span_3").fitText(2.5);
    $("#span_4").fitText(2.5);
    $("#span_5").fitText(3);
    $("#contact").fitText(2.5);

  </script>

  <!-- Конец скрипта fitText -->

  <!-- Скрипт Remodal для открытия формы бронироваяния в модальном окне -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script type="text/javascript">
  $(".linkButton").click(function() {
      $( "input[name*='formInfo']" ).val($(this).attr( "title" ));
  });
  </script>
  <script src="modalform/libs/remodal/remodal.min.js"></script>
  <script src="modalform/js/form.js"></script>

  <!-- Конец скрипта Remodal -->

</body>
</html>
