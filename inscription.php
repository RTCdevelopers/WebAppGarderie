<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="css/stylji.css" />
        <title>compte</title>
    </head>
    <body>
	<BODY BACKGROUND=" images/pagedemarage.gif" height=2000 ></BODY>
        <form action="inscription.php" method="post">
<center>
	<table width=100%>
	<tr><td width=20%><div align="center"><img src="images/cubee.gif" width=180 height=200></div></td>
	<td width=80%><MARQUEE  DIRECTION='right' WIDTH='100%' HEIGHT='100' VALIGN='bottom' SCROLLAMOUNT='20' SCROLLDELAY='30'><FONT size=8 face= "timesnew roman"color = "#840000" >  <STRONG> Trésors du quartier</STRONG></MARQUEE></td><tr>
	</table>
<center>
	<ul id="menu">
      <li><a href="acceuil.php" title="pageacceuil">acceuil </a> </li>
        <li><a href="Photo.php" title="Galerie">Galerie</a> </li>
        <li><a href="emploii.php" title="Horaire"> Horaire</a> </li>
        <li><a href="contacts.php" title="Contact"> Contact</a> </li>
       <li> <a href="plan d'etude.php" title="activités"> activités</a></li>
        <li> <a href="inscription.php" title="activités"> inscription</a></li>
		 <li> <a href="BD2.php" title="activités"> Payement</a></li>
		  <li> <a href="index2.php" title="activités">Emloyee</a></li>
    </ul>
	</center>
	<br>
	<MARQUEE  DIRECTION='left' WIDTH='100%' HEIGHT='100' VALIGN='bottom' SCROLLAMOUNT='20' SCROLLDELAY='30'><FONT size=12 face= "Harrington"color = "#660033" >  <STRONG>***Inscrivez vous*** </STRONG></MARQUEE>
	<br><br>
		<center><Table  width=60%>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>Nom d'enfant: </STRONG> </font></td> <TD width=30%><input type="text" name="nomenfant" SIZE="50" MAXLENGTH="50"/> </td> </tr>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>date de naissance  </STRONG></font></td> <TD width=30%> <input type="text" name="datenaissance" SIZE="50" MAXLENGTH="50"/></td> </tr>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>sexe de l'enfant</STRONG></font> </td> <TD width=30%><input type="text" name="sexe" SIZE="50" MAXLENGTH="50"/></td> </tr>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>nom de père: </STRONG></font></td> <TD width=30%><input type="text" name="nompere" SIZE="50" MAXLENGTH="50"/></td> </tr>
		<tr height=50 > <TD width=30%><FONT size=5 face= "times new Roman"color = "#660033" >  <STRONG>Nom de mère:</STRONG> </font></td> <TD width=30%><input type="text" name=" nommere" SIZE="50" MAXLENGTH="50"/></td> </tr>
		<tr height=50>  <TD width=30%><FONT size=5 face= "times new Roman"color = "#660033" > <STRONG> adresse: </STRONG></font></td> <TD width=30%><input type="text" name="adresse" SIZE="50" MAXLENGTH="50"/></td> </tr>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>adresse éléctronique:</STRONG></font></td> <TD width=30%> <input type="text" name="email" SIZE="50" MAXLENGTH="50" /></td> </tr>
		<tr height=50>  <TD width=30%> <FONT size=5 face= "times new Roman"color = "#660033" > <STRONG>numéro téléphone: </STRONG></font></td> <TD width=30%><input type="text" name="telephone" SIZE="50" MAXLENGTH="50" /></td> </tr></center></table></FONT>
	         <input type="submit" name="valider" value="valider"/>
        </form>
		<?php
        if (isset ($_POST['valider'])){
            //On récupère les valeurs entrées par l'utilisateur :
            $nomenfant=$_POST['nomenfant'];
            $datenaissance=$_POST['datenaissance'];
            $sexe=$_POST['sexe'];
			$pere=$_POST['nompere'];
		     $mere=$_POST['nommere'];
			$adresse=$_POST['adresse'];
			$email=$_POST['email'];
			$telephone=$_POST['telephone'];
            
            //On se connecte
          $base = mysqli_connect("localhost", "root", "");  
    mysqli_select_db ($base,"garderie") ;
 
            //On prépare la commande sql d'insertion/*<?phpinclude("fonctions.php");
            $sql = "INSERT INTO enfant VALUES('".$nomenfant."','".$datenaissance."','".$sexe."','".$pere."','".$mere."','".$adresse."','".$email."','".$telephone."')"; 
            /*on lance la commande (mysql_query) et au cas où, 
            on rédige un petit message d'erreur si la requête ne passe pas (or die) 
            (Message qui intègrera les causes d'erreur sql)*/
			 mysqli_query ($base,$sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
            mysqli_close($base);
        }
        ?>
		
         </body>
</html>