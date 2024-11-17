<?php include '../profesor.html' ?>
<script>
    document.getElementById("logo").setAttribute("src","../img/1.png");
    document.getElementById("avatar").setAttribute("src","../img/profesor.jpg");
</script>
<link rel="stylesheet" href="../css/mensaje.css">
<script src="../js/js2.js"></script>
<div
    class="container"
    style="margin-top: 5%;"
>    
<img src="../img/mail.png" id="mail-imagen"/>
<div id="contenedor-mensajeria">
<form action="men2.php" method="post" id="formulario-mensaje">
    <label class="form-label">Fecha:</label><br>
    <input class="form-control" type="date" name="fecha"><br>
    <label class="form-label">Destinatario:</label><br>
    <input class="form-control"type="text" name="nombre"><br>
    <label class="form-label">Asunto:</label><br>
    <input class="form-control" type="text" name="asunto"><br>
    <label class="form-label">Mensaje:</label><br>
    <textarea class="form-control" name="mensaje" id=""></textarea><br>
    <input class="form-control" type="text" name="propietario" value="profesor" hidden>
    <button class="btn btn-danger" type="submit" onclick="mensaje()">ENVIAR MENSAJE</button>
    <button class="btn btn-danger" type="reset">BORRAR</button>
</form>
</div>
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
    if(strtolower($file[1])=="profesor"){
        echo '<img src="../img/mail.png" class="logo-correo"/><h5>Mensaje del ' . strtolower($file[4]) .'</h5>';
        $date=date_create($file[0]);
        echo  '<span class="asunto-horario">' . date_format($date,"j/n/Y") . '</span>';
        echo  '<span class="asunto"><b>Asunto: </b>' . $file[2] . "<hr>";
        echo $file[3] . "<br><hr><br><br>";
    }
}
?>
</div>
</div>