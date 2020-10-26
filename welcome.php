<?php
  session_start();
  if(isset($_SESSION['useruid'])){
    header("Location: mainpage.php?login=success");
    exit();
  }
  else {
    header("location: welcome.php");
    exit();
  }


?>


<!DOCTYPE html>

      <head>
       <meta charset="utf-8">
       <title>MMT University</title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="welcome-style.css">
       <link rel="icon" href="logo-black.png" type="image/xpng">
       <script src="jquery-3.5.1.min.js"></script>
       <script type="text/javascript" src="nav.js"></script>
       <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     </head>


    <body>

      <nav>
        <div class="menu-center">


        <input type="checkbox"id="check">
        <label for="check">
          <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
        <img src="logo-solo.png" >
        <ul>
        <li><a href="#home" class="active" > Home</a></li>
        <li><a href="#quem-somos" >Quem somos</a></li>
        <li><a href="#onde-atuamos">Onde  Atuamos</a></li>
        <li><a href="#servicos">Servicos</a></li>
        <li><a href="#Depoimentos">Depoimentos</a></li>
        <li><a href="#Comecando">comecando</a></li>
        <li><a href="#sac">Contacte-nos</a></li>
        <a  href="https://www.instagram.com/mmtuniversity_oficial/" class="fa fa-instagram"  target="_blank"></a>
        <a href="https://www.youtube.com/channel/UCuf2KhhA8Ub3hcSgfaziiDw" class="fa fa-youtube" target="_blank"></a>
         <a class="cta" rel="modal:open" key="login" id="myBtn">Acessar</a>


      </ul>
</div>
     </nav>
     <script src="scroll.js"></script>









      <script type="text/javascript">
              document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                    e.preventDefault();

          document.querySelector(this.getAttribute('href')).scrollIntoView({
              behavior: 'smooth'
              });
        });
        });

      </script>





          <section class="container3" id="home">
            <h1><strong>Bem-vindo à MMT UNIVERSITY<strong><h1>
                <h2> Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br>
                   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br>
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi <br>
                  ut aliquip ex ea commodo consequat.<br>
                   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore <br>
                   deserunt mollit anim id est laborum.<h2>
            </section>

          <section class="container2" id="quem-somos">
            <h3><u class="underline">Que</u>m somos</h3>

            <h1>Bem-vindo a MMT University, a mais completa Universidade de Traders.<br>
              Atuamos no mercado há mais de 3 anos e ajudamos mais de 5 mil pessoas a mudarem de vida.<br>
              Aqui pessoas de todos os lugares do mundo se encontram para aprender e trocar experiências <br>
              sobre as diversas encontram para aprender e trocar experiências sobre as diversas<br>
              modalidades do mercado financeiro. <br><br>

              Na MMT University consideramos todos como parte de uma família e apoiamos um aos outros<br>
              para nos tornarmos traders melhores e mais consistentes a cada dia.<br>
              Disponibilizamos todas as ferramentas para que você não seja apenas um analista de gráficos,<br>
              mas para que você principalmente se torne um trader profissional.<br>
              Encaramos trading não apenas como uma profissão, mas como uma paixão.<br>
              Paixão por fazer o que amamos e da liberdade de podermos operar de qualquer lugar.  </h1>

              <h2><b> Uma plataforma intuitiva, com conteudos<br>
                   de qualidade e comprometida com
                 seu aprendizando.<br></h2>
                <p>Conteudos e ferramentas completas para voce<br>
                  se tornar um trader profissinal.</p>


          </section>
          <section class="container4" id="onde-atuamos">
            <h1><strong>Forex</strong></h1>
            <p>Forex e o mercado onde vários ativos diferentes são negociadas. O mercado Forex e o maior e mais<br>
                liquido mercado do mundo com uma movimentação de trilhões de dólares diariamente. <br>
                Nesse mercado podem ser negociados pares de moedas (EUR/USD, USD/JPY, EUR/GBP, etc.), <br>
                commodities (OURO,PRATA, US OLEO, etc.) - essas duas categorias como nossa especialidade,<br>
                além de índices (DOW JONES, S&P 500, NASDAQ, BOVESPA, etc.), e criptomoedas (BITCOIN, LITECOIN, ETHEREUM, etc.).<br>
                Por ser um mercado de alta liquidez, há também uma grande quantidade de corretoras disponíveis para traders.<br>
                 Com essa vasta seleção de opções, nos da MMT University, apenas fazemos parcerias com<br>
                 aquelas corretoras que   são regulamentadas, seguras, e com taxas e comissões competitivas com<br>
                as demais. Dessa maneira, aqui abaixo estão as nossas parceiras<br></p>





          <div class="relative">
           <button class="btnfxtm"><img src="btfxtm.png"></button>
           <button class="btnicmarkets"><img src="bticmarkets.png"></button>
           <button class="btnoanda"><img src="btoanda.png"></button>
       </p>
   </div>


            <h1> Opções Binárias</h1>
            <p>Opções Binarias é uma subdivisão do mercado forex, sendo assim é possível operar todos os ativos que são operados<br>
              no mercado forex, usando uma metodologia de estudo diferente. Ésta modalidade requer um baixo valor de<br>
              investimento inicial, o que a torna uma ótima opção para iniciantes.   Em Opções Binarias Temos<br>
              como parceira a maior e mais renomadacorretora da modalidade , porque a MMT UNIVERSITY se preocupa que seus<br>
              alunos tenham disponiveis o maior acervo de ferramentas para facilitar suas analises, uma plataforma de negociação<br>
              intuitiva e fácil de manusear, alem da tranquilidade de saber que seu capital esta seguro.<br>
              Abaixo abaixo está a nossa parceira.</p>

              <div class="relative">
                <button class="iqoptions"><img src="btiq.png"></button>

              </div>

          </section>

          <section class="container5" id="servicos">
            <h1><u class="underline">Ser</u>viços </h1>


            <ul>
              <div class="x">
              <li><a href="#">VIDEO AULAS</a></li>
              <li><a href="#">LIVES DIARIAS (ANALISE DO MERCADO)</a></li>
              <li><a href="#">LIVES SEMANAIS (PARA DUVIDAS)</a></li>
              <li><a href="#">LIVES SEMANAIS (RESTROSPECTIVA DO MERCADO)</a></li>
              <li><a href="#">SALA DE SINAIS</a></li>
              <li><a href="#">MATERIAIS DIDATICOS</a></li>
              <li><a href="#">FERRAMENTAS DE AUXILIO</a></li>
              <li><a href="#">PREMIAÇÃO POR DESEMPENHO (MENSAL)</a></li>
              <li><a href="#">PROGRAMA DE TALENTOS</a></li>
              </div>
            </ul>

          </section>



        <section class="container6" id="Depoimentos">
          <h1> <strong>Veja o que a nossa familia<br>acha sobre nos.</strong></h1>

          <iframe width="900" height="600"
          src="https://www.youtube.com/embed/watch?v=aOJXqaL26hs">
        </iframe>

  </section>

        <section class="container7" id="Comecando">
        </section>










                <section class="container-sac" id="sac">


                <div class="contact-form">
                  <h1>Atendimento</h1>
                  <p>Tire todas as suas dúvidas enviando uma mensagem e <br>nós responderemos dentro de 48h. A equipe MMT.</p>
                  <div class="txtb">
                    <input type="text" name="" value="" placeholder="Introduza o seu nome">
                  </div>

                  <div class="txtb">
                    <input type="email" name="" value="" placeholder="Introduza o seu email">
                  </div>

                  <div class="txtbm">

                    <input type="text" name="message" value="" placeholder="Escreva a sua mensagem" >
                  </div>
                  <div>
                    <a class="btn">Enviar</a>
                  </div>


                </div>
                </section>




