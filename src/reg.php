<html>

<head>
<link rel="stylesheet" href="basic.css">
</head>
    <body>

<div id="container">
<pre><?php     
    include 'config.php';

    $id = $_POST['id'];
    $pass = $_POST['pass'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$initbal=200;

mysqli_query($bd,"INSERT INTO members(user,pass,name,phone,balance) VALUES ('$id', '$pass', '$name', '$phone','$initbal')");
echo "New Member Registered! <br><br> Member Account credited with 200 registration bonus!";
 
?>
</pre> </div> 
    </body>
</html>