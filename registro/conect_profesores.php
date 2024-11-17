<?php 
$conexion = mysqli_connect("localhost","root","","academia") or die("problemas con la conexion");
/*
//$exp=preg_match('/^\d{1,2}:\d{2}\s[a]\s\d{1,2}:\d{2}$/', $_REQUEST["horario"]);//Este lo que hace es la comprbacion de que el horario cumpla con el formato mm:ss a mm:ss
//Si es mayor que 0 cumple con el formato de la expresion regular del horario
/*if($exp>0){
    mysqli_query($conexion,"INSERT INTO profesores(nombre,curso,horario,telefono,observacion) VALUES 
    ('$_REQUEST[nombre]','$_REQUEST[curso]','$_REQUEST[horario]','$_REQUEST[telefono]','$_REQUEST[observacion]')") 
    or die("problemas con la conexion en el select" . mysqli_error($conexion));
}*/
$horario=array("mañana","tarde","noche");
$exp=array(0,preg_match('/^\d{9}$/',$_REQUEST['telefono']));
$cont=count($horario);
for($i=0;$i<$cont;$i++){
    if($horario[$i]==$_REQUEST['horario']){
        $exp[0]=1;
        break;
    }
}
if($exp[0]==1 && $exp[1]==1){
    mysqli_query($conexion,"INSERT INTO profesores(nombre,curso,horario,telefono,observacion) VALUES 
    ('$_REQUEST[nombre]','$_REQUEST[curso]','$_REQUEST[horario]','$_REQUEST[telefono]','$_REQUEST[observacion]')") 
    or die("problemas con la conexion en el select" . mysqli_error($conexion));
}
mysqli_close($conexion);
header("Location:registro_profesores.php");
?>