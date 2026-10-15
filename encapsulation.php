<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encapsulation</title>
</head>
<body>
    <h3>Encapsulation</h3>
    <li>Encapsulation is a concept where we encapsulate all the data and member functions together to form an object.</li>
    <li><b>Wrapping up data member and method together</b> into a single unit is called Encapsulation.</li>
    <li>Encapsulation also allows a class to change its internal implementation without hurting the overall functioning of the system.</li>
    <li>Public: </li>
    <li>Protected: </li>
    <li>Private: </li>
    <?php
        class First{
            protected $num;
            function __construct(){
                echo "Constructor <br>";
            }
            function setter(){
                $this->num=1;
            }
        }
        class Second extends First{
            
        }
        $obj = new Second();
        $obj->setter();
        echo $obj->num;
    ?>
</body>
</html>