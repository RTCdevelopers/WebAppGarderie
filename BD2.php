<html>
    <head>
          <meta charset="utf_8" />
          <link rel="stylesheet" href="css/stylji.css" />
          <title>Formulaire de payement</title>
		  </head>
          <body>
		  <BODY BACKGROUND=" images/pagedemarage.gif" height=2000 ></BODY>
<form action="BD2.php" method="POST">
<center>
	<table width=100%>
	<tr><td width=20%><div align="center"><img src="images/cubee.gif" width=180 height=200></div></td>
	<td width=80%><MARQUEE  DIRECTION='right' WIDTH='100%' HEIGHT='100' VALIGN='bottom' SCROLLAMOUNT='20' SCROLLDELAY='30'></table>
<center>
	<ul id="menu">
      <li><a href="pageacceuil.php" title="pageacceuil">acceuil </a> </li>
        <li><a href="Photo.php" title="Galerie">Galerie</a> </li>
        <li><a href="emploii.php" title="Horaire"> Horaire</a> </li>
        <li><a href="contacts.php" title="Contact"> Contact</a> </li>
       <li> <a href="plan d'etude.php" title="activités"> activités</a></li>
        <li> <a href="inscription.php" title="activités"> inscription</a></li>
		 <li> <a href="BD2.php" title="activités"> Payement</a></li>
		  <li> <a href="index2.php" title="activités">Emloyee</a></li>
    </ul>
	</center>
	<br><br><br><br>
	<Table  width=60%>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>Nom de père: </STRONG> </font></td> <TD width=30%>
		<input type="text" name="NomP" SIZE="50" MAXLENGTH="50"/> </td> </tr>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>Numéro de carte d'identité:  </STRONG></font></td> <TD width=30%> 
		<input type="text" name="Numero" SIZE="50" MAXLENGTH="50"/></td> </tr>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>Nom d'enfant: </STRONG></font> </td> <TD width=30%>
		<input type="text" name="Nom" SIZE="50" MAXLENGTH="50"/></td> </tr>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>Montant à payer: </STRONG></font></td> <TD width=30%>
		<input type="text" name="Montant" SIZE="50" MAXLENGTH="50"/></td> </tr></center></table></FONT>
<input type="submit" name="envoyer" value="envoyer" />
</form>
<?php 
 if (isset($_POST['envoyer'])){
$NomP=$_POST["NomP"];
$Numero=$_POST["Numero"];
$Nom=$_POST["Nom"];
$Montant=$_POST["Montant"];
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"garderie");
$sql="INSERT INTO table(Montant,Nom,NomP,Numero) VALUES('$NomP','$Numero','$Nom', '$Montant')";
mysqli_query($con,$sql);
mysqli_close($con);
}
?>
</body>
</html>