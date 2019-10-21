function capturar() {
    //console.log('capturar');
    function persona(nombre) {
        this.nombre=nombre;
    }
    var nombrecapturar = document.getElementById('nombre').value;
    //console.log(nombrecapturar);
    //console.log(edadcapturar);
    nuevosujeto = new persona(nombrecapturar);
    console.log(nuevosujeto);
    agregar();

}
var basededatos = [];
function agregar() {
    //console.log('hola');
    basededatos.push(nuevosujeto);
    //muestro que se cargan los datos ala base de datos;
    console.log(basededatos);
    //cargo los valores dinamicamente ala tabla
    document.getElementById('tabla').innerHTML +="<tbody><td>"+nuevosujeto.nombre+"</td></tbody>";
   
}
function mostar_guardados() {
    var texto ="Es una clase en java Script que se utiliza para manipular cadenas de caracteres Todo texto encerrado entre comillas se interpreta como una cadena puede concatenar o dividir cadenas permite realizar operaciones con cadenas extraer parte de un texto"; 
    var Carateristicas_String = ['se crea con New String ', ' (cadena) ' ,' .length ',' toUpperCase() ','  substr ',' substring ', ' setCharAt() '];
    document.getElementById('hola').innerHTML +="<tbody><td>"+Carateristicas_String.toString();+"</td></tbody>";
   
}