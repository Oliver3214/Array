

  //alert("este es el primer script");
  //alert("este es el segundo script ");

  //var mensaje = "Hola mundo \n Bienvenido a nuestro sitio web";
  //alert(mensaje);
  /*var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre"];
  alert(meses[0]);
  alert(meses[1]);
  alert(meses[2]);
  alert(meses[3]);
  alert(meses[4]);
  alert(meses[5]);
  alert(meses[6]);
  var cliente = false;
  var cliente2 = true;
  var visible = true;
  alert(!visible );




  valor1 = false;
valor2 = false;
resultado = valor1 || valor2;
alert(resultado);


var valores =[ true, 5, false, "hola", "adios", 2];
var resultado = valores [3] > valores[4];
alert(resultado);



var valor3 = valores[0];
var valor4=valores[2];
var resultado = valor3  || valor4;
alert(resultado);
 
resultado = valor3 && valor4;
alert(resultado);



var n1 = valores[1];
var n2 = valores[5];

var suma= n1+n2;
alert(suma);


var resta= n1-n2;
alert(resta);

var multi=n1*n2;
alert(multi);

var divi = n1/n2;
alert(divi);

var mod=n1%n2;
alert(mod);

var mostrarmensaje = true;
if(mostrarmensaje)
{
alert("Hola mundo")
}

var mostrar = false;
if (!mostrar) {
  alert("es la primera vez que se muestra el mensaje ");
} 

var mostrar = false;
var usuariopermitemensaje = true;

if (!mostrar && usuariopermitemensaje) {
  alert("si,,,,,");
}

var numero1 = 5;
var numero2 = 8;

if (numero1<+numero2) {
  alert("numero 1 no es mayor a numero 2");
}
if(numero2>=0) {
  alert("numero2 es positivo");
}
if(numero1 < 0 || numero1 != 0) {
  alert("numero1 es negativo o distinto de cero");
}
if(++numero1 < numero2) {
  alert("Incrementar en 1 unidad el valor de numero1 no lo hace mayor o igual que numero2");
}


var edad=18;
if (edad>=18) {
  alert("eres mayor de edad");
} else {
  alert("eres menor de edad");
}


var nombre = "";
if (nombre=="") {
  alert("aun no nos ha dicho tu nombre ");
} else {
  alert("hemos guardado tu nombre ");
}
*/
/*var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
var numero=prompt("introduce un numero de DNI(sin la letra)");
var letra=prompt("introduce la letra de tu DNI (en mayusculas)");
//sirve para devolver el valor en Mayusculas 
letraa =letra.toLocaleUpperCase();
if (numero < 0 || numero > 999999) {
  alert("EL numero proporcionado no es valido");
} 
else {
  var letracalculada = letras[numero % 23];
  if (letracalculada != letraa) {
    alert("La letra o el numero proporcionados son correctos");
  }
  else{
    alert("EL numero de DNI y su letra son correctos ");
  }
}
alert(letraa);*/
/*var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];

var numero = prompt("Introduce tu número de DNI (sin la letra)");
var letra = prompt("Introduce la letra de tu DNI (en mayúsculas)");
letra = letra.toUpperCase();

if(numero < 0 || numero > 99999999) {
  alert("El número proporcionado no es válido");
}
else {
  var letraCalculada = letras[numero % 23];
  if(letraCalculada != letra) {
    alert("La letra o el número proporcionados no son correctos");
  }
  else {
    alert("El número de DNI y su letra son correctos");
  }
}*/
/*var veces = 0;

if(veces < 4) {
  alert("Mensaje");
  ++veces;
}
var mensaje="hola";
for (var index = 0; index < 5; index++) {
  alert(mensaje);
  
}
var a=prompt("ingrese un numero");
var dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
 for (let index = 0; index < a; index++){
   alert(dias[index]);
 }

 var n1=prompt("ingrese un numero");
 var n2 = 1;
 for (var index = 1; index <= n1; index++) {
   n2 *=index;
   
 }
 alert(n2);
 var dias=["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
   for (i in dias) {
     alert(dias[i]);
   }
   var n1 = "hola";
   var n2 = " mundo";
   var resultado=n1.concat("mundo");
   console.log(resultado);
   console.log(n1.toLocaleLowerCase());


//muestra la palabra en mayuscula
   n2.toLocaleUpperCase();
//muestra la palabra en mayuscula
   n2.toLocaleLowerCase();
//muestra el caracter deseado
   n2.charAt(0);//H de la palabra hola
//calcula la posicion en la que se encuentra el caracter
   n2.indexOf('a');
//calcula la posicion en la que se encuentra el caracter indicado dentro de la cadena de texto
   n2.lastIndexOf('a');
// estrae una porcion de una cadena de texto
   n2.substring(2);// si se un inicio negativo mostrar la cadena completa //y tiene dos funciones final y inicial
//separa las cadenas 
   n2.split("");




//Funciones utiles para array


//cuenta las vocales de una cadena
n1.length;
//une las cadena 
n1.concat([6,7,8]);
//une las variables de un array
n1.join("");  
//elimina y devuelve el valor final de un array
n1.pop();      shift();//hace lo contrario
//anade un elemento al final del array
n1.push();   unshifth();//anade un elemento al principio de el array
//modifica un array cambiandolo a su forma inversa
n1.reverse();
//
var numero =0;
 var numero2 = 0 
 if (isNaN(numero2/numero)) {
   alert("la divicion esta definida para los indicados")
 }else {

  alert("la divicion es igual a =>" + numero/numero2 );
 }
 var n1=10.0000000;
 var n2=0;
 alert(n1/n2);
 n1.toFixed(2);*/
 /*function suma_y_muestra(primerNumero, segundoNumero) {
  var resultado=primerNumero+segundoNumero;
  alert("el resultado es"+resultado);
}

 var resultado;

 var numero1 = 3;
 var numero2 = 5;
 
 suma_y_muestra(numero1,numero2);
 /* En este punto, se llama a la función que suma
     2 números y muestra el resultado 
 
 numero1 = 10;
 numero2 = 7;
 suma_y_muestra(numero1,numero2);
 En este punto, se llama a la función que suma
     2 números y muestra el resultado 
 
 numero1 = 5;
 numero2 = 8;
 suma_y_muestra(numero1,numero2);*/

 
alert('hola');
 

 window.addEventListener('load', function cargar(e) {
   $('#onload').fadeOut();
   $('body').removeClass('hidden');
 });



