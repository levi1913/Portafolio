function selecionar(){
    let op = document.getElementById("proyecto").value;
    let re = document.querySelector(".div_revalidacion");
    let co = document.querySelector(".div_covid");

    if(op == "revalidacion"){
        re.style.display = 'block';
        document.getElementById("infocaja").innerHTML="<p></p>";
        
    }else{
        re.style.display = 'none';
        document.getElementById("infocaja").innerHTML="<p></p>";
    } 

    if(op == "Covid"){
        co.style.display = 'block';
        document.getElementById("infocaja").innerHTML="<p></p>";
        
    }else{
        co.style.display = 'none';
        document.getElementById("infocaja").innerHTML="<p></p>";
    } 

  
}



function opciones1(){
    var revalidacion = document.getElementById("revalidacion").value;
    let op = document.getElementById("proyecto").value;

    if(revalidacion == "todo"){
        document.getElementById("infocaja").innerHTML="<p>De los primeros proyectos de mi carrera laboral, fue realizar un sistema para"+
        " el control de revalidación de estudios en la UAEH. este proyecto se encuentra actualmente"+
        " bajo un dominio oficial de la institución y es usado semestre a semestre para que nuevos alumnos ingresen a la institución. </p>"+
        "<p class='he'>Las herramientas empleadas en este sistema fueron varias entre las cuales destacan:</p>"+
        "<ul><li>HTML5</li><li>CSS5</li><li>Javascript</li><li>PHP</li></ul>"+
        "<center><a href='http://revalidacion.uaeh.edu.mx/SistemaRevalidacionUAEHOficial/login.php'>Link</a></center>";
        

    }else if(revalidacion == "conte"){
        document.getElementById("infocaja").innerHTML="<p>De los primeros proyectos de mi carrera laboral, fue realizar un sistema para"+
        " el control de revalidación de estudios en la UAEH. este proyecto se encuentra actualmente"+
        " bajo un dominio oficial de la institución y es usado semestre a semestre para que nuevos alumnos ingresen a la institución. </p>";
    
    }else if(revalidacion == "herra"){
        document.getElementById("infocaja").innerHTML="<p class='he'>Las herramientas empleadas en este sistema fueron varias entre las cuales destacan:</p>"+
                                                      "<ul><li>HTML5</li><li>CSS5</li><li>Javascript</li><li>PHP</li></ul>";                                                 
    }else if(revalidacion == "link"){
        document.getElementById("infocaja").innerHTML="<center><a href='http://revalidacion.uaeh.edu.mx/SistemaRevalidacionUAEHOficial/login.php'>Link</a></center>";
    }else if(revalidacion == "vacio" ||  op !== "revalidacion"){
        document.getElementById("infocaja").innerHTML="<p></p>";
    }
    
}


function opciones2(){
    var revalidacion = document.getElementById("covid").value;
    

  
        if(revalidacion == "todo"){
            document.getElementById("infocaja").innerHTML="<p>Durante la pandemia del año 2020, lamentablemente hubo una gran cantidad de infectados y muertos"+
            " Para mantener a la población informada, fue iniciativa mia crear una aplicación para contabilizar todos los numeros de la pandemia"+
            "<p class='he' align='center'>Las herramientas empleadas en este sistema fueron varias entre las cuales destacan:</p>"+
            "<ul><li>HTML5</li><li>CSS5</li><li>SCSS</li><li>Javascript</li><li>API Rest</li></ul>";
            "<center><a href='https://levi1913.github.io/Covid-19/'>Link</a></center>";
            
    
        }else if(revalidacion == "conte"){
            document.getElementById("infocaja").innerHTML="<p>Durante la pandemia del año 2020, lamentablemente hubo una gran cantidad de infectados y muertos"+
            " Para mantener a la población informada, fue iniciativa mia crear una aplicación para contabilizar todos los numeros de la pandemia";
        
        }else if(revalidacion == "herra"){
            document.getElementById("infocaja").innerHTML="<p class='he' align='center'>Las herramientas empleadas en este sistema fueron varias entre las cuales destacan:</p>"+
                                                          "<ul><li>HTML5</li><li>CSS5</li><li>SCSS</li><li>Javascript</li><li>API Rest</li></ul>";                                                 
        }else if(revalidacion == "link"){
            document.getElementById("infocaja").innerHTML="<center><a href='https://levi1913.github.io/Covid-19/'>Link</a></center>";
        }else if(revalidacion == "vacio"){
            document.getElementById("infocaja").innerHTML="<p></p>";
        }
    
    
}

function lleno(){
    var nombre = document.getElementById("nombre").value;
    var asunto = document.getElementById("asunto").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;
    var mensaje = document.getElementById("mensaje").value;

    if(nombre===""){
        document.getElementById("nombre").style.borderBottomColor ="red";
        document.getElementById("nombre").style.borderRightColor ="red";
        alert("Debe indicar su nombre");
        return false;
    }else{
        document.getElementById("nombre").style.borderBottomColor ="gray";
        document.getElementById("nombre").style.borderRightColor ="gray";
    } 

    if(asunto===""){
        document.getElementById("asunto").style.borderBottomColor ="red";
        document.getElementById("asunto").style.borderRightColor ="red";
        alert("Debe indicar un asunto");
        return false;
    }else{
        document.getElementById("asunto").style.borderBottomColor ="gray";
        document.getElementById("asunto").style.borderRightColor ="gray";
    }
    
    if(email===""){
        document.getElementById("email").style.borderBottomColor ="red";
        document.getElementById("email").style.borderRightColor ="red";
        alert("Debe indicar su email");
        return false;
    }else{
        document.getElementById("email").style.borderBottomColor ="gray";
        document.getElementById("email").style.borderRightColor ="gray";
    }
    
    if(telefono===""){
        document.getElementById("telefono").style.borderBottomColor ="red";
        document.getElementById("telefono").style.borderRightColor ="red";
        alert("Debe indicar su telefono");
        return false;
    }else{
        document.getElementById("telefono").style.borderBottomColor ="gray";
        document.getElementById("telefono").style.borderRightColor ="gray";
    }
    
    if(mensaje===""){
        document.getElementById("mensaje").style.borderBottomColor ="red";
        document.getElementById("mensaje").style.borderRightColor ="red";
        alert("Debe indicar su mensaje");
        return false;
    }else{
        document.getElementById("mensaje").style.borderBottomColor ="gray";
        document.getElementById("mensaje").style.borderRightColor ="gray";
    }
}