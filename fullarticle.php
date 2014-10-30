<?php
require("header.php"); //require is include which gives an error if file can't be found
$articleid = $_POST['id'];
if(empty($_POST['id'])){
  echo('You didn\'t specify id of article you wish to view.')
}
$articlefile=fopen("fullarticle/".$articleid, "r");
echo(fread($articlefile,filesize($articlefile))); //content of file echoed
?>

</body>
</html>
