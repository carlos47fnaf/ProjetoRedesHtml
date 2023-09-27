<?php
$servidor = "localhost";
$base = "dbinb0243";
$usuario = "inb0243user";
$senha = "alunos";
try{
$conn = new PDO("mysql:host=$servidor;dbname=$base", $usuario, $senha);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo"<center><h1>Conectado do Servidor Web sucesso a base: </h1>";
echo"<br><h2><font color=red>2020331579</font></h2></br>";

}catch(PDOException $e){
echo "Falha na conexão:".$e->getMessage();
}
?>
