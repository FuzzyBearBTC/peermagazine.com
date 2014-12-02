<?php
include("header.php");
?>
<?php
$lastarticlefile=fopen("lastarticle.dat", "r"); //here is stored info about last article - that number
$lastarticlenumber = fread($lastarticlefile,filesize("lastarticle.dat"));
fclose($lastarticlefile);
$thisarticlefile = fopen("articles/".intval($lastarticlenumber),"r");
echo(fread($thisarticlefile,filesize("articles/".intval($lastarticlenumber)))); //now, last article is echoed. printing last 5 articles (only previews, and these previews include anchor to full article by fullarticle.php)
fclose($thisarticlefile);
$echoedarticles = 1;
while($echoedarticles < 6){
  if($lastarticlenumber > 0){
    $lastarticlenumber = $lastarticlenumber-1;
    $thisarticlefile = fopen("articles/".intval($lastarticlenumber),"r");
    echo(fread($thisarticlefile,filesize($thisarticlefile))); //now, last article is echoed. printing last 5 articles (only previews, and these previews include anchor to full article by fullarticle.php)
    fclose($thisarticlefile);
  }
  $echoedarticles = $echoedarticles + 1;
}
//now, last 5 articles (previews) are echoed.
?>
</body>
</html>
