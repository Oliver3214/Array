<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Zhi+Mang+Xing&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Roboto+Slab|Zhi+Mang+Xing&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Fjalla+One|Roboto+Slab|Zhi+Mang+Xing&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Fjalla+One|Lobster|Roboto+Slab|Zhi+Mang+Xing&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton|Fira+Sans&display=swap" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor nav">
                <div class="logo">
                        <img src="img/img1.jpg" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                        <a href="#">inicio</a>
                        <a href="#">ubicacion</a>
                        <a href="#">contactanos</a>
                        <a href="#">conocenos</a>
                </div>
                <div class="icono">
                        <span>&#6767</span>
                </div>
            </div>
        </nav>
        <div class="titulos">
            <h1>Java Script</h1>
        </div>
    </header>
    <main>
        <section>
            <div class="h2">
                <h2 class="h">Investigacion</h2>
            </div>
            <div class="container">
                <div class="cuadro" >
                    <div class="titulo-m" id="cuadro1">
                        <h2>Que es un Array o Vector?</h2>
                    </div>
                    <div class="img">
                        <h2>Que es un Array o Vector?</h2>
                    </div>
                    
                    <div class="textos">
                        <p>Es un objeto global que es usado en la construccion de arrays, que son objetos tipo lista de alto nivel</p>
                    </div>
                </div>
                <div class="cuadro" >
                    <div class="titulo-m" id="cuadro2">
                        <h2>Que es una Matriz?</h2>
                    </div>
                    <div>
                         <h2>Que es una Matriz?</h2>
                    </div>
                    <div class="textos">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="cuadro" >
                    <div class="titulo-m" id="cuadro3">
                        <h2>Que es un objeto?</h2>
                    </div>
                    <div>
                        <h2>Que es un objeto?</h2>
                    </div>
                    <div class="textos">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="cont-info">
                <div class="grupo">
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="grupo">
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="grupo">
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="cont-form">
                <div class="grup">
                    <h3> Ingreso de datos a un Array</h3>
                    <div class="forma1">
                        <form >
                            <input id="nombre" type="text" placeholder="Ingrese los datos que quiera">
                            <input id="boton" class="btn btn-succes" type="reset" onclick="capturar();" value="Mostrar" >
                            <input id="mostrar" type="reset" onclick="mostar_guardados();" value="Mostrar">
                        </form>
                    </div>
                </div>
                <div class="grup">
                    <table id="tabla" cellspacing="0" cellpadding="0">
                        <tr class="fila" >
                            <td class="columna" >
                                <h4>Datos</h4>
                            </td>
                        </tr>
                    </table >
                </div>
                <div class="grup">
                <table id="hola" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="columna">
                            <h4>Propiedades de un string</h4>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </section>
        <footer></footer>
    </main>
</body>
</html>