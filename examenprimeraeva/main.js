//Zona de Arrays

sexo = Array();
edad = Array();
hora = Array();
sexh = Array();
var suma1 = 0;
var edadmax = 0;
var suma2 = 0;


//Zona de funciones
function numHombres(sex1,sexh) {

    for (let i = 0; i < sex1.length; i++) {
            if(sex1[i] == "H"){
               sexh.push(sex1[i])      

            }
        
    }
    console.log(`Hay ${sexh.length} chico/s`)
    
}



function edadmaxima(edadh,em) {


    for(let i = 0; i < edadh.length; i++) {
        for (let j = 0; j < edadh.length; j++) {     
                if (edadh[i] > em){
                    em = edadh[i]
                }
            }
    }
console.log("La edad mas alta es " + em)
}


function mediaHora(horah,sumatotal) {

    for (let i = 0; i < horah.length; i++) {
        sumatotal = sumatotal + horah[i]
    
        
    }
    
sumatotal = sumatotal/hora.length
console.log("La media de todos los participantes es "+sumatotal);
}

//Zona de whiles

while (true) {
    var p1 = prompt("Introduce tu sexo, por favor solo usa H o M");
        if ((p1 === "H")||(p1==="M")) {
            alert("Gracias");
            sexo.push(p1)
            console.log(sexo)
          
        } else{
            if (p1=="SALIR") {
                alert("Saliste");
                 numHombres(sexo,sexh)
                 edadmaxima(edad,edadmax)  
                 mediaHora(hora,suma2)   
                
                break;
                
            }
            alert("Menudo hardtroll");
            location.reload()
        }
        
        
        
       
    var p2 = parseInt(prompt("Me dices tu edad?"))
        if (p2 >=18) {
            alert("Gracias")
            edad.push(p2);
            console.log(edad)

        }else{
            if (p2=="SALIR") {
                alert("Saliste");
                numHombres(sexo,sexh)
                edadmaxima(edad,edadmax)  
                mediaHora(hora,suma2)   
                break;
            } 
           alert("Eres menor de edad AHHHHHHHHHHHHHHHHHHHHHHHHHHHH carcel");
            location.reload()

       
            
        }
    var p3 = parseInt(prompt("Dime el numero de horas."))
          if (p3>0) {
             alert("Pues eso es culpa del ordenador")
             hora.push(p3)    
             console.log(hora)          

        
    }
    else{
        if (p3=="SALIR") {
            alert("Saliste");
            numHombres(sexo,sexh)
            edadmaxima(edad,edadmax)  
            mediaHora(hora,suma2)   
            break;
            
        }
        alert("No has jugado horas");
      
        location.reload()
    }
        
    
}