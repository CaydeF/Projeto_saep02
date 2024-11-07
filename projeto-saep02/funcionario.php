<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <img src="C:\Users\SENAI\Pictures\Saved Pictures" alt="">
</head>
<body>
    <h1>Cadastro de funcionários</h1>
    <form action="conexaodb.php">
    <h2>
     <label for="Nome:">INSIRA SEU NOME:</label>   
     <input id="Nome" name="Nome" type="text">
     <br>
     <label for="Cargo:">INSIRA SEU CARGO:</label>
     <input id="Cargo" name="Cargo" type="text">
     <button type="submit">Adicionar</button>
     </h2>
     </form>

     <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
        $Nome = $_POST['Nome'];
        $Cargo = $_POST['Cargo'];

        $sql = "INSERT INTO Funcionario (Nome, Cargo)
                VALUES ('$Nome','$Cargo')";
     }

     ?>
    
</body>
</html>