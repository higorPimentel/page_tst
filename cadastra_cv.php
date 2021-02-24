<?php 

$cn = mysqli_connect('localhost','root','','projeto_ibm');
                                            


$cx_nome  = $_POST['cx_nome'];
$cx_dt_nascim = $_POST['cx_dt_nascim']; 
$cmb_sexo = $_POST['cmb_sexo'];
$cx_celular = $_POST['cx_celular'];
$cx_email = $_POST['cx_email'];


$query = "INSERT INTO dados_cliente(cx_nome,dt_nascimento,cmb_sexo,cx_celular,cx_email)VALUES('$cx_nome','$cx_dt_nascim','$cmb_sexo','$cx_celular','$cx_email')";

$result = mysqli_query($cn,$query);
                  

echo($result);

?>