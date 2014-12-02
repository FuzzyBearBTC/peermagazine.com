<?php
require("header.php"); //require is include which gives an error if file can't be found
$articleid = $_GET['id'];
if(!is_numeric(intval($articleid))){
  echo('You didn\'t specify id of article you wish to view.');
}
$articlefile=fopen("fullarticle/".$articleid, "r");
echo(fread($articlefile,filesize('fullarticle/'.$articleid))); //content of file echoed
?>

</body>
</html>
