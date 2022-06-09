function calculo_media(){
    var a = parseInt(document.getElementById("a").value);
    var b = parseInt(document.getElementById("b").value);
    var c = parseInt(document.getElementById("c").value);

    var d = parseInt(document.getElementById("d").value);
    
    var result = ( a + b + c + d ) / 4;

    var calculo = (result);
    calculo = calculo.toFixed(2); 

    var texto = "";

    if(calculo<60.0){
    texto = "Media: " + calculo + " | Você Está Reprovado!";
    alert(texto); 
    }
    else if(calculo>=60.0 ){ 
    texto = "Media: " + calculo + " | Você está Aprovado!";
    alert(texto);
    
    }
    document.getElementById("paragrafo").innerHTML = texto;

}