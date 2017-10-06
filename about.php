<?php
include('confg.php');
include('admin-panel-function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('header.php'); ?>
</head>
<body>
<div id="wrapper">
	
	<?php 
		include('header_nav.php');
		include('breadcrumbs.php'); 
	?>
    
	<section id="content">
    	<?php include('content_about.php'); ?>
	</section>
    
	<footer>
		<?php include('footer.php'); ?>
	</footer>
    
</div>    
<?php include('tools_js.php'); ?>
</body>
</html>