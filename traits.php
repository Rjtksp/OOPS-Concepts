<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Traits</title>
</head>
<body>
    <h3>Traits in oops</h3>
    <ul>
        <li>Traits are used to declare methods that can be used in multiple classes.</li>
        <li>Traits are declared with the trait keyword:</li>
        <li>To use a trait in a class, use the use keyword:</li>
        <li><b>Note: </b>When we inherit the properties of one class to multiple classes then all the properties of parent class is avialabe in child class but in some case we don't want properties of parent class then we can use of traits.</li>
        <li>with the help of <b>use </b> keyword with class name we can use trait.</li>
        <li>If we want to use multiple trait then we can use <b>use</b> keyword with class_name seperated with commas like in class Third below.</li>
    </ul>
    <!-- Inheritance example -->
    <?php /*
        class First{
            function fun1(){
                echo "Function 1";
            }
        }
        class Second extends First{
            function fun2(){
                echo "Function 2";
            }
        }
        class Third extends Second{
            function fun3(){
                echo "Function 3";
            }
        }
        class Fourth extends Third{
            function fun4(){
                echo "Function 4";
            }
        }

        $obj = new Fourth();
        $obj->fun1();
        */
    ?>

    <!-- Trait explained below -->
    <?php
        trait First{
            function fun1(){
                echo "Function 1";
            }
        }
        trait Second{
            use First;
            function fun2(){
                echo "Function 2";
            }
        }
        class Third{
            use First, Second;
            function fun3(){
                echo "Function 3";
            }
        }
        class Fourth extends Third{
            function fun4(){
                echo "Function 4";
            }
        }

        $obj = new Third();
        $obj->fun1();
        $obj->fun2();
    ?>
</body>
</html>