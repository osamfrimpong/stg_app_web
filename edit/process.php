<?php 

if(isset($_POST['submit'])){
	//do job

	$filename = $_POST['filename'];
	$content = $_POST['content'];
	//echo $content;
	$file_handle = fopen($filename."html", 'w');
	fwrite($file_handle, $content);
	fclose($file_handle);
}
?>