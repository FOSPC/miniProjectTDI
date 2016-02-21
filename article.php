<?php 
require_once('system/module/Connexion.php');

$connection=new Connexion();

$result=$connection->getPDO()->query("
	select * from article"
);
?>



<!DOCTYPE html>
<html>
<head>
	<?php include_once('system/views/head.inc');?>
</head>
<body>
	<?php include_once('system/views/menu.inc');?>
	<?php 

	if (isset($_GET['state'])) 
	{
		if ($_GET['state']=="saved")
		{
			echo '
			<div class="alert alert-success">
			   <strong> Success :</strong> Votre operation à ete enregistre dans la base de données
			</div>
			';
		}
		if ($_GET['state']=="notsaved")
		{
			echo '
			<div class="alert alert-danger">
			   <strong> Erreur :</strong> Un problème est survenu au cours du processus
			</div>
			';
		}
	}

	?>

	<div class="col-md-1 "></div>
	<div class="col-md-10 ">
	<?php include_once('system/views/article.inc');?>		
	</div>
	<div class="col-md-1 "></div>
	<!--*****************Emails Table *****************-->
	<div class="col-md-2 "></div>
	<div class="col-md-8 teal">

	<table class="table" >
		<th>
			<tr>
				<td>Titre</td>
				<td>Sous Titre</td>
				<td>Contenu</td>
			</tr>
		</th>
		<?php 
			while ($data=$result->fetch()) 
			{
		?>
				<tr>
					<td><?php echo $data['titre'];?></td>
					<td><?php echo $data['stitre'];?></td>
					<td><?php echo $data['contenu'];?></td>
	            </tr>
		<?php
			} 
		?>
	</table>

	</div>
	<div class="col-md-2 "></div>
	<!--***********************************************-->
	<?php include_once('system/views/footer.inc');?>
	<?php  include_once('system/views/scripts.inc');?>
</body>
</html>