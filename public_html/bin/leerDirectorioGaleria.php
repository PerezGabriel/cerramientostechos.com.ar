<?php
$i=0;
if ($handle = opendir($RUTAIMG)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
			$i++;?>
			<li>
        		<a rel="grupo_imag" href="<?php echo $RUTAIMG3.$RUTAIMG2.$file; ?>" title="<?php  echo $nom_galeria ?>"><img src="<?php echo $RUTAIMG3.$RUTAIMG1.$file; ?> " alt="<?php echo $file; ?>" /></a>
            </li>
<?php
        }
    }
    closedir($handle);
}

?>