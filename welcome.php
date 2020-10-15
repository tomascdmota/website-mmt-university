<?php
  session_start();
  if(isset($_SESSION['userId'])){
    header("Location: mainpage.php?login=success");
    exit();
  }
  else {

  }
?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>MMT University</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="welcome-style.css">
        <link rel="icon" href="logo-black.png" type="image/xpng">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <body>

          <nav>
            <div class="logo">
              <img src="mmt-white.png" alt="logo">
              <a href="https://www.instagram.com/mmtuniversity_oficial/" class="fa fa-instagram" target="_blank"></a>
              <a href="https://www.youtube.com/channel/UCuf2KhhA8Ub3hcSgfaziiDw" class="fa fa-youtube" target="_blank"></a>
            </div>

            <ul class="nav-links">
              <li><a href="#about">Home<a></li>
              <li><a href="#operations">Onde Atuamos</a></li>
              <li><a href="#servicos">Servicos<a></li>
              <li><a href="#Depoimentos">Depoimentos<a></li>
              <li><a href="#Comecando">Comecando<a></li>
              <li><a href="#sac">Contacte-nos<a></li>
              </ul>

              <a class="cta" href="login.php">Acessar</a>

          <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>

          </div>
          </nav>
          <script src="mobile.js"></script>
          <script type="text/javascript">
            $(function(){
              $(".nav-links a").on('click', function(){
                $("html, body").animate({
                  scrollTop: $($.attr(this, 'href')).offset().top
                }, 300);
              });
            });

          </script>

          <section class="fwh-slide" id="about">
            <img src="quem-somos.png">
          </section>

          <section class="fwh-slide2" id="operations">
            <img src="teste.png">
          </section>

        <section class="fwh-slide3" id="servicos">
          <img src="servicos.png">
        </section>

        <section class="fwh-slide4" id="Depoimentos">
          <img src="depoimentos.png">
        </section>

        <section class="fwh-slide5" id="Comecando">
          <img src="comecando.png">
        </section>

        <section class="fwh-slide6" id="sac">
          <img src="sac.png">
        </section>



        <section class="fwh-slide-mobile" id="about">
          <img src="quem-somos-mobile.png">
        </section>

        <section class="fwh-slide2-mobile" id="operations">
          <img src="operations-mobile.png">
        </section>

      <section class="fwh-slide3-mobile" id="servicos">
        <img src="servicos-mobile.png">
      </section>

      <section class="fwh-slide4-mobile" id="Depoimentos">
        <img src="depoimentos-mobile.png">
      </section>

      <section class="fwh-slide5-mobile" id="Comecando">
        <img src="comecando-mobile.png">
      </section>

      <section class="fwh-slide6-mobile" id="sac">
        <img src="sac-mobile.png">
      </section>






    </body>

    <footer>
      <div class="footer-image">
        <img src="mmt-white.png"/>
      </div>
      <h1> Todos os direitos são reservados à MMT Univerisity.</h1>
</html>
