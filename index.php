<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $phrase= "Giraffe Academy";
        echo strtolower($phrase);
        echo "<br>";
        echo strtoupper($phrase);
        echo "<br>";
        echo strlen($phrase);
        echo "<br>";
        echo str_replace("Giraffe","Panda",$phrase);
        echo "<br>";
        echo substr($phrase,8,3);
        echo "<br>";

        //numbers
        echo min(2,14,56,25,4,8,1);
    ?>
    <form action="index.php" method="get">
        <div>
            <label>Nombre</label><br>
            <input type="text" name="nombre">
        </div>
        <div>
            <label>Telefono</label><br>
            <input type="number" name="telefono">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>

    </form>
    <h1>Felicitaciones por subir sus datos</h1>
    <ul>
        <li>Nombre: <?php echo $_GET["nombre"];?> </li>
        <li>Telefono: <?php echo $_GET["telefono"];?></li>
        <li>Email: <?php echo $_GET["email"];?></li>

    </ul>
    <form action="index.php" method="get">
        <h3>Basic Calculator</h3>
        <label>Numero 1</label>
        <input type="number" name="num1"><br>
        <label>Numero 2</label>
        <input type="number" name="num2">
        <button type="submit">Calcular</button>
    </form>
    <p>
    <?php 
        echo $_GET["num1"]+$_GET["num2"];
        $myArray = array("Pasta",23,"Orlando");
        echo "<br>";
        echo "<br>";
        echo $myArray[1];
    ?>
    <p>  
        <form method="post" action="index.php">
            Apples:<input type="checkbox" name="fruits[]" value="apple">
            Oranges:<input type="checkbox" name="fruits[]" value="orange">
            Pears:<input type="checkbox" name="fruits[]" value="pear">
            <button type="submit">guardar</button>
        </form>
        <?php 
            echo $_POST["fruits"][1];
            $object = array("Pedro"=>"A+","Pam"=>"C+","Kevin"=>"B-");
            $object["Camila"]="B+";
            var_dump ($object);
              
          
        ?>
        <br>
        <br>
        <form action="index.php" method="post">
            <div>
                <label>Nombre</label><br>
                <input type="text" name="nom">
            </div>
            <div>
                <label>Nota</label><br>
                <input type="text" name="nota">
            </div>
            <button type="submit">guardar</button>
        </form>
        <?php 
        function guardarNotas(){
            static $notas = [];
            $estudiante = array($_POST['nom']=>$_POST['nota']);
            array_push($notas,$estudiante);
            var_dump ($notas);
        }
        guardarNotas();
            
        ?>
        

</body>
</html>