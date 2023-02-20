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
        echo "<br>";
        echo "Your age is $age";
    ?>
    <form action="site.php" method="get">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <input type="submit">
    </form>
    Answer: <?php if(isset($_GET['submit'])){

     echo $_GET["num1"] + $_GET["num2"];

}?>
    <form action="site.php" method="get">
        Color: <input type="text" name="color">
        Plural Noun: <input type="text" name="pluralNoun">
        Celebrity: <input type="text" name="celebrity">
        <input type="submit">
    </form>
    <br>
    <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];
        echo "Roses are {$color} <br>";
        echo "{$pluralNoun} are blue <br>";
        echo "I love {$celebrity} <br>";
    ?>
    <form action="site.php" method="post">
        Password: <input type="password" name="password"><br>
        <input type="submit">
    </form>
    <?php 
        echo $_POST["password"];

        //Arrays ----------------------------------------------->
        echo "<br>";
        echo "Arrays----------------------------------------------->";
        echo "<br>";
        $cars = array("Porsche","Ferrari","Bugatti","Lamborghini");
        print_r($cars);
        echo "<br>";
        echo $cars[1];
    ?>
    <?php //fruits[] signifys that an array will be inputted------------>
    echo "<br>";
    ?>
    <form action="site.php" method="POST">
        Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges:<input type="checkbox" name="fruits[]" value="Oranges"><br>
        Pears:<input type="checkbox" name="fruits[]" value="Pears"><br>
        <input type="submit">
    </form>
    <?php 
    $fruits = $_POST["fruits"];
    $fruits = implode(",", $fruits);
    echo "Check the boxes you want to add to the array [$fruits]";
    ?>
    <?php //Associative arrays ---------------------->
        echo "<br>";
        echo "Associative Arrays------------------------------------->";
        $carModels = array("Ferrari"=>"F8 TRIBUTO","Porsche"=>"911 GT3","Bugatti"=>"Veyron","Lamborghini"=>"Diablo");
        echo "<br>";
        print_r($carModels);
    ?>
    <?php // functions ---------------------------------------------------->
        echo "<br>";
        echo "Functions------------------------------------------->";
        echo "<br>";
        function sayHi($message){
            echo "Hello user!!";
            echo "<br>";
            echo "$message";
        }
        sayHi("This is coming from a function!!");
        echo "<br>";
    ?>
    <?php 
        function cube($num){
            return $num * $num * $num;
        }
        echo "This is the result of a cube function with a arguement of 4. <br> 4*4*4 = ";
        echo $cubeResult = cube(4);
    ?>
    <?php // If Statements ---------------------------------------------------->
        echo "<br>";
        echo "If Statements------------------------------------------->";
        echo "<br>";
        $isMale = true;
        $isTall = true;
        if($isMale && $isTall){
            echo "This is comming from a if statement-------->";
            echo "<br>";
            echo "You are a tall male";
        } elseif($isMale && !$isTall){
            echo "You are male but not tall";
        } else {
            echo "You are not a male";
        }
    ?>
    <?php // While Loop ---------------------------------------------------->
        echo "<br>";
        echo "While Loop------------------------------------------->";
        echo "<br>";
        $index = 1;
        while($index <= 5){
            echo "$index <br>";
            $index++;
        }
    ?>

    
</body>
</html>


