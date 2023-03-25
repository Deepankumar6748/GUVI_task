<?php 

$servername = 'localhost';
$username = 'root';
$password = '';

//mongo db configs
$mongo_host = "register.nf8msyr.mongodb.net";
$dbname = "register";
$mongo_uname = "deeps";
$mongo_password = "deepsdeepan";

try {
  //code...
  $conn = new PDO("mysql:host=$servername;dbname=register",$username, $password);
  $dsn = "mongodb+srv://$username:$password@$host/$dbname";
  $mongo = new MongoDB\Client($dsn);
  $collection = $mongo->selectCollection($dbname, "users");
  $result = $collection->insertOne(["name" => "$usname", "email" => "$e_mail"]);
} catch (\Throwable $th) {
  echo $th;
}

try {
  $name = $_POST['username'];
  $pass = $_POST['password'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $mobile = $_POST['mobile'];

 // echo "The tow params are $uname and $pass";
  //code...
  $conn = new PDO("mysql:host=$servername;dbname=registration",$username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
try {
  //code...
  $sql = "INSERT INTO sdkusers (username, password, email, mobile, dob) VALUES (?,?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->execute(["$name","$pass","$email","$mobile","$dob"]);
} catch (\Throwable $th) {
   echo $th;
}


echo " New record created successfully";
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>