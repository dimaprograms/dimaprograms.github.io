<html>
<head>
<meta charset="UTF-8">
<title>Як підключити Visual Studio Code + GitHub</title>

 <!--   <script>
    window.onload = function() {
    setInterval(clockPainting, 1000);
    }
    </script> -->
    <!-- =======LOGIN============= -->
<script type="text/javascript">
    function send()
    { var valid=true;
    var elems=document.forms[0].elements;
    for (var i=0; i<document.forms[0].length; i++){
        if (elems[i].getAttribute('type') == 'text' ||
        elems[i].getAttribute('type') == 'password' ||
        elems[i].getAttribute('type') == 'email') {
            if (elems[i].value == '' ) {
                elems[i].style.border = '2px solid red';
                valid = false;
            }
        }
    } 
    if (!valid){
        alert('Заповніть всі поля!');
        return false;
    }
    }
</script>
<!--Style CSS-->
<style>
    .shadowtext { text-shadow: 1px 3px 2px white, 0 0 1em red;
        color: #460aeb;
        font-size: 2em;
    }
    
</style>


</head>
<!--Додаємо фон -->
<body background="images/bg.jpg">
<table border="1" align="center" cellpadding="10">
    <tr>
        <td background="images/bg-3.jpg" colspan="2" height="150" align="right">
            <font size="5" align="center" color="Maroon"> <img src="images/vscode.png" height="50%" width="" align="left"> <h1 class="shadowtext"> <a href="https://www.youtube.com/watch?v=KiMtkJw-4gs">Visual Studio Code + GitHub</a></h1></font></td></td>
    <tr>
        <td colspan="2">
            <font size="4"<b>
            <a href="#">Головна</a>
            <a href="#">Фотогалерея</a>
            <a href="#">Телефони</a>
            <a href="#">Статистика</a>
            <a href="#">Зареєстровані</a>
            </b></font>
        </td>
    <tr>
        <td width="30%" valign="top" >
            <!-- clock widget start -->
  <!-- часи -->
            <script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","https://s.bookcdn.com//css/cl/bw-cl-180x170r9.css?v=0.0.1"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_19_652289509"><div style="width:120px; height:140px; margin: 0 auto;"><a href="https://hotelmix.com.ua/time/rivne-36729">Рівне</a><br/></div></div> <script type="text/javascript"> function setWidgetData_652289509(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_652289509 = -1; widgetSrc = "https://widgets.booked.net/time/info?ver=2;domid=;type=19;id=652289509;scode=124;city_id=36729;wlangid=29;mode=2;details=0;background=ffffff;border_color=ffffff;color=008bf5;add_background=ffffff;add_color=333333;head_color=ffffff;border=0;transparent=0"; var widgetUrl = location.href; widgetSrc += '&ref=' + widgetUrl; var wstrackId = ""; if (wstrackId) { widgetSrc += ';wstrackId=' + wstrackId + ';' } var timeBookedScript = document.createElement("script"); timeBookedScript.setAttribute("type", "text/javascript"); timeBookedScript.src = widgetSrc; document.body.appendChild(timeBookedScript); </script>
