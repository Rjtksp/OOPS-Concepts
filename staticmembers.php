<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Static Members</title>
</head>
<body>
    <h3>Static Members in oops</h3>
    <ul>
        <li>Whenever we create a variable with <b>static</b> keyword then we can't create object of that variable. if we are not creating an object that means that function doesn't have a constructor</li>
        <li>So if we want to print the value of a variable then we have to use class_name::var_name like this: <b>First::$num</b></li>
        <li>if we want to use a variable in static function then we have to use <b>self </b>keyword like this <b>self::$num;</b></li>
        <li><b>NOTE: </b>If we don't want to create an object of a class then we have to add static keyword before class_name.</li>
        <?php
            class First{
                static public $num = 10;
                static function fun1(){
                    self::$num++;
                }
            }
            /* creation of object is not allowed
            $obj = new First();
            $obj->num;
            */
            First::fun1();
            echo First::$num;

            First::fun1();
            echo First::$num;

            First::fun1();
            echo First::$num;
        ?>
    </ul>
</body>
</html>