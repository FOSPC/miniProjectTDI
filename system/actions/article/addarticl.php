<?php 
if (isset($_POST['titre']))
{


	require_once("../../module/connexion/Connexion.php");

	$con=new Connexion();

	$titre=htmlspecialchars($_POST['titre']);
	$stitre=htmlspecialchars($_POST['stitre']);
	$contenu=htmlspecialchars($_POST['contenu']);



	$requette="
	insert 
	into 
	article(titre,stitre,contenu)
	values(
	'".$titre."',
	'".$stitre."',
	'".$contenu."'
	)
	";

	$res=$con->getPDO()->query($requette);

	if ($requette) 
	{
	  header("location:../../../article.php?state=saved");		
	}
	else
	{
	  header("location:../../../article.php?state=nosaved");
	}
	
}
else
{
	header("location:../../views/404.php");
}			
?>