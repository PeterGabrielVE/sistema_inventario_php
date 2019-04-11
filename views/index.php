<?php
session_start();
if(empty($_SESSIOM['tipo'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de Sesión</title>

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-yeti.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="stylesheet" href="assets/css/login.css">
	
	<!-- JS -->
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/loginjs.js"></script>
</head>
<body>
	<div class="nav">
		<div class="row-fluid" id="mensaje"></div>
	</div>

	<div class="row">
		<div class="row-fluid">
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" style="margin-top: 100px">
				<div class="panel-login">
					<div class="panel-body" id="principal">
						<form class="form-signin" id="form-login" action="">
							<div class="col-md-3">
								<img src="assets/img/user.png" alt="" width="" height="" class="img-responsiv">
							</div>
							<div class="col-md-9">
								<h3 class="color-light">Bienvenido</h3>
								<p class="color-light">Por favor, introduce tus credenciales para ingresar al Sistema</p>
							</div>
							<br>
							<div class="col-md-12">
								<br>
								<div class="errores" id="mensaje1">
									<p class="text-danger">Introduce tu usuario.</p>
								</div>
								<div class="input-group" id="campo1">
									<span class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</span>
									<input type="text" name="usu" id="itFolio" class="form-control form-login btn-block" placeholder="Usuario" autofocus />
								</div>

								<div class="errores" id="mensaje2">
									<p class="text-danger">Introduce tu contraseña</p>
								</div>
								<div class="input-group" id="campo2">
									<span class="input-group-addon">
										<i class="fa fa-lock" aria-hidden="true"></i>
									</span>
									<input type="text" name="pwd" id="itPassword" class="form-control form-login btn-block" placeholder="Contraseña" />
								</div>
								<br>
								<div class="col-lg-4 col-lg-offset-8">
									<div class="form-group" id="campoapaterno">
										<button type="submit" class="btn btn-primary btn-block">
											Ingresar
										</button>
									</div>
								</div>

							</div>
						</form>
					</div><!-- Panel-body -->
				</div><!-- Panel-login-->
			</div>
		</div><!-- row-fluid-- >
	</div><!-- row -->
	
</body>
</html>
<?php
}else{
	header("location:main.php");
}

?>