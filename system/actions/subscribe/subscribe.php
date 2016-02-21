<?php 

if (isset($_POST['email']))
{
	require_once '../../module/Connexion.php';
	$connection=new Connexion();

	$email=htmlspecialchars($_POST['email']);  # !! 100% secure

	$query="insert into subscribes_table(email) values('".$email."')";
	$result=$connection->getPDO()->query($query);

	if ($result)
	{
		header("location:../../../index.php?state=saved");
	}
	else
	{
		header("location:../../../index.php?state=notsaved");
	}
}
else
{
	header("location:../../intrusion/404.php");
}

?>