<!-- clock widget end -->
<!-- часи
            <script>src="js/clock1.js" </script>
            <center><canvas id="canvas" height="120" width="120"</canvas> </center>
  -->
                
                <hr>
            <font size="5" color="navy"><h2>News</h2></font>
            <font size="5">
                <ul>
                    <li><a href="#">сайт будівельної компанії</a></li>
                    <li><a href="#">сайт ТМ "Новашкола"</a></li>
                    <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                    <li><a href="#">Розробка CMS for Metro Cash&Carry</a></li>
                    <li><a href="#">Сайт-візитівка дизайнера інтерфейсів</a></li><br>
                    <p align="right"><a href="#">інші...</a></p>
                </ul>
            </font>
            <hr>
                <h1 align="center"><font color="green">Registration</font></h1>
                <form action="forma.php" method="post" onsubmit=" return send();">
                <table align="center" bgcolor="#ccc">
                <TR>
                    <td><font color="green"> Прізвище</font>: </td>
                    <td><input type="text" size="10" maxlength="20" name="name2" </td>
                </TR> 
                <TR>
                    <td><font color="green"> І'мя</font>: </td>
                    <td><input type="text" size="10" maxlength="20" name="name1" </td>
                </TR>
                <TR>
                    <td><font color="green"> E-mail</font>: </td>
                    <td><input type="text" size="10" maxlength="20" name="email" </td>
                </TR>
                <TR>
                    <td><font color="green"> Пароль</font>: </td>
                    <td><input type="text" size="10" maxlength="20" name="password" </td>
                </TR> 
                </table>

                <p align="center">
                    <input type="submit" value="Зареєструвати">
                    <input type="reset" value="Очистити">                    
                </p>
                </form>
                <hr>

                <div id="shim">shim for font face</div>

                <h1>HTML5 Pacman</h1>
                            
                <div id="pacman"></div>
                <script src="js/pacman.js"></script>
                <script src="js/modernizr-1.5.min.js"></script>
              
                <script>
              
                  var el = document.getElementById("pacman");
              
                  if (Modernizr.canvas && Modernizr.localstorage && 
                      Modernizr.audio && (Modernizr.audio.ogg || Modernizr.audio.mp3)) {
                    window.setTimeout(function () { PACMAN.init(el, "./"); }, 0);
                  } else { 
                    el.innerHTML = "Sorry, needs a decent browser<br /><small>" + 
                      "(firefox 3.6+, Chrome 4+, Opera 10+ and Safari 4+)</small>";
                  }
                </script>




        </td>
        <td width="70%"> <p>Зробити сайт з нами легко</p>

   <p>Створення власного сайту - це не тільки прерогатива великого бізнесу. Інтернет відкриває широкі можливості в першу чергу для малого бізнесу, для приватної підприємницької ініціативи. Адже, при започаткуванні власної справи розробка сайту потребує зовсім невеликих інвестицій, у порівнянні з іншими видами витрат. Створити сайт, в більшості випадків - це значно дешевше, наприклад, ніж оренда офісу, чи витрати на зарплату працівників.</p>

<p>Якщо Вам потрібно якісно створити сайт, який максимально буде відповідати своєму призначенню, то Ви завітали за вірною адресою!</p>
<h3 align="left"><font color="blue"><a href="https://w3schoolsua.github.io/html/index.html" target="_blank">> GitHub . українською<br></a></font></h3>

<p>Наша вебстудія допоможе, якщо Вам потрібно:</p>
<ul>
    <li>зробити сайт якісно</li>
    <li>зробити сайт недорого</li>
    <li>зробити сайт швидко</li>
    <li>зробити сайт ефективно</li>
</ul>
<p>Ми будемо раді стати Вам у нагоді і створити веб-сайт, якісний і привабливий для відвідувача. Вебстудія Web-DECO надає цілий комплекс послуг з проектування сайтів, дизайну сайтів і розробки сайтів.</p>

<p>Створити сайт у Києві? Створити сайт в іншому місті?</p>

<p>Так, цілком можливо. Територіально наша вебстудія знаходиться в Київській області, тому найчастіше ми займаємось розробкою сайтів для замовників із Києва. Але кількість користувачів Інтернет постійно росте і в інших містах - у Дніпропетровську, Львові, Харкові, Донецьку, Запоріжжі, Кіровограді, Черкасах, та в більшості інших куточків України. Відповідно, зростає і попит на веб-сайти. Тому ми будемо раді створити сайт і для клієнтів з будь-яких інших міст. В такому разі вебстудія виконує всі роботи зі створення сайту віддалено.</p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/KiMtkJw-4gs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br>Створення сайту є однією з наших пропозицій у галузі веб-розробки. Коротко про всі пропозиції:

<p align="center">Дизайн сайту від веб-студії Web-DECO</p>

