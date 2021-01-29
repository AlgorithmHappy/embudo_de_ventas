<?php
    if(isset($_GET['nombre']) and isset($_GET['correo'])){
        $miarchivo = fopen("archivo.txt", "a+");
        fwrite($miarchivo, $_GET['nombre'] . ": " . $_GET['correo'] . PHP_EOL);
        fclose($miarchivo);
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" media="screen and (min-width: 768px)" href="desktop.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>RECORD MUNDIAL De Lectura REVELADA:</header>

    <div id="primera">
        <h1>"El Revolucionario Sistema de Lectura Que Te Permite <span>Triplicar Tu Velocidad de Lectura Con el 100% de Comprensión en 30 Días o Menos"</span></h1>
    </div>

    <hr>

    <div id="segunda">
        <div>
            <h4><span>Aunque No Te Guste Leer</span> o no Tengas el Hábito de Lectura</h4>
        </div>
        
        <br>

        <div>
            <video src="https://www.w3schools.com/html/mov_bbb.mp4" width="300" controls></video>
        </div>
    </div>

    <div id="tercera">
        <div>
            <h2>Registrate a La Presentación</h2>
        </div>

        <div>
            <form action="index.php" method="get">
                <input type="text" name="nombre" id="in_nombre" value="Gerardo" required>
                
                <input type="email" name="correo" id="in_correo" value="gerardo@gmail.com" required>
                
                <button type="submit">¡REGISTRARME PARA LA PRESENTACIÓN!</button>
            </form>
        </div>

        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur <span>quas nam nostrum</span></p>
        </div>
    </div>

    <div id="cuarto">
        <h3>Lo Que Aprenderás en Este Webinario...</h3>   
    </div>

    <div class="quinto">
        <article>
            <div class="quinto-uno">
                <img src="http://lorempixel.com/200/130/" alt="">
            </div>

            <div class="quinto-dos">
                <h5>SECRETO #1</h5>
            </div>

            <div class="quinto-tres">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto modi incidunt illo odio impedit.</p>
            </div>
        </article>
    </div>

    <div class="quinto">
        <article>
            <div>
                <img src="http://lorempixel.com/200/130/" alt="">
            </div>

            <div class="quinto-dos">
                <h5>SECRETO #2</h5>
            </div>

            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto modi incidunt illo odio impedit.</p>
            </div>
        </article>
    </div>

    <div class="quinto">
        <article>
            <div>
                <img src="http://lorempixel.com/200/130/" alt="">
            </div>

            <div class="quinto-dos">
                <h5>SECRETO #3</h5>
            </div>

            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto modi incidunt illo odio impedit.</p>
            </div>
        </article>
    </div>

    <br>

    <div id="sexto">
        <h3>¿Te Gustaría Ser Un Genio?</h3>
    </div>

    <div id="septimo">
        <h5>El Webinario es Presentado por: Gabriel Blanco (Récord Mundial de Lectura)</h5>
    </div>

    <br>

    <div id="octavo">
        <div>
            <img src="http://lorempixel.com/300/450/" alt="">
            <a href="https://www.instagram.com/?hl=es-la" target="_blank" rel="noopener noreferrer">(Click aquí para segirme en Instagram)</a>
        </div>
    </div>

    <div id="noveno">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus natus vero sequi nesciunt iure nisi debitis ea, excepturi exercitationem aperiam beatae laboriosam voluptatibus atque itaque accusamus voluptate soluta! Eos, ullam!</p>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus natus vero sequi nesciunt iure nisi debitis ea, excepturi exercitationem aperiam beatae laboriosam voluptatibus atque itaque accusamus voluptate soluta! Eos, ullam!</p>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus natus vero sequi nesciunt iure nisi debitis ea, excepturi exercitationem aperiam beatae laboriosam voluptatibus atque itaque accusamus voluptate soluta! Eos, ullam!</p>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus natus vero sequi nesciunt iure nisi debitis ea, excepturi exercitationem aperiam beatae laboriosam voluptatibus atque itaque accusamus voluptate soluta! Eos, ullam!</p>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus natus vero sequi nesciunt iure nisi debitis ea, excepturi exercitationem aperiam beatae laboriosam voluptatibus atque itaque accusamus voluptate soluta! Eos, ullam!</p>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus natus vero sequi nesciunt iure nisi debitis ea, excepturi exercitationem aperiam beatae laboriosam voluptatibus atque itaque accusamus voluptate soluta! Eos, ullam!</p>
        
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus natus vero sequi nesciunt iure nisi debitis ea, excepturi exercitationem aperiam beatae laboriosam voluptatibus atque itaque accusamus voluptate soluta! Eos, ullam!</p>
    </div>

    <br>
    <br>

    <div id="decimo">
        <h3>¿Qué Esperas Para Registrarte?</h3>
    </div>

    <div id="onceavo">
        <h2>¡ES GRATIS!</h2>
    </div>

    <div id="doceavo">
        <div>
            <form action="index.php" method="get">
                    <input type="text" name="nombre" id="in_nombre" value="gerardo" required>
                    
                    <input type="email" name="correo" id="in_correo" value="gerardo@gmail" required>
                    
                    <button type="submit">¡REGISTRARME AHORA!</button>
            </form>
        </div>

        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>

    <br>
    <br>

    <div id="treceavo">
        <p>¡Regístrate Ahora para Nuestra Póxima Presentación y Conviértete en Un Lector Veloz!</p>
    </div>

    <div>
        <img src="" alt="">
    </div>

    <footer>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor sapiente doloremque illum incidunt quas at laborum ipsum sed quidem quo velit nobis fugit amet perspiciatis aut fugiat itaque, ducimus aliquid.</p>
    </footer>

    <script src="https://kit.fontawesome.com/d308e0fde5.js" crossorigin="anonymous"></script>
</body>
</html>