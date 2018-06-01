<form method="post" style="text-align:center;background-color:#353535;">
	<br>
    <input name="deleteuser" type="submit" value="Supprimer login.txt" style="color:black;background-color:white;">
    <input name="deletereg" type="submit" value="Supprimer register.txt" style="color:black;background-color:white;">
	<br><br>
</form>
<div id="list">
  <p><iframe style="text-align:center" src="ascii.txt" frameborder="0" height="50%"
      width="100%"></iframe></p>
</div>

<?php
    if(isset($_POST['deleteuser']))
    {
        $fh = fopen( 'login.txt', 'w' );
		fclose($fh);
		header('Location: index.html');
    }
    if(isset($_POST['deletereg']))
    {
        $fh = fopen( 'register.txt', 'w' );
		fclose($fh);
		header('Location: index.html');
    }
?>