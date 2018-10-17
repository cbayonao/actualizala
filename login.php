
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In ActualizaLa</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	</head>
<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<a class="navbar-brand"></a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<h1>Inicia sesión en ActualizaLa</h1>
	</div>
	<div class="container">
		<h3>Por favor inicia sesión</h3>
		<form action="login.php" method="post">
  			<div class="form-group">
    			<label for="exampleInputEmail1">Correo Electrónico</label>
    			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico">
    		</div>
  			<div class="form-group">
    			<label for="exampleInputPassword1">Contraseña</label>
    			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña">
  			</div>
  			<div class="form-group form-check">
    			<input type="checkbox" class="form-check-input" id="exampleCheck1">
    			<label class="form-check-label" for="exampleCheck1">Recuerdame!</label>
  			</div>

  				<input type="submit" value="Ingresar">

          <button onclick="registrar()" type="submit" class="btn btn-primary">Ingresar</button>


          <button onclick="registrar()" type="submit" class="btn btn-secondary">Registarme</button>
        </form>
		</div>
	</div>
  <div class="container">
    <footer>
    <h6>Camilo Bayona CTO - R & B Lawyers SAS</h6>
  </footer>
  </div>
  <script> 
    function registrar() {
  document.getElementById("demo").innerHTML = "Hello World";
}

  </script>
  <script src="app.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>