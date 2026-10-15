<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inheritance</title>
</head>
<body>
    <h3>Inheritance in oops</h3>
    <ul>
        <li>Accessing the properties from one class to another class.</li>
        <li>Use <b>extends</b> keyword to inherit the property of one class to another</li>
        <?php
        /*  class First{
                function __construct(){
                    echo "Constructor 1 <br>";
                }
                function print(){
                    echo "Hello 1";
                }
            }

            class Second extends First{
                
            }
            $obj = new Second(); 
            $obj->print();
            // here we are creating an object of second class and second class doesn't contain any property but still it can access the property of class first because of the extend keyword.
        */
        ?>
        <li>If we have two classes and inside that classes we have different constructors then it depends on the object i.e if we are creating an object of first class then construct of first class will be called or if we are creating an object of second class then constructor of second class will be called.</li>
        <li>Now another case: if we want both constructor to be called then we have to use <b>parent::__construct();</b></li>
        <li>if we have a variable in first class and second class during calling time it depends when we are accessing that variable like if we are accessing before <b>parent::__construct();</b> then out should be the first class variable value if we accessing after <b>parent::__construct();</b> then output should be the second class variable value.</li>
        <?php
            class First{
                function __construct(){
                    $this->num = 1;
                    echo "Constructor 1 <br>";
                }
                function print(){
                    echo "Hello 1 <br>";
                }
            }
            class Second extends First{
                function __construct(){
                    // $this->num = 2;
                    parent::__construct();
                    // $this->num = 2;
                    echo "Constructor 2 <br>";
                }
                function print(){
                    parent::print();
                    echo "Hello 2 <br>";
                }                    
            }
            $obj = new Second();
            $obj->print();
            echo $obj->num;
        ?>
    </ul>

</body>
</html>