<div class="jumbotron grey-d4" style="border-radius: 20px;padding: 20px;">
	<form role="form" action="system/actions/article/addarticle.php" method="post" name="sub" id="sub">

		<div class="form-group">
			<label class="label-controle" style="color:white">Titre:</label>
			<input class="form-control" placeholder="saisir le titre ..." type="text" id="titre" name="titre" required autofocus="yes" />
		</div>

		<div class="form-group">
			<label class="label-controle" style="color:white">Sous Titre:</label>
			<input class="form-control" placeholder="saisir le sous titre..." type="text" id="stitre" name="stitre" required autofocus="yes" />
		</div>

		<div class="form-group">
			<label class="label-controle" style="color:white">Contenu:</label>
			
<textarea name="contenu" id="contenu" required  class="form-control">
</textarea>
		</div>


		<div class="form-group">
			<button type="submit" class="btn btn-success btn-md">S'abonner</button>
		</div>

	</form>	
</div>
