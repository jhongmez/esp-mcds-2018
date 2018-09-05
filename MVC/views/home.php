<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC - ESP2018</title>
</head>
<body>
    <h1>CRUD MVC</h1>
    <hr>
    <ul>
        <!-- Llamamos la variabla $data que fue declarada en Load.php -->
        <li><strong>Nombre: </strong><?php echo $data['firstName']?></li>
        <li><strong>Apellido: </strong><?php echo $data['lastName']?></li>
        <li><strong>Correo: </strong><?php echo $data['email']?></li>
        <li><strong>Celular: </strong><?php echo $data['Cellphone']?></li>
    </ul>
</body>
</html>