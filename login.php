<?php
  include_once "header.php";
 ?>
 <head>
   <link rel="stylesheet" href="css/login.css">
 </head>

 <section class="signup-form">
   <h2> Acessar</h2>
   <form action="login.inc.php" method="post">
     <input type="text" name="name" placeholder="Usuário/Email">
     <input type="password" name="pwd" placeholder="Senha...">
     <button type="submit" name="submit">Acessar</button>

   </form>
 </section>
