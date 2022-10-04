<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Views/src/sass/main.css">
    <title>Modificar</title>
</head>
<body class="cuerpo">
<div class="content-form">
   
    <h1> <i class="fas fa-exchange-alt"> </i> Modificar</h1>
    <h2>Registro existente</h2>
    
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=books&a=actualizar" autocomplete="off">
            <div class="content2">

            <div class="izq">
            <input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>">
        
            <h4> Titular:</h4>   
            <input type="text" id="titular" name="titular" value="<?php echo $data["books"]["titular"] ?>"> 
            <h4> Autor:</h4> 
            <input type="text" id="autor" name="autor" value="<?php echo $data["books"]["autor"] ?>"> 
            <h4> Editorial:</h4> 
            <input type="text" id="publisher" name="publisher" value="<?php echo $data["books"]["publisher"] ?>"> 
            <h4> Edición:</h4> 
            <input type="text" id="edicion" name="edicion" value="<?php echo $data["books"]["edicion"] ?>"> 
            <h4> Presentación:</h4> 
            <input type="text" id="tipo_present" name="tipo_present" value="<?php echo $data["books"]["tipo_present"] ?>"> 
            </div>
            
            <div class="der">
            <h4> Idioma:</h4> 
            <input type="text" id="idioma" name="idioma" value="<?php echo $data["books"]["idioma"] ?>"> <br><br>
            <h4> Dimenciones:</h4> 
            <input type="text" id="dimensiones" name="dimensiones" value="<?php echo $data["books"]["dimensiones"] ?>"> 
            <h4> N° de Pags.:</h4> 
            <input type="text" id="cant_pags" name="cant_pags" value="<?php echo $data["books"]["cant_pags"] ?>"> 
            <h4> Precio:</h4> 
            <input type="number" transaction currency="dollar" id="precio" name="precio" value="<?php echo $data["books"]["precio"] ?>"> 
            
            </div>
            </div>
            <button id="guardar" name="guardar" type="submit">Modificar</button>
        </form>
        
</div>   
</body>
</html>