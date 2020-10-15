<?php
  require_once "header.php";
?>

          <script type="text/javascript">
            $(function(){
              $(".nav-links a").on('click', function(){
                $("html, body").animate({
                  scrollTop: $($.attr(this, 'href')).offset().top
                }, 300);
              });
            });

          </script>


        <div class="container">
        <div class="parallax" id="about">

            </div>

          <div class="parallax2" id="servicos">
          </div>

          <div class="parallax3" id="Depoimentos">
          </div>

          <div class="parallax4" id="Comecando">
          </div>

          <div class="parallax5" id="sac">
          </div>
        </div>


    </body>
</html>

<script src="mobile.js"></script>
