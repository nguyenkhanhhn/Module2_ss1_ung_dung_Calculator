<?php
echo "<h1 style='color: navy'> Result</h1>";
if ($_SERVER['REQUEST_METHOD']='POST'){
    $firsNumber=$_POST['first'];
    $secondNUmber=$_POST['second'];
    $crystal=$_POST['crystal'];
    $sum=$firsNumber+$secondNUmber;
    $subtraction=$firsNumber-$secondNUmber;
    $multiplication=$firsNumber*$secondNUmber;
    $division=$firsNumber/$secondNUmber;
    switch ($crystal){
        case '+':
        echo "$firsNumber$crystal$secondNUmber =$sum ";
        break;
        case '-':
            echo "$firsNumber$crystal$secondNUmber =$subtraction";
            break;
        case '*':
            echo "$firsNumber$crystal$secondNUmber =$multiplication ";
            break;
        case '/':
            echo "$firsNumber$crystal$secondNUmber =$division ";

    }

}
