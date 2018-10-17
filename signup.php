<?php 
  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (email, contrasena) VALUES (:email, :contrasena)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      } else {
      $message = 'Sorry there must have been an issue creating your account';
      }
  }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ActualizaLa - Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php if(!empty($message)): ?>
  <p><?php $message ?></p>
<?php endif; ?>  



	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<a class="navbar-brand"></a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<h1>Regístrate en ActualizaLa</h1>
  </div><br>
  <div class="container">
    <p>Ya estas registrado?
  <a href="login.php">Ingresa al LogIn</a>  </p>
  </div>
	<div class="container">
		<form action="signup.php" method="post">
  			<div class="form-group">
	    		<label for="exampleInputEmail1">Correo Electrónico</label>
	    		<input type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe tu Correo Electrónico">
	    		<small id="emailHelp" class="form-text text-muted">No compartimos tus datos con nadie</small>
  			</div>
  			<div class="form-group">
    			<label for="exampleInputPassword1">Contraseña</label>
    			<input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" placeholder="Escribe tu contraseña">
  			</div>
  			<div class="form-group">
    			<label for="exampleInputPassword1">Confirma tu contraseña</label>
    			<input type="password" name="confirm-password" class="form-control" id="exampleInputPassword1" placeholder="Por favor confirma tu contraseña">
  			</div>
  			<button type="submit" value="submit" class="btn btn-primary">Registrame</button>
		</form>		

	</div>
	<div class="container">
	<div class="card-footer text-muted">
    <footer>
    <h6>Camilo Bayona CTO - R & B Lawyers SAS</h6>
  </footer>
  </div>
  </div>
</body>
</html>