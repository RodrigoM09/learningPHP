<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="site.php" method="get">
        Name:<input type="text" name="name">
        <br>
        Age:<input type="number" name="age">
        <input type="submit">
    </form>
    <br>
    <?php
        //Variables ------------------------------------------->
        $characterName = "John Jingle";
        $characterAge = 35;
        //Working with strings ------------------------------------------->
        echo "The characters name is $characterName, his age is $characterAge \n";
        echo "<br> strtolower: ";
        echo strtolower($characterName);
        echo "<br> strtoupper: ";
        echo strtoupper($characterName);
        echo "<br> string array char selection: ";
        echo $characterName[0];
        echo "<br> Replace sequence of characters: ";
        echo str_replace("John", "Rodrigo", $characterName);
        echo "<br> Replace sequence of characters: ";
        echo substr($characterName, 5);
        echo "<br>";
        //Working with numbers ------------------------------------------->
        echo 5 + 9;
        echo "<br>";
        $num = 10.4;
        $num++;
        echo $num;
        echo "<br> round number to nearest whole number: ";
        echo round($num);
        echo "<br> floor round number down to nearest whole number: ";
        echo floor($num);
        echo "<br> ceil round number up to nearest whole number: ";
        echo ceil($num);
        echo "<br>";
        //Working with inputs ------------------------------------------->
        echo "use info typed into input: <br>";
        $name = $_GET["name"];
        $age = $_GET["age"];
        echo "Your name is $name";
        echo "Your age is $age";
        
    
    ?>
</body>
</html>


