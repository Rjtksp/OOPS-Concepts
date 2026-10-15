<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oops in JS & PHP</title>
    <script src="index.js"></script>
</head>
<body>
    <h3>OOPS in JS & PHP</h3>
    <h4>Topics</h4>

    <ul>
        <li>How to create class,function in class, variable in class and object of class</li>
        <p>if we have a function or variables inside a class, we can't call that function or variable directly we have to create an object of that class then with the help of that object we can call functions and variables.</p>
        <?php
            /* class Car{
                public $x = 1;
                function doors(){
                    echo "4 Door";
                }
            }
            $door = new Car();
            $door->doors();

            echo "<br>";

            $obj = new Car();
            echo $obj->x; 
            */
        ?>
        <li>constructor and destructor</li>
        <p> whenever we create an object of a class, bydefault construct and destruct will called.</p>
        <?php
        /** Constructor and Destructor */
            /* class Car{
                function __construct(){
                    echo "start";
                }

                function __destruct(){
                    echo "end";
                }
            }
            $obj = new Car();
            */
        ?>
        <p>if we have more function b/w constrct and destruct then firstly construct will called then new function will call and at  last destruct will be called.</p>
        <p>functions order doesn't matter, we can put constructor fun before or after any function bydefault 
        construct will call first then other func and at last destruct will call.</p>
        <?php
            /*class Car{
                function __construct(){
                    echo "start <br>";
                }
                function greet(){
                    echo "Hello <br>";
                }
                function __destruct(){
                    echo "end <br>";
                }
            }
            $obj = new Car();
            $obj->greet();
            */
        ?>
        <p>if we want to create a variable in constructor then we have to use the <b>$this</b> keyword and also we want to use that variable inside another function then also we have to use the <b>$this</b> keyword.</p>
        <?php
            /*class Car{
                function __construct(){
                    $this->x = 10;
                }
                function print(){
                    echo $this->x;
                }
                function __destruct(){
                    echo "End";
                }
            }
            $obj = new Car();
            $obj->print();
            */
        ?>
    </ul>
</body>
</html>