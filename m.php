<?php
if(isset($_POST['submit']))
{

if(!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['pswdConfirm']))
{
$username=mysql_real_escape_string(htmlspecialchars(trim($_POST['username'])));
$password=mysql_real_escape_string(htmlspecialchars(trim($_POST['password'])));
$pswdConfirm=mysql_real_escape_string(htmlspecialchars(trim($_POST['psdwConfirm'])));

if(strlen($username)>=4)
{
if(strlen($password)>=6)
{
if($pswd==$pswdConfirm){

$password=md5($password);
mysql_connect('localhost','root','');
mysql_select_db('phpmembre');
$query=mysql_query("INSERT INTO users VALUES('','$username','$password')");
die('Iscription Terminer');
}else{ echo "les mots de passe ne sont pas identique";}

}else{ echo "le mot de passe est trop court";}
}else {echo "Le nom d'utilisateur est trop court!";}
}else {echo "Veuillez saisir tous les champs";}
}
?>