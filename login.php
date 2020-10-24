<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Acessar MMT University</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <link rel="icon" href="logo-black.png" type="image/xpng">
	<link rel="stylesheet" href="style.css">

</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />



<div id="myModal">
<div class="container" id="container">
<div class="form-container sign-up-container">
<form action="#">
<h1>MMT University</h1>
<span>Se registre para começar</span>
<input type="text" placeholder="Usuário" />
<input type="email" placeholder="Email" />
<input type="password" placeholder="Senha" />
<input type="password" placeholder="Repita a sua senha" />
<button name="submit">Registrar</button>
</form>
</div>
<div class="form-container sign-in-container">
<form action="#">
<h1>Acessar</h1>

<span>Acesse a MMT University</span>
<input type="email" placeholder="Email" />
<input type="password" placeholder="Senha" />
<a href="#">Esqueceu a senha?</a>
<button>Acessar</button>
</form>
</div>
<div class="overlay-container">
<div class="overlay">
<div class="overlay-panel overlay-left">
  <h1>Bem vindo!</h1>
  <p>Para continuar aprendendo, acesse a sua conta!</p>
  <button class="ghost" id="signIn">Sign In</button>
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

<button href="#ex1" rel="modal:open" id="myBtn">Acessar</button>
	</body>

</html>
