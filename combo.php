<h1>combobox  drop down list</h1>
<br/>


<?php 
require_once('system/module/Connexion.php');
$connection=new Connexion();
$result=$connection->getPDO()->query("select * from article");
$count=-1;
$output="<select>";
while ($art=$result->fetch()) 
{
	$count++;
	$output=$output."<option value='{$art["id"]}'>".$art["titre"]."</option>";
}
$output=$output."</select>";

if ($count==-1)
{
 echo 'pas d\'articles dans la BD';	
}
else
{
echo $output;	
}
?>
<br/>
<hr/>

<select>
	<option value="">item1</option>
	<option value="">item 2</option>
	<option value="">item 3</option>
</select>