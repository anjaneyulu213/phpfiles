<?php
if(isset($_POST['submit'])){
$username=$_POST['Username'];
$password=$_POST['Password'];
$name=array("Madhu","Srikanth","Shreyansh","Jathin");
$minimum=5;
$maximum=10;
If(strlen($username)<$minimum){
    echo "username has to be more than five";
}
if(strlen($username)>$maximum) {
    echo "username can not be more than ten";
}
if(!in_array($username,$name)){
    echo "your not allowed";
}else{
    echo "Welcome to Techouts";
}

 }
?>
<html>
<form action="form.php" method="post">
    <input type="text" name="Username" placeholder="enter username"><br>
    <input type="password" name="Password" placeholder="enter password">
    <input type="submit" name="submit">

</form>

</html>