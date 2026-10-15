<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstraction</title>
</head>
<body>
    <h3>Abstraction in oops</h3>
    <ul>
        <li>An abstract class is a class that contains at least one abstract(incomplete) method.</li>
        <li>An abstract method is a method that is declared, but not implemented in the abstract class, it is completed in the child class.</li>
        <li>An abstract class or method is defined with the <b>abstract</b> keyword:</li>
        <li><b>Note:</b> we can't create object of an abstract class.</li>
        <li>Child class must contain abstract method/function.</li>
    </ul>    
    <?php
        abstract class Bank{
            abstract function id_proof();
        }
        class Hdfc extends Bank{
            function id_proof(){
                echo "abstract function must be implemented in hdfc class bcz hdfc is a child class <br>";
            }
        }
        class Icici extends Bank{
            function id_proof(){
                echo "abstract function must be implemented in icici class bcz icici is a child class";
            }
        }
        $hdfc = new Hdfc();
        $hdfc->id_proof();
        $icici = new Icici();
        $icici->id_proof();
    ?>
</body>
</html>