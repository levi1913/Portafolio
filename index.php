<?php include('header.php')?>

<section>
        <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="myID" d=""/></svg>
</section>
  <div class="bienvenida">
        <div class="hello">

              <div class="banner">
                <span>He</span><span class="blanco">llo.</span></div>

                <div class="nombre">
                    <span>I'm Levi Torres, web developer and this is my website.</span>
                </div>
        </div>

      
  </div>

</div>

<div class="container home" id="home">
    <div class="row">
        <div class="col-lg-12">
            <center><img src="img/uaeh.jpg"></center><br>
            <p>Mi nombre es Dan Levi Torres Morales, soy Licenciado en Ciencias Computacionales
                egresado de la Universidad Autónoma del Estado de Hidalgo. 
            </p>
            <p>
                Durante mi vida académica y laboral me he enfocado y desempeñado, principalmente en el desarrollo web, especialmente
                en el Front-end, aunque también he trabajo en desarrollo back end , gracias a esto, he aprendido diversos lenguajes, tanto de programación como de marcado.
            </p>
            <p>
                Me concidero a mi mismo como una persona trabajadora, que le gusta mucho aprender y le apasiona su trabajo.
                Soy bueno adaptandome a grupos de trabajo o desarrollando como freelance. 
            </p>
        </div>
    </div>
</div>

<div class="proyectos" id="proyectos">

<br><h2>Proyectos realizados</h2><br>

<div class="carrusel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="img/imagen1.png"  alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <a href="http://revalidacion.uaeh.edu.mx/SistemaRevalidacionUAEHOficial/login.php"><h5>Sistema de revalidación</h5>
                    <p>Sistema realizado para la Universidad Autónoma del Estado de Hidalgo</p></a>
                </div>
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="img/imagen2.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block corona">
                    <a href="https://levi1913.github.io/Covid-19/"><h5>CoronaNews</h5>
                    <p>Aplicación que muestra todas las estadísticas del COVID-19</p></a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><br>

    <center>
        <h3>¿Sobre que proyecto te interesa conocer?</h3>
              
            <select id="proyecto" onchange="selecionar();">
                <option value="vacio">Seleccione una opción...</option>
                <option value="revalidacion">Sistema de revalidación</option>
                <option value="Covid">CoronaNEWS</option>
            </select>
            
            <div class="div_revalidacion" style="display: none">
                <select id="revalidacion" onchange="opciones1();">
                    <option value="vacio">Seleccione una opción...</option>
                    <option value="todo">Todo :)</option>
                    <option value="conte">Contexto</option>
                    <option value="herra">Herramientas usadas</option>
                    <option value="link">Link</option>
                </select>
            </div>

            <div class="div_covid" style="display: none">
                <select id="covid" onchange="opciones2();">
                    <option value="vacio">Seleccione una opción...</option>
                    <option value="todo">Todo :)</option>
                    <option value="conte">Contexto</option>
                    <option value="herra">Herramientas usadas</option>
                    <option value="link">Link</option>
                </select>
            </div>
             
            <br>
              <div id="infocaja" class="infocaja"></div>
    </center>

    
</div>

<div class="atributos" id="aptitudes">
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <p>A lo largo de mi carrera como estudiante y como profesional, he aprendido una serie de características que pueden
                 resultar útiles para la realización de todo tipo de proyectos de desarrollo web. </p>
                <p>Soy licenciado en Ciencias Computacionales egresado de la Universidad Autónoma del Estado de Hidalgo.</p>
                <br>
            </div>
            <div class="col-lg-6 col-sm-12 listas">
                <h3>Lenguajes</h3>
                  <ul>
                     <li><img src="img/html.png" class="icon">HTML 5</li>
                     <li><img src="img/css.png" class="icon">CSS 3</li>
                     <li><img src="img/javascript.png" class="icon">JAVASCRIPT</li>
                     <li><img src="img/c++.png" class="icon">C++</li>
                     <li><img src="img/java.png" class="icon">JAVA</li>
                     <li><img src="img/cs.png" class="icon">C#</li>
                     <li><img src="img/sql.png" class="icon">SQL</li>
                  </ul>
            </div>
            <div class="col-lg-6 col-sm-12 listas">
                <h3>Frameworks</h3>
                  <ul>
                    <li><img src="img/boot.png" class="icon">Bootstrap 4</li>
                    <li><img src="img/react.png" class="icon-mas">React.js</li>
                    <li><img src="img/angular.png" class="icon">Angular</li>
                    <li><img src="img/node.png" class="icon-mas">NodeJs</li>
                  </ul>
            </div>
            <div class="col-lg-12 col-sm-12 listas">
                 <h3>Herramientas</h3>
                  <ul>
                    <li><img src="img/sass.png" class="icon">SASS</li>
                    <LI><img src="img/git.png" class="icon">GIT</LI>
                    <LI><img src="img/github.png" class="icon">GITHUB (repositorios)</LI>
                    <LI><img src="img/npm.png" class="icon">npm</LI>
                  </ul>
            </div>
           

        </div>
    </div>
</div>

<div class="contacto" id="contacto">
<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="email">
                <form action="enviar.php" method="POST" onsubmit="return lleno();">
                  <h2>¡Contáctame!</h2>
                  <input type="text" placeholder="Tu nombre..." name="nombre" id="nombre"><br>
                  <input type="text" placeholder="Tu Asunto..." name="asunto" id="asunto"><br>
                  <input type="email" placeholder="Tu email..." name="email" id="email"><br>
                  <input type="number" placeholder="Tu teléfono..." name="telefono" id="telefono"><br><br>
                  <textarea name="mensaje" placeholder="Escriba aquí su mensaje..." name="mensaje" id="mensaje"></textarea>
                  <input type="submit" value="Enviar" class="boton">
                </form>
                </div>
            </div>
            
            <div class="col-lg-6 col-sm-12">
                <div class="redes">
                    <ul>
                        <li><img src="img/gmail.png" class="img_conta"><a href="mailto:rmcsdanonino22@gmail.com?Subject=Contacto%20páginaweb">rmcsdanonino22@gmail.com</a></li>
                        <li><img src="img/linkedin.png" class="img_conta"><a href="https://www.linkedin.com/in/levi-torres-2b4587188/">linkedin.com/in/levi-torres-2b4587188</a></li>
                        <li><img src="img/gitblanco.png" class="img_conta"><a href="https://github.com/levi1913">https://github.com/levi1913</a></li>
                        <li><img src="img/whatss.png" class="img_conta"><a href=" https://wa.me/527713967763">771 396 7763</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



   

<?php include('footer.php')?>

