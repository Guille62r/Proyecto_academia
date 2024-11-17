var linea=0;
function presupuesto() {
    const java=7500;
    const python=6000;
    const c=6000;
    const php=500;
    var valor1=0;
    var descricion;
    var factura;
    if(linea>2){
        document.getElementById("factura").innerHTML+='<tr><td class="demo1"></td><td class="demo2"></td><td class="demo3"></td><td class="demo4"></td></tr>';
    }
    if(linea==0){
        factura=prompt("numero de factura: ");
        document.getElementById("demo").innerHTML=factura;
    }
        valor1=prompt("cantidad de curso a vender:  ");
        document.getElementsByClassName("demo1")[linea].innerHTML=valor1;
        descricion=prompt("describa el servicio a vender: ");
        document.getElementsByClassName("demo2")[linea].innerHTML=descricion;
        let curso;
        curso=prompt("elija el curso java, python,C,php");
        switch(curso){
            case "java":
                document.getElementsByClassName("demo3")[linea].innerHTML=java;
                break;
            case "python":
                document.getElementsByClassName("demo3")[linea].innerHTML=python;
                break;
            case "C":
                document.getElementsByClassName("demo3")[linea].innerHTML=c;
                break;
            case "php":
                document.getElementsByClassName("demo3")[linea].innerHTML=php;
                break;
            default:
            document.getElementsByClassName("demo3")[linea].innerHTML="curso no disponible";
            break;
        }
        total=curso;
        switch(total){
            case "java":
                document.getElementsByClassName("demo4")[linea].innerHTML=java*valor1;
                document.getElementById("demo5").innerHTML=java*valor1;
                document.getElementById("demo6").innerHTML=(java*valor1)*0.21;
                document.getElementById("demo7").innerHTML=((java*valor1)*0.21)+Number(java*valor1);
                break;
            case "python":
                document.getElementsByClassName("demo4")[linea].innerHTML=python;
                document.getElementById("demo5").innerHTML=python*valor1;
                document.getElementById("demo6").innerHTML=(python*valor1)*0.21;
                document.getElementById("demo7").innerHTML=((python*valor1)*0.21)+Number(python*valor1);
                break;
            case "C":
                document.getElementsByClassName("demo4")[linea].innerHTML=c;
                document.getElementById("demo5").innerHTML=c*valor1;
                document.getElementById("demo6").innerHTML=(c*valor1)*0.21;
                document.getElementById("demo7").innerHTML=((c*valor1)*0.21)+Number(c*valor1);
                break;
            case "php":
                document.getElementsByClassName("demo4")[linea].innerHTML=php;
                document.getElementById("demo5").innerHTML=php*valor1;
                document.getElementById("demo6").innerHTML=(php*valor1)*0.21;
                document.getElementById("demo7").innerHTML=((php*valor1)*0.21)+Number(php*valor1);
                break;
            default:
                document.getgetElementsByClassName("demo4")[linea].innerHTML="curso no disponible";
                break;
        }
    linea++;
}