<p><img src="images/penzli.jpg" height="140" width="140" align="left" hspan="15" vspace="5"> При створенні сайту його зовнішній вигляд, з нашої точки зору, має бути гармонійним і збалансованим. Дизайн сайту повинен мати певну оригінальність, щоб він легко запам'ятовувався. З другого боку, на сайті мають бути присутні зручність візуального сприйняття і інтуітивна зрозумілість інтерфейсів. Саме тому ми пропонуємо виключно індивідуальний підхід до створення дизайну сайту. При проектуванні кольорових рішень, візуальних елементів сайту ми обов'язково врахуємо специфіку діяльності клієнта і його особисті побажання.</p>

<p>Розробка сайту в нашій веб-студії

(картинка html.jpg)Основа для ефективного виконання сайтом покладених на нього задач, як правило, закладається ще в період розробки сайту. Ми ретельно ставимось до питань швидкодії і економії ресурсів при роботі сайту. В той же час, важливе значення мають його надійність, зручність керування сайтом, можливість оновлення і нарощення функціональності сайту. Тому ми розробили власну систему керування контентом сайту (CMS), яка дозволяє зробити процес управління створеним сайтом максимально зручним і приємним.</p>

<p>При розробці cайтів фахівці вебстудії Web-DECO використовують найбільш прогресивні технології веб-розробки.</p>

<p>Підтримка сайту, пошукове просування сайту, пошукова оптимізація сайту від веб-студії Web-DECO

<p>(картинка graphic.jpg)Важливим напрямком діяльності нашої вебстудії є також технічна і інформаційна підтримка сайтів. Адже мало просто зробити сайт. Щоб зацікавити відвідувача, створений сайт має підтримувати свій контент у свіжому і актуальному стані, а також в разі потреби оновлювати свої сервіси і функціональний зміст. Крім того, не слід забувати і про пошукову оптимізацію сайту (SEO), завдяки якій сайт отримує гарне взаєморозуміння із провідними пошуковими системами. Відвідувачі, які прийшли на сайт з пошукових машин, є для сайту найціннішими. Вони вже сформулювали свої інтереси і намагаються знайти інформацію на потрібну для них тему. Саме тому дуже важливо направити на сайт відвідувачів з пошукових систем, які задають цільові фрази, що стосуються Вашого бізнесу. Тож задача пошукової оптимізації - просування сайту в верхні рядки результатів пошукових систем за ключовими словами, які шукає користувач. Це дає гарну можливість привернути увагу до сайту з боку великої кількості зацікавлених відвідувачів.</p>

<p>Звертайтесь до веб-студії Web-DECO, і ми з радістю застосуємо свої здібності і досвід для вирішення Ваших задач! Ми можемо створити сайт, який стане для Вас вдалою інвестицією.</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/3l0SHPlw0-8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<img src="images/poday-renke-ukraine.jpg" height="300px" width="" align="top" hspan="15" vspace="5">
<p>Ну і звісно трішки хорошого жарту в такий складний для країни час</p><br>
<iframe width="560" height="315" src="https://www.youtube.com/embed/4SHsSYFwyZI?start=96" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<!--
<img src="images/podaj-reke-ukrainie-03.png" height="140" width="" align="left" hspan="15" vspace="5">
-->
</td>
    </tr>
    <td background="images/bg-3.jpg" colspan="2" align="center" valign="middle" height="90"><a href="https://www.youtube.com/watch?v=KiMtkJw-4gs">Як підключити Visual Studio Code + GitHub<br></a>
    <font size="4"> <a href="https://youtu.be/HuLeehnGC0s" target="_blank">>>Доброго вечора ми з України<br></a></font></td> 
    </tr>
</table>
<style type="text/css">
    @font-face {
      font-family: 'BDCartoonShoutRegular';
      src: url('BD_Cartoon_Shout-webfont.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }
    #pacman {
      height:450px;
      width:342px;
      margin:20px auto;
    }
    #shim { 
      font-family: BDCartoonShoutRegular; 
      position:absolute;
      visibility:hidden
    }
    h1 { font-family: BDCartoonShoutRegular; text-align:left; }
    body { width:100%; margin:0px auto; font-family:sans-serif; }
    a { text-decoration:none; }
  </style>

<!--<a>https://www.youtube.com/watch?v=KiMtkJw-4gs</a>-->
</body>
</html>
