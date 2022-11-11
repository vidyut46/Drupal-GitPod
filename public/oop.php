<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body>
<?php
class Employee { // class
    public string $name; // attributes, properties.
    public string $address;
    public string $gender;

    public function set_address($address) {
      $this->address = $address;
    }

    public function get_address() {
      return $this->address;
    }
}

$employee1 = new Employee(); // object, instance

$employee2 = new Employee(); // object, instance

$employee3 = new Employee(); // object, instance

$employee1->name = 'Lakshmi Narasimhan';
$employee2->name = 'Ramkumar';
$employee3->name = 'Kanageswari';


$employee1->set_address('Chennai - 600 061');

$employee2->set_address('Chennai - 600 006');


class Todo {
  private int $id;
  public string $item;
  public string $user;

  function __construct($id, $item, $user) {
    //echo "New object created.\n";
    $this->id = $id;
    $this->item = $item;
    $this->user = $user;
  }

  function __destruct() {
   // echo "This object destroyed";
  }

  public function add_to_database($connection) {
    $query = $this->prepare_query();
    $result = $connection->query($query);
    if (!$result) {
      echo "already added";
    } else {
      echo "Successfully added\n";
    }
  }

  private function prepare_query() {
    return "INSERT INTO todo (id, todo, user) VALUES($this->id, '$this->item', '$this->user')";
  }

  public function get_from_database() {

  }
}

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

$todo_1 = new Todo(200, 'Teach OOP', 'lakshmi');
$todo_1->add_to_database($conn);

echo $todo_1->id;

$todo_2 = new Todo(201, 'Give exerices', 'lakshmi');
$todo_2->add_to_database($conn);
?>
</div>
</body>
</html>
