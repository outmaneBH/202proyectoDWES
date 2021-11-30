<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OUTMANE BOUHOU:ProyectoDWES</title>
        <link rel="icon" href="../webroot/media/img/fav.ico" type="image/ico" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="webroot/css/main.css">
        <link rel="stylesheet" type="text/css" href="webroot/css/footer.css">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            ul li{
                height: 45px;
            }
            li a{
                text-decoration: none;
                font-weight: bold;
                font-size: 13px;   
            }
            li>div>a{
                text-decoration: none;
                font-weight: bold;
                font-size: 13px;   
            }
            li:hover{
                background-color: aquamarine;

            }
            #ulli{
               margin-top:  30px; 
            }


        </style>
    </head>

    <body>
        <div class="w3-container">
            <div class="w3-bar w3-black">
                <a href="/index.html" class="w3-bar-item w3-button w3-mobile w3-hover-blue" style="width:33%">Home</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile w3-hover-blue" style="width:33%">Desarrollo Web en Entorno Servidor</a>
           
            </div>


            <ul id="ulli" class="w3-ul w3-card-4">

                <li class="w3-display-container"><a style="color: blue;"
                                                    href="doc/EstudioTema1.pdf" target="_blank" >TEMA 1: DESARROLLO WEB EN ENTORNO SERVIDOR</a></li>

                <li class="w3-display-container">
                     <div class="w3-dropdown-click" style="background: none;">
                        <a style="color: blue; cursor: pointer;" onclick="myFunction()">TEMA 2: INSTALACIÓN, CONFIGURACIÓN Y DOCUMENTACIÓN DEL ENTORNO DE
                        DESARROLLO Y DEL ENTORNO DE EXPLOTACIÓN<a> 
                                <div id="Demo" class="w3-dropdown-content w3-bar-block  w3-animate-zoom">
                                    <a href="doc/EstudioTema2US.pdf" target="_blank" class="w3-bar-item w3-button w3-hover-aqua">Estudio Tema 2 US</a>
                                    <a href="doc/EstudioTema2WX.pdf" target="_blank" class="w3-bar-item w3-button w3-hover-aqua">Estudio Tema 2 WX</a>

                                </div>
                                </div>
                    

                <li class="w3-display-container"><a style="color: blue;"
                                                    href="../202DWESproyectoTema3/indexProyectoTema3.php">TEMA 3: CARACTERÍSTICAS DEL LENGUAJE PHP</a></li>

                <li class="w3-display-container"><a style="color: blue;"
                                                    href="../202DWESproyectoTema4/indexProyectoTema4.php">TEMA 4: TÉCNICAS DE ACCESO A DATOS EN PHP</a></li>

                <li class="w3-display-container">

                    <div class="w3-dropdown-click" style="background: none;">
                        <a style="color: blue; cursor: pointer;" onclick="myFunction2()">TEMA 5: DESARROLLO DE APLICACIONES WEB UTILIZANDO CÓDIGO EMBEBIDO<a> 
                                <div id="Demo2" class="w3-dropdown-content w3-bar-block  w3-animate-zoom">
                                    <a href="../202DWESproyectoTema5/indexProyectoTema5.php" class="w3-bar-item w3-button w3-hover-aqua">Proyecto Tema 5</a>
                                    <a href="../202DWESproyectoLoginLogout/indexProyectoLoginLogout.php" class="w3-bar-item w3-button w3-hover-aqua">Proyecto LogIn LogOut</a>

                                </div>
                                </div>

                                <!-- <a style="color: blue;" href="../202DWESproyectoTema5/indexProyectoTema5.php">TEMA 5: DESARROLLO DE APLICACIONES WEB UTILIZANDO CÓDIGO EMBEBIDO<a>-->
                                </li>

                                <li class="w3-display-container">TEMA 6: PROGRAMACIÓN ORIENTADA A OBJETOS EN PHP</li>

                                <li class="w3-display-container">TEMA 7: PROGRAMACIÓN DE SERVICIOS WEB</li>

                                <li class="w3-display-container">TEMA 8: DESARROLLO DE APLICACIONES WEB HÍBRIDAS</li>


                                </ul>
                                </div>
                                <div style="margin-bottom: 9%; ">

                                </div>
                                <footer>
                                    <p>Copyrights © 2021 OUTMANE BOUHOU. All rights reserved.</p>
                                    <a href="https://github.com/outmaneBH/202proyectoDWES" target="_blank" ><img id="git" src="../webroot/media/img/git.png" alt="Github"/></a>
                                </footer>
                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("Demo");
                                        if (x.className.indexOf("w3-show") == -1) {
                                            x.className += " w3-show";
                                        } else {
                                            x.className = x.className.replace(" w3-show", "");
                                        }
                                    }
                                    function myFunction2() {
                                        var x = document.getElementById("Demo2");
                                        if (x.className.indexOf("w3-show") == -1) {
                                            x.className += " w3-show";
                                        } else {
                                            x.className = x.className.replace(" w3-show", "");
                                        }
                                    }
                                </script>
                                </body>

                                </html>