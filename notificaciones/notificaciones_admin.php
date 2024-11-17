<?php include '../administrador.html' ?>
<script>
    document.getElementById("logo").setAttribute("src","../img/1.png");
    document.getElementById("avatar").setAttribute("src","../img/admin.jfif");
</script>
<link rel="stylesheet" href="../css/mensaje.css">
<script src="../js/js2.js"></script>
<div
    class="container"
    style="margin-top: 5%;"
>    

<center> 
<h1>NOTIFICACIONES</h1>
</center>
<div style="margin-top: 7%;">
<?php
$db_host="localhost";
$db_nombre="academia";
$db_usuario="root";
$db_contra="";
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
mysqli_set_charset($conexion,"utf8");
$consulta="SELECT * FROM mensaje";
$resultado=mysqli_query($conexion,$consulta);
while(($file=mysqli_fetch_row($resultado))==true){
    if(strtolower($file[1])=="admin"){
        echo '<div style="margin-bottom:2%;margin-top:5%;"><img src="../img/mail.png" class="logo-correo"/><h5>Mensaje del ' . strtolower($file[4]) .' es my nuevo ve a mensajes para ver</h5><a href="http://localhost/proyecto3/mensajeria/mensaje.php" style="float:right;margin-top:-2%;"><button type="button" class="btn btn-primary">VER</button></a><br>';
        echo '<h6 style="margin-left:6%;margin-top:-2%">Asunto: ' . $file[2] . '</h6></div><hr>';
    }
}
?>
</div>
</div>