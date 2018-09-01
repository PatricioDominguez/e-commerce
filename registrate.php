<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MKL - Registrate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row encabezado d-flex">
        <div class="col-12 col-md-12 col-lg-6">
            <img class="img align-left pt-4 pr-4" href="#" src="img/LOGO MKL-01.png" alt="logo">
        <div class="row menu d-flex">
            <div class="col-12 col-md-11 offset-md-1 col-lg-12 offset-lg-6 ">
            <nav class="nav button">
                <a class="nav-item nav-link d-flex p-3 ml-5 mr-5 text-white" href="index1.html"><h5>Inicio</h5></a>
                <a class="nav-item nav-link d-flex p-3 ml-4 mr-4 text-white" href="iniciar_sesion.html"><h5>Iniciar sesion</h5></a>
                <a class="nav-item nav-link d-flex p-3 ml-4 mr-4 text-white" href="preguntas_frecuentes.html"><h5>Preguntas Frecuentes</h5></a>
            </nav>  
        </div>
        </div>
        </div>
    </div>


<header class="row principal d-block">
    <div class="col-12 col-md-11 offset-md-1 col-lg-8 offset-lg-2 ">
        

        <form class="formulario pt-5 pb-5">
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nombre</label>
                <input type="nombreYapellido" class="form-control" placeholder="Nombre">
            </div>
            <div class="form-group col-md-6">
                <label>Apellido</label>
                <input type="nombreYapellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="form-group col-md-6">
                <label>Usuario</label>
                <input type="email" class="form-control" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="name@e-mail.com">
            </div>
            <div class="form-group col-md-6">
                    <label>Teléfono</label>
                    <input type="telefono" class="form-control" placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label>Celular</label>
                    <input type="cel" class="form-control" placeholder="+54 9 ...">
                </div>
                </div>
            <div class="form-row">   
            <div class="form-group col-md-8">
                <label>Direccion</label>
                <input type="direccion" class="form-control" placeholder="Av. San Martin 100">
            </div>    
            <div class="form-group col-md-4">
                    <label>Piso-Depto</label>
                    <input type="piso" class="form-control">
            </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label>Provincia</label>
                <input type="pronvincia" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label>Localidad</label>
                <input type="localidad" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label>Código Postal</label>
                <input type="cp" class="form-control" placeholder="1640">
            </div>
            </div>
            <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">Quiero recibir novedades</label>
            </div>
            </div>
                 <button class="boton-registro" type="submit" class="btn btn-primary">Enviar</button>
        </form>
</body>
</html>