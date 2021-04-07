<style>
.error {color: #FF0000;}
</style>
<?php
$nameErr = $phonenumberErr = $genderErr = $dateofbirthErr = "";
$name = $phonenumber = $gender = $dateofbirth = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "please enter  name";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["phonenumber"])) {
    $phonenumberErr = "please enter phonenumber";
  } else {
    $phonenumber = test_input($_POST["phonenumber"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "please select the gender";
  } else {
    $gender = test_input($_POST["gender"]);
  }
   if (empty($_POST["dateofbirth"])) {
    $dateofbirthErr = "please enter dateofbirth ";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Regestration form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name:<br><input type="text" name="name" value = "<?php echo $name;?>">
  <span class="error"><?php echo $nameErr;?></span>
  <br><br>
  Phone Number:<br><input type="text" name="phonenumber" value = "<?php echo $phonenumber;?>">
  <span class="error"><?php echo $phonenumberErr;?></span>
  <br><br>
    Gender:<br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">other
  <span class="error"><?php echo $genderErr;?></span>
  <br><br>
  Date Of Birth:<br><input type="text" name="dateofbirth" value = "<?php echo $dateofbirth;?>">
  <span class="error"><?php echo $dateofbirthErr;?></span>
  <br><br>
  <button>submit</button>  
</form>

<?php
echo $name;
echo "<br>";
echo $phonenumber;
echo "<br>";
echo $gender;
echo "<br>";
echo $dateofbirth;
?>
