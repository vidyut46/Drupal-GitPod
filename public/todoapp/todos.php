<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body>
<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sql = "DELETE FROM todo where id=5";
    $conn->query($sql);
    echo "Successfully deleted";
}

$sql = "SELECT id, todo FROM todo";
$result = $conn->query($sql);

?>

<div class="container">

<?php
if ($result->num_rows > 0) {
  echo '<table class="table">
  <tr>
    <th>ID</th>
    <th>Item</th>
    <th>Delete?</th>
  </tr>';
  $submit = $_SERVER["PHP_SELF"];
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["id"]. "</td>
    <td>" . $row["todo"]. "</td>
    <td>
    <form action=" . $submit . " method='post'>
      <button type='submit'>Delete</button>
      </form>
    </td>
    </tr>";
  }
  echo '</table>';
} else {
  echo "<h1>0 results</h1>";
}
$conn->close();
?>
</div>
</body>
</html>
