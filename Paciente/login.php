<?php

session_start();

include('../config/config.php');
include('Paciente.php');

if (isset($_POST)&& !empty($_POST)){
    $login= $p->login($_POST);
    if ($login->num_rows){
        
    	$_SESSION["login"] = "true";
        echo '<script type="text/javascript">
           window.location = "http://localhost/florecer/Paciente/index.php"
      </script>';
    }else{
        echo "falha login";
    }
 
}
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <title>Modificar sesión </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">

<form method="POST" enctype="multipart/form-data">
<div class="col">
    <input type="text" name="username" id="username" placeholder="username" class="form-control" value=""/>
    <input type="password" name="password" id="password" placeholder="password" class="form-control" value=""/>
    <button class="btn btn-success">Login</button>
 </div>
</form>
    </div></body></html>