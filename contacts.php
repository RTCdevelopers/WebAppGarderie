<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">
	
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
	  <link rel="stylesheet" href="css/stylji.css" />
    <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:300,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:6000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
	 
</head>

<body>
<BODY BACKGROUND=" images/pagedemarage.gif" height=2000 ></BODY>
<?php $con=mysqli_connect("localhost","root","","garderie")or die("Error"); ?> 
<center>
	<table width=100%>
	<tr><td width=20%><div align="center"><img src="images/cubee.gif" width=180 height=200></div></td>
	<td width=80%><MARQUEE BGCOLOR='FFFFFF' DIRECTION='right' WIDTH='100%' HEIGHT='100' VALIGN='bottom' SCROLLAMOUNT='20' SCROLLDELAY='30'><FONT size=8 face= "timesnew roman"color = "#840000" >  <STRONG> Trésors du quartier</STRONG></MARQUEE></td><tr>
	</table>
	</center>
	<br><br>
	<center>
	
	<ul id="menu">
      <li><a href="acceuil.php" title="acceuil">acceuil</a></li>
        <li><a href="Photo.php" title="Galerie">Galerie</a></li>
        <li><a href="emploii.php" title="Horaire">Horaire</a></li>
        <li><a href=" contacts.php" title="Contact">Contact</a></li>
       <li> <a href="plan d'etude.php" title="activités"> activités</a></li>
	   <li> <a href="inscription.php" title="inscription"> Inscription</a></li>
	    <li> <a href="BD2.php" title="activités"> Payement</a></li>
		 <li> <a href="index2.php" title="activités">Emloyee</a></li>
   
    </ul>
	</center>
  <div class="main">
          <center>
            <div id="slide">		
                <div class="slider">
				
                    <ul class="items">
                        <li><img src="images/slider-1.jpg" alt="" /></li>
                        <li><img src="images/slider-2.jpg" alt="" /></li>
                        <li><img src="images/slider-3.jpg" alt="" /></li>
                    </ul>
					
                </div>	
                <a href="#" class="prev"></a><a href="#" class="next"></a>
				</center>
            </div>
            
  <!--==============================content================================-->
  
                      
					  
  
    <section id="content">
        <div class="container_12">	
          <div class="grid_4 bot-1">
            <h2 class="top-6">Contactez Nous</h2>
             
            <dl>
                <dt> Adresse:   13 RUE MED HEDI KHEFACHA </dt>
                <dd>Telephone: +216 74 125 542</dd>
                <dd> E-mail:<a href="#" class="link">Garderie@gmail.com</a></dd>
            </dl> 
          </div>
          <div class="grid_8">
            <div class="block-1 top-5">
            	<div class="block-1-shadow">
                	<h2 class="clr-6"> Contact</h2>
                    <form id="form" action="contacts.php"  method="post" >
                      <fieldset>
                        <label><strong>Nom:</strong><input type="text" name="nom" placeholder="votre  Nom ici"><strong class="clear"></strong></label>
                        <label><strong>Email:</strong><input type="text" name="Email" placeholder="votre Email ici"id="email"><strong class="clear"></strong></label>
                        <label><strong>Téléphone:</strong><input type="text" placeholder="votre Telephone ici" name="Telephone" id="tel"><strong class="clear"></strong></label>
                        <label><strong>Message:</strong ><textarea style="width:45%;height:200px"  placeholder="&Eacute;crire votre message ici" name="msg"></textarea></strong></label>
                        <strong class="clear"></strong>
                        <div class="btns pad-2"><input style="height:30px;width:50%;border:1px solid #004400 " type="submit" name="envoyer" value ="Envoyer" > </div>
						 
                      </fieldset>  
					    
						
                    </form> 
					
                </div>
            </div>
           
          </div>
          <div class="clear"></div>
        </div>
    </section>    
   </div>   
  
     <script>
						document.getElementById('email').addEventListener("focusout",function()
{
	var reg = /^[^\s@]+@[^\s@]+\.[^\s@]+$/i; 
	var email = document.getElementById('email').value;
	var m;
	 
	if (!reg.exec(email)) 
	{
		alert("email  incorrect");
	}
});
document.getElementById('tel').addEventListener("focusout",function()
{
	var reg = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im; 
	var tel = document.getElementById('tel').value;
	var m;
	 
	if (!reg.exec(tel)) 
	{
		alert("tel incorrect");
	}
});
</script>

   </body>
</html>
<?php 

  if (isset($_POST['envoyer'])){
 
  $nom=$_POST['nom'];
 $email=$_POST['Email'];
 $tel=$_POST['Telephone'];
 $msg=$_POST['msg'];
  $query = "insert into contact(Email,msg,Nom,Tel)  VALUES ('$email','$msg','$nom','$tel')";
  $run_insert=mysqli_query($con,$query ) or die('Error, query failed');
 
}  
?> 