<div class="modal-container" id="modalContainer">
       <div class="container" id="myModal">
         <div class="form-container sign-up-container">
           <form action="signup.inc.php" method="POST">
             <h1>MMT University</h1>
             <span>Se registre para começar</span>
             <input type="text" name="name" placeholder="Usuário" />
             <input type="email" name="email" placeholder="Email" />
             <input type="text" name="uid" placeholder="Nome completo" />
             <input type="password" name="pwd" placeholder="Senha"/>
             <input type="password" name="pwdrepeat" placeholder="Repita a sua senha" />
             <button type="submit" name="submit">Registrar</button>
           </form>

           <?php
            if (isset(($_GET["error"]))) {
              if ($_GET["error"] == "emptyInput") {
                echo "</p>Preencha todos os campos</a>";
              } else if ($_GET["error"]=="invalidUid") {
                echo "</p>Escolha um nome apropriado</p>";
              }
              else if ($_GET["error"]=="invalidEmail") {
               echo "</p>Escolha um email apropriado</p>";
             }
             else if ($_GET["error"]=="passwordsdontmatch") {
              echo "</p>As senhas não coincidem</p>";
            }
            else if ($_GET["error"]=="stmtfailed") {
             echo "</p>Tente novamente</p>";
           }
           else if ($_GET["error"]=="usernameTaken") {
            echo "</p>Esse nome já foi usado por outro usuário</p>";
          }
          else if ($_GET["error"]=="none") {
           echo "</p>Bem vindo!</p>";
         }
            }
            ?>
         </div>
         <div class="form-container sign-in-container">
           <form action="login.inc.php" method="POST">
             <h1>Acessar</h1>
             <span>Acesse a MMT University</span>
             <input type="uid" placeholder="Email/Usuario" />
             <input type="pwd" placeholder="Senha" />
             <a href="#">Esqueceu a senha?</a>
             <button name="submit">Acessar</button>
           </form>
         </div>
         <div class="overlay-container">
           <div class="overlay">
             <div class="overlay-panel overlay-left">
               <h1>Bem vindo!</h1>
               <p>Para continuar aprendendo, acesse a sua conta!</p>
               <button class="ghost" id="signIn">Acessar</button>
             </div>
             <div class="overlay-panel overlay-right">
               <h1>MMT University!</h1>
               <p>Se registre para entrar na melhor universidade trading do mundo.</p>
               <button class="ghost" id="signUp">Registre-se</button>
             </div>
           </div>
         </div>
     </div>
   </div>
   <script src="main.js"></script>
   <script src="modal.js"></script>

    </body>

        <?php include_once 'footer/footer.php';?>

      </body>
    </html>
  </html>
