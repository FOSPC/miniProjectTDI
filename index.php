<?php 
require_once('system/module/Connexion.php');

$connection=new Connexion();

$result=$connection->getPDO()->query("select * from subscribes_table");

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
			   <strong> Success :</strong> Votre à ete enregistre dans la base de données
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
	<?php include_once('system/views/subscription.inc');?>		
	</div>
	<div class="col-md-1 "></div>
	<!--*****************Emails Table *****************-->
	<div class="col-md-2 "></div>
	<div class="col-md-8 teal">

	<table class="table" >
		<th>
			<tr>
				<td>ID</td>
				<td>Email</td>
			</tr>
		</th>
		<?php 
			while ($data=$result->fetch()) 
			{
		?>
				<tr>
					<td><?php echo $data['id'];?></td>
					<td><?php echo $data['email'];?></td>
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