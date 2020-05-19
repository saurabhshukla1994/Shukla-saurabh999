<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
echo "<h2> Final input :</h2>";
echo "Name = $name";
echo "<br> <br>";
echo "Email = $email";
echo "<br> <br>";
echo "Website = $website";
echo "<br> <br>";
echo "Gender = $gender";
?>