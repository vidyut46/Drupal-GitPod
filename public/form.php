<html>
<body>
<?php
$nameErr = "";
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // validation code
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $message = "Welcome " . $_POST["name"];
  }
  $name = $_POST["name"];
  if (!preg_match("/^[a-zA-Z @]*$/", $name)) {
    $nameErr = "Only letters and white space allowed";
  }
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
<div> <?php echo $nameErr; ?> </div>
Name: <input type="text" name="name">
E-mail: <input type="text" name="email">
Website: <input type="text" name="website">
Comment: <textarea name="comment" rows="5" cols="40"></textarea>

<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<input type="submit">
</form>


</body>
</html>
`