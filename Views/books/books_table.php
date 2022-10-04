<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./Views/src/sass/main.css">
        <title>Inicio</title>
    </head>
    <body class="cuerpo">
        <div class="content">
        
        <h1>Lista de libros</h1>

        <div class="div-boton">
        <a href="index.php?c=books&a=nuevo">
          Agregar <i class="fa-regular fa-square-plus"> </i> </a>
        </div>
        
        
        <table class="tabla">
            <thead>
                <tr>
                    <th>Titular</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Edicion</th>
                    <th>Presentacion</th>
                    <th>Idioma</th>
                    <th>Dimensiones</th>
                    <th>N° de Pags.</th> 
                    <th> <i class="fa-solid fa-dollar-sign"></i> Precio</th>
                    <th> <i class="fas fa-exchange-alt"> </i>Modificar</th>
                    <th><i class="fas fa-trash-alt"> </i> Eliminar</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach($data["books"] as $data){
                        echo "<tr>";
                            echo "<td>".$data["titular"]."</td>";
                            echo "<td>".$data["autor"]."</td>";
                            echo "<td>".$data["publisher"]."</td>";
                            echo "<td>".$data["edicion"]."</td>";
                            echo "<td>".$data["tipo_present"]."</td>";
                            echo "<td>".$data["idioma"]."</td>";
                            echo "<td>".$data["dimensiones"]."</td>";
                            echo "<td>".$data["cant_pags"]."</td>";
                            echo "<td>".$data["precio"]."</td>";
                            echo "<td> <a href='index.php?c=books&a=modificar&id=".$data["id"]."'>Modificar</a>";
                            echo "<td> <a href='index.php?c=books&a=eliminar&id=".$data["id"]."'>Eliminar</a>";

                        echo "</tr>";

                    }
                ?>

            </tbody>
        </table>
        </div>
    </body>
</html>