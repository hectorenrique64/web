<?php
$user= "root";
$host= "localhost";
$password ="root";
$dbt = "tienda_master";
$conn = mysqli_connect($host, $user, $password) or die("No se ha podido conectar");

$db = mysqli_select_db($conn, $dbt) or die("No se ha podido conectar");
$conn->set_charset("utf8");
?>


<?php
$sql ="SELECT * FROM  usuarios where id =45";
$usuarios = $conn ->query($sql);
$usuario= $usuarios->fetch_assoc();
$password= $usuario['password'];
echo $password;
echo "<br>";
echo "<pre>";
var_dump($usuario);
echo "</pre>";

$ver= password_verify('1', $password);
echo "<br>";
echo $ver;

if($ver){
	echo "funciono";
}
else{
	echo "nue";
}
/*
return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost'=>4]);

?>

$password_hash= password_hash('1', PASSWORD_BCRYPT, ['cost'=>4]);
$sql = "INSERT INTO usuarios(`id`,`nombre`,`apellidos`,`email`,`rol`,`password`,`fecha`,`imagen`) VALUES(null, 'new','new','nue@nu','user','{$password_hash}',null,null)";
echo $sql;
$new =$conn->query($sql);
echo $new;
?>
*/