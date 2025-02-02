<?php
// Verificar si se ha enviado el formulario
if($_SERVER ['REQUEST_METHOD'] == 'POST'){
    //RECOGER LOS DATOS DEL FORMULARIO
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['email']);
    $cedula = htmlspecialchars($_POST['cedula']);
    $telefono = htmlspecialchars($_POST['telefono']);
} else {
    echo '<h1> Acceso No Permitido. </h1>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="icon" href="./img/icono.png">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
    <style>
        /* *{
            margin: 0;
            padding: 0;
        } */
        html{
            scroll-behavior: smooth;
            margin: 0;
            padding: 0;
        }
        body{
            font-family: "Parkinsans", sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(237, 237, 237);
        }
        h1{font-size: 3.5em;}
        h2{font-size: 2.7em;}
        h3{font-size: 2em;}
        p{font-size: 1.25em;}
        ul{list-style: none;}
        li{font-size: 1.25em;}
        #header {
            /* position: fixed; */
            margin: 0;
            padding: 0;
        }
        .form{
            text-align: center;
            align-items: center;
            height: 70vh;
            margin: 100px 50px;
        }
        .continer{
            margin: 0;
            padding: 0;
        }
        #datos{
            font-size: 30px;
        }
        #header{
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    background-color: rgb(245,245,245);

}
#header .logo{
    margin: 0;
    padding: 25px 30px;
    font-weight: bold;
    color: rgb(22, 106, 40);
    text-shadow: 4px 4px 5px darkgray;
    font-size: 1.65em;
}
#header .container{
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* flex-direction: column; */
    align-items: center;
   
}
#header nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    /* flex-direction: column; */
    text-align: center;
    /* padding-bottom: 25px; */
}
#nav a{
    padding: 5px 12px;
    text-decoration: none;
    font-weight: bold;
    color: black;
   
}
#header .logo:hover{
    color: rgb(69, 136, 24);
    transition: 0.5s;
}
#nav a:hover{
    color: rgb(69, 136, 24);
    transition: 0.5s;
}
.logo{
    text-decoration: none;
}
/* FOOTER */
.pie-pagina{
        width: 100%;
    }
    .pie-pagina .grupo-1{
        max-width: 1100px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3 ,1fr);
        grid-gap: 50px;
        padding: 45px 0px;
    }
    .box{
        
        align-items: center;
        justify-content: center;
    }
    figure{
        margin: 0;
        display: flex;
        justify-content: left;
    }
    #logo-footer{
        /* margin-right: 00px ; */
        height: 300px;
        width: 300px;
        border-radius: 30px;
    }
    footer h2{
        text-shadow: 2px 2px 10px darkgray;
    }
    footer a{
    align-items: center;
    padding: 5px 5px;
    }
    footer img{
        height: 35px;
        width: 35px;
    }
    .pie-pagina2{
        margin-top: 60px;
        background-color: rgba(30,30,30);
        color: darkgray;
    }

    /*  */
    footer{
    margin: 0;
    background-color: rgb(230, 230, 230);
    align-items: center;
    justify-content: center;
    
}
figure{
    margin: 0;
    display: flex;
    justify-content: center;
}
#logo-footer{
    margin-top: 30px;
    height: 300px;
    width: 300px;
    border-radius: 50px;
}
.box h2{
    text-shadow: 5px 5px 2px darkgray;
}
footer h2{
    text-align: center;
    /* text-shadow: 4px 4px 2px rgb(162, 16, 16); */
}
footer p{
    padding: 2px 30px;
}
.redes{
    justify-content: center;
    display: flex;
}
footer a{
    padding:0px 10px ;
}
footer img{
    justify-content: center;
    height: 40px;
    width: 40px;
}
.pie-pagina2 p{
    text-align: center;
    margin: 0;
    padding: 30px;
    margin-top: 60px;
    background-color: rgba(30,30,30);
    color: darkgray;
}
.social-icon{
 filter: grayscale(100%); 
transition: filter 0.3s ease;
}
 .social-icon:hover {
     filter: none; 
}
.social-icon img{
    width: 45px; 
    height: 45px;
    transition: transform 0.4s ease;
    } 
.social-icon:hover img { 
    transform: scale(1.2); 
}
    </style>
</head>
<body>
 <header id="header">
        <div class="container">
            <a href="index.html" class="logo">Clinica Esmeralda</a>
            <nav id="nav">
                <a href="./index.html">Inicio</a>
                <a href="#somos-proya">Quienes Somos</a>
                <a href="#nuestros-programas">Nuestros Servicios</a>
                <a href="#caracteristicas">Características</a>
            </nav>
        </div>
    </header>
    <section>
        <div class="form">
            <h2 style="text-align: center;">Datos Recibidos: </h2>
            <?php
            // echo "<h1 id='datos'> Datos Recibidos: </h1>";
            echo "<p><strong> Nombre: </strong> $nombre </p>";
            echo "<p><strong> Email: </strong> $correo </p>";
            echo "<p><strong> Cedula: </strong> $cedula </p>";
            echo "<p><strong> Telefono: </strong> $telefono </p>";
            ?>
        </div>
    </section>

    <footer class="pie-pagina">
        <div class="grupo-1">
            <figure>
                <img id="logo-footer" src="img/footer2.jpg" alt="">
            </figure>
            <div class="box">
                <h2>Sobre Nosotros</h2>
                <p>En Clinica La Esmeralda, ofrecemos atención médica de excelencia con un enfoque en el paciente.</p>
                <p>Confía en nuestro equipo para un cuidado médico de calidad y compasión.</p>
            </div>
            <div class="box">    
                <h2>Siguenos</h2>
                <P>Nuestras redes sociales</P>
                <div class="redes">
                    <a class= "social-icon" href="https://facebook.com/"><img src="img/facebook -1.png" alt=""></a>
                    <a class="social-icon" href="https:instagram.com"><img src="img/instagram-1.png" alt=""></a>
                    <a class="social-icon" href="https:whatsapp.com"><img src="img/whatsapp-1.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="pie-pagina2">
            <small><p>&copy; Copyright 2024---- Todos los derechos reservados---- Pagina hecha por Yofrank Salas</p></small>
        </div>
    </footer>
</body>
</html>
</body>
</html>
