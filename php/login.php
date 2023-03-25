<?php 

$servername = 'localhost';
$username = 'root';
$password = '';


try {
  $uname = $_POST['username'];
  $pass = $_POST['password'];


  //code...
  $conn = new PDO("mysql:host=$servername;dbname=registration",$username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
  //code...
  $sql = "SELECT * FROM sdkusers WHERE username = :username AND password = :password";
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(':username', $uname);
  $stmt->bindValue(':password', $pass);
 
  $stmt->execute();
  $count = $stmt->rowCount();
  if($count > 0) {
    $_SESSION['username'] = $uname;
    echo "$uname";
  
  }
  else {
    echo "Login Not Success";
    echo 'window.location.replace("/");';
  }
} catch (\Throwable $th) {
   echo $th;
}


} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>
