<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $item = $_POST["item"];
  $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todos";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO todo (todo) VALUES('$item')";
    $result = $conn->query($sql);
    echo "Successfully added";
}
?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
Item :<textarea name="item" rows="5" cols="40"></textarea>
<input type="submit">
</form>
</body>
</html>
