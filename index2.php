
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
<titre><h2><center>Espace d'employee</center></h2></titre>
<center>
<link rel="stylesheet" type="text/css" href="index.css">
<body>
<from method="post" action="index2.php" class="fromB">
<div class="containerA">
<div class="header">
<h1>Inscription</h1>
</div>
<div class="inscription">
<label><b>Nom d'utilisateur</b></label>
<input name="username" type="text" required placeholder="Nom d'utilisateur"><br/>
<label><b>Mot de passe</b></label>
<input name="password" type="password" required placeholder="&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot"><br/>
<label><b>Confirmer Mot de passe<b></label>
<input name="pswdConfirm" type="password" required placeholder="&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot;&middot">
</div>
<div class="footer">
<a id="co" href="index1.php"><center><b>J'ai deja un compte</b></center><a/>
<input name="submit" type="submit" value="Enregister">
</div>
</div>
</from>
</center>
