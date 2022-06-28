
<?php 

if(isset($_POST['submit'])){
	//do job

	$filename = $_POST['filename'];
	$content = $_POST['content'];
	//echo $content;
	$file_handle = fopen($filename.".html", 'w');
	fwrite($file_handle, $content);
	fclose($file_handle);
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<title>CKEditor 5 ClassicEditor build</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="https://c.cksource.com/a/1/logos/ckeditor5.png">
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body data-editor="ClassicEditor" data-collaboration="false" data-revision-history="false">
		
		<main>
			<form method="POST" action="index.php">
			<div class="centered">
				<div class="row">
					
						Filename: <input type="text" name="filename" required></div>
						<div class="row">
						
						Content: <textarea name="content" class="editor" required>
							
						</textarea></div>
							
						<div class="row">
							<button type="submit" name="submit" value="submit">Submit</button>
						</div>
					</div>
				</div>
			</form>
		</main>
		<script src="ckeditor.js"></script>
		<script>
			const watchdog = new CKSource.EditorWatchdog();
			
			window.watchdog = watchdog;
			
			watchdog.setCreator( ( element, config ) => {
				return CKSource.Editor
					.create( element, config )
					.then( editor => {
						
						
						
			
						return editor;
					} )
			} );
			
			watchdog.setDestructor( editor => {
				
				
			
				return editor.destroy();
			} );
			
			watchdog.on( 'error', handleError );
			
			watchdog
				.create( document.querySelector( '.editor' ), {
					
					licenseKey: '',
					
					
					
				} )
				.catch( handleError );
			
			function handleError( error ) {
				console.error( 'Oops, something went wrong!' );
				console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
				console.warn( 'Build id: imr13mmyft54-8wvih02ym3j3' );
				console.error( error );
			}
			
		</script>
	</body>
</html>