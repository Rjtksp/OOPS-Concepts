<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interface</title>
</head>
<body>
    <h3>Interface in oops</h3>
    <ul>
        <li>Interface can only contain abstract method/function.</li>
        <li>In interface we can't define variables.</li>
        <li>No constructor in interface.</li>
        <li>All method/function must be public.</li>
        <li>Interface supports multiple inheritance.</li>
        <li><b>Note: </b>For inherit the properties of one class to another class use <b>implements</b> keyword.</li>
    </ul>
    <?php
        interface First{
            public function test1();
        }
        interface Second{
            public function test2();
        }
        class Third implements First,Second{
            function test1(){
                echo "Test 1 <br>";
            }
            function test2(){
                echo "Test 2";
            }
        }
        $obj = new Third();
        $obj->test1();
        $obj->test2();
    ?>
</body>
</html>