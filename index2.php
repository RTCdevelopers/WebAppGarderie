

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" href="css/stylji.css" />
</head>
 
<body>
<BODY BACKGROUND=" images/pagedemarage.gif" height=2000 ></BODY>
<center>
	<table width=75%>
	<tr><td width=20%><div align="center"><img src="images/cubee.gif" width=180 height=200></div></td>
	<td width=80%><MARQUEE  DIRECTION='right' WIDTH='100%' HEIGHT='100' VALIGN='bottom' SCROLLAMOUNT='20' SCROLLDELAY='30'><FONT size=8 face= "timesnew roman"color = "#840000" >  <STRONG> Trésors du quartier</STRONG></MARQUEE></td><tr>
	</table>

	<ul id="menu">
      <li><a href="acceuil.php" title="acceuil">Acceuil </a> </li>
        <li><a href="Photo.php" title="Galerie">Galerie</a> </li>
        <li><a href="emploii.php" title="Horaire"> Horaire</a> </li>
        <li><a href="contacts.php" title="Contact"> Contact</a> </li>
       <li> <a href="plan d'etude.php" title="activités"> Activités</a></li>
        <li> <a href="inscription.php" title="inscription"> Inscription</a></li>
		 <li> <a href="BD2.php" title="activités"> Payement</a></li>
		  <li> <a href="index2.php" title="activités">Emloyee</a></li>
    </ul>
	</center>
	<center>
<form method="post" action="index2.php" class="fromB">
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
</form>
</center>
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
</body>
</html>