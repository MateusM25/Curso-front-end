var idade = 90
console.log(`Você tem ${idade} Anos. `)
 if (idade < 16) {
    console.log('Não Vota')
 }else if ( idade < 18 || idade > 65){
    console.log('Voto Opcional')
}else{ console.log('Voto Obrigatorio')} 



var agora = new Date()
var hora = agora.getHours()
console.log(`Agora são exatamente ${hora} Horas`)
if (hora >=5 && hora <=12) {
    console.log('Bom Dia!')
}else if (hora >12 && hora <= 18){ console.log('Boa Tarde!')
}else if (hora > 18 && hora < 24) { 
    console.log('Boa Noite!')

}else { console.log('Boa Madrugada!')}

 
    
 //mostrar dia da semana 
 var semana = new Date()
 var diaSem = semana.getDay()
/*
0=domingo
1=segunda
2=terça
3=quarta
4=quinta
5=sexta
6=sabado
*/

//console.log(diaSem)

switch(diaSem) {

        case 0: 
        console.log('DOMINGO')
        break
        case 1:
            console.log('SEGUNDA-FEIRA')
            break
        case 2:
            console.log('TERÇA-FEIRA')
    break
    case 3:
        console.log('QUARTA-FEIRA')
        break
        case 4:
            console.log('QUINTA-FEIRA')
           break
            case 5:
                console.log('SEXTA-FEIRA')
                break
                case 6:
                    console.log('SABADO')
                    break
                    default:
                        console.log('ERROR')
                    break


}