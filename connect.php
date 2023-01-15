<?php
if($_SERVER['REQUEST_METHOD'] == 'post' && isset($_POST['submit'])) {
    $conn= mysqli_connect('localhost', 'root', '', 'test1') or die("connection failed:" .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])){
        $name = $_POST['name'];
        $name = $_POST['email'];
        $name = $_POST['phone'];
        $name = $_POST['bgroup'];

        $sql= "INSERT INTO 'users'( 'name', 'email', 'phone', 'bgroup') VALUES ( '$name', '$email', '$phone', '$bgroup')";

        $query = mysqli_query($conn, $sql); 
        if($query) {
            echo "Entry successful.";
        }
        else{
            echo 'Error Occurred'; 
        }

    }
} 



/*$servername = "localhost";
$username = "test2";
$password = "root";

// connection
$conn = mysqli_connect($servername, $username, $password);
// check if connection is successful or not.
if (!$conn){
    die("connection failed:" . mysqli_connect_error());
}
echo "connected successfully";
?>*/
?>
