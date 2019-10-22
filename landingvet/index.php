<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos.css"> 
    <link href="https://fonts.googleapis.com/css?family=Heebo|Libre+Franklin&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/10780d7f46.js" crossorigin="anonymous"></script>
</head>
<body >
    <header>
       <nav id="nav" class="nav1" >
           <div class="contenedor-nav">
               <div id="lis" class="logo" >
                   <li class="fab fa-github-square"> </li>
               </div>
               <div class="enlaces" id="enlaces">
                    <a href="#" id="enlaces-inicio" class="btn-header">Inicio</a>
                    <a href="#" id="enlaces-equipo" class="btn-header">Equipo</a>
                    <a href="#" id="enlaces-servico" class="btn-header">servicos</a>
                    <a href="#" id="enlaces-trabajo" class="btn-header">Trabajos</a>
                    <a href="#" id="enlaces-contacto" class="btn-header">Contacto</a>
               </div>
               <div class="icono" id="open">
                    <span>&#9776;</span>
               </div>
           </div>
       </nav>
       <div class="textos">
            <h1>Veterinaria Korky y Stich</h1>
       </div>
   </header>
<main>
<section>
    <div class="contenedor">
        <div class="conten-form1">
            <div class="form1">
                <form  method="POST" name="form" onsubmit="return marcado();">
                    <h2>contactanos</h2>
                        <div class="form-group">
                            <label class="text">Nombre:</label>
                            <input class="cuadro" type="text" name="t1" placeholder="Nombre" >
                        </div>
                        <div class="form-group">
                            <label class="text">Email:</label>
                            <input class="cuadro" type="email" name="t2" placeholder="Email ">
                        </div>
                        <div class="form-group">
                            <label class="text">Edad:</label >
                            <select class="cuadro" name="t3" id="selectorEdad"></select> 
                        </div>
                        <div class="form-group">
                            <label class="text">Sexo:</label> 
                                <select class="cuadro" name="t4"  >
                                        <option value="mujer">Mujer</option>
                                        <option value="hombre">Hombre</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" value="1" name="termin" id="termin" >
                            <label class="text"> He leido y acepto las </label>
                        </div>
                        <div class="form-group1">
                            <input class="enviar" type="submit" name="bt1" values="enviar" onclick="marcado();">
                        </div>
                </form>
            </div>
        </div>
        <div class="conten-form1">
            <div class="titulo1">
                <h2>Veterinaria Korky y Stich</h2>
            </div>
            <div class="cont-items">
                <img class="foto" src="foto.jpg" alt="">  
            </div>
        </div>
    </div>
        
</section>
<section>
    <div class="text-mayor">
        <div class="textos-m">
            <p>
            Los veterinarios diagnostican y tratan los animales enfermos y heridos. También previenen la enfermedad y la mala salud, por ejemplo, mediante vacunaciones y prestando asesoramiento a los propietarios. Algunos veterinarios se especializan, por ejemplo, en animales domésticos, ganado, caballos y animales de zoológico.
            </p> 
        </div> 
    </div> 
    <div>

    </div>        
</section>  
</main> 

<?php
$servidor="localhost";
$usuario="root";
$contra="";
$db="veterinaria1";
$conexion=mysqli_connect($servidor, $usuario, $contra, $db);
if ($conexion) {
    $nombre=$_POST['t1'];
    $email=$_POST['t2'];
    $edad=$_POST['t3'];
    $sexo=$_POST['t4'];
    if (isset($_POST['bt1'])) {
        $a="INSERT INTO DATOS (nombre, email, edad, sexo) VALUES('".$nombre."','".$email."','".$edad."','".$sexo."')";
        $ba=mysqli_query($conexion,$a);
    }
}
?>
<script src="scrip1.js"></script>
<script src="jquery.js"></script>
<script src="filtro.js"></script>

<script language="javascript">
function marcado(){
if (document.form.termin.checked) {
document.form.submit(); 
     }
	 else{
	 alert("Debes aceptar los términos y condiciones");
	  document.form.termin.focus();
       return false; 
	 }

}
</script>


<script>
 
    //selecciona el objeto por el id
    let selectorEdad  = document.getElementById("selectorEdad");
    //selecciona los objetos segun el nombre 
    let selectores = document.getElementsByTagName("select");
    //imprime en la consola 
    console.log(selectores);
//define un bucle for para dar opciones 
    for (let index = 1; index <= 115; index++) {
        //el let es igual a un dim 
        let opt = document.createElement("option"); // crear un option
        opt.value = index;
        //con el simbolo mas se separan y anidan caracteres
        opt.innerHTML =  index + "años";
        selectorEdad.appendChild(opt);
        
    }
</script>
<footer>
        <div class="hola" style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M530.19,-6.41 C149.99,150.00 572.51,-26.14 436.51,94.23 L512.69,158.38 L0.00,150.00 Z" >
                </path>
            </svg>
        </div>
        <div class="hola1">
            <div class="parrafos">
            <label for="">La pasion e inovacion es lo que nos distingue del resto</label>
                <br>
            <label class="footer">Posted by: Oliver Perez</label>
            <br>
            <label class="footer">Contact information: 
                <a href="mailto:someone@example.com"> operez@bitscomputacion.com</a>   
            </p>
            </div>
        </div>
</footer>
</body>


</html>