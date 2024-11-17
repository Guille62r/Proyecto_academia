
function nota() {
    var nota1=0;
    var nota2=0;
    var nota3=0;
    var resultados=0;
    nota1=prompt("nota acumulada de MF0950_2: Construcción de páginas web 210: ");
    document.getElementById("demo1").innerHTML=nota1;
    nota2=prompt("nota acumulada de MF0951_2: Integración de componentes software en páginas web: ");
    document.getElementById("demo2").innerHTML=nota2;
    nota3=prompt("nota acumulada de MF0952_2: Publicación de páginas web: ");
    document.getElementById("demo3").innerHTML=nota3;
    resultados=(Number(nota1)+Number(nota2)+Number(nota3))/3;
    document.getElementById("demo4").innerHTML=resultados.toFixed(2);
    if(resultados<10){
        alert("SUSPENDIDO");
    }else{
        alert("ES APTO");
        return true;
    }
}

function nota2(){
    var notas=Array();
    var resultados=0;
    var modulo;
    modulo=document.getElementsByClassName("modulo");
    for(let i=0;i<3;i++){
        notas[i]=prompt("nota acumulada de "+modulo[i].innerHTML+": ");
        document.getElementById("demo"+(Number(i)+Number(1))).innerHTML=notas[i];
    }
    resultados=(Number(notas[0])+Number(notas[1])+Number(notas[2]))/3;
    document.getElementById("demo4").innerHTML=resultados.toFixed(2);
}