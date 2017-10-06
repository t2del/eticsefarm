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
		<div class="container">
			<div class="row">
            	<?php include('message_404.php'); ?>
            </div>
        </div>
    </section>
	<footer><?php include('footer.php'); ?></footer>
</div>
<?php include('tools_js.php'); ?>
</body>
</html>