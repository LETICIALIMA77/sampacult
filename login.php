
<!DOCTYPE html>
<html lang="en">
<link rel="shortcut icon" href="./cult.jpeg" type="image/x-icon">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class= 'container'>
<div class="container_content">
<div class="container_content_inner">
  <h3>Login Sampacult</h3>
<form>
  <div class="form-group">
    <label for="Email" style="color:black">Endereço de Email</label>
    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Insira o Email">
    <small id="emailHelp" class="form-text text-muted">Insira um Endereço de Email válido</small>
  </div>
  <div class="form-group">
    <label for="Password" style="color:black">Senha</label>
    <input type="password" class="form-control" id="Password" placeholder="Insira a Senha">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="Check">
    <label class="form-check-label" for="Check" style="color:black">Lembrar de mim</label>
  </div>
  <div class="btns">
<button class='btns_more'>Entrar</button>
</div>
</form>
</div>
</div>
 <div class="container_outer_img">
 <div class="img-inner">
 <img src='./cult.jpeg'  alt="" class="container_img"/>
       </div>
     </div>
  </div>
<div class="overlay"></div>
</body>
</html>
