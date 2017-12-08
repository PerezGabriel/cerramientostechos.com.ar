<?php
	
if ($handle = opendir($RUTAIMG)) {
	
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
?>
			<img src="<?php echo $RUTAIMG3.$RUTAIMG2.$file; ?> " alt="<?php echo $file; ?>" />
<?php
        }
    }
    closedir($handle);
}

?>