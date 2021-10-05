<?php
$num1 = "";
$num2 = "";
$calc = "";

if (isset($_POST['submit']))
{

    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];

    function calculate($num1,$num2){
        $calc = "";
        switch ($_POST['submit']) {

            case 'add':
                $calc = $num1 + $num2;
                break;

            case 'sub':
                $calc = $num1 - $num2;
                break;

            case 'mul':
                $calc = $num1 * $num2;
                break;

            case 'div':
                $calc = $num1 / $num2;
                break;
        }
        return $calc;
    }
    $calc = calculate($num1,$num2);
}
?>

<form action="" method="post">
    <h1>calculator</h1>
    Enter first no. : <input  name='n1' value="<?php echo $num1;?>">
    <br><br>
    Enter second no.: <input  name='n2' value="<?php echo $num2?>"><br><br>
    TOTAL: <input type="res" value="<?php echo $calc;?>"><br><br>
    <input type="submit" name="submit" value="add">
    <input type="submit" name="submit" value="sub">
    <input type="submit" name="submit" value="mul">
    <input type="submit" name="submit" value="div">

</form>
