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
	<?php include('header_nav.php'); ?>
	<section id="featured">
			<?php include('index_slider.php'); ?>
    </section>
    <section id="content">
		<div class="container">
			<div class="row">
            	<?php include('content_index.php'); ?>
            </div>
        </div>
    </section>
	<footer><?php include('footer.php'); ?></footer>
</div>
<?php include('tools_js.php'); ?>
</body>
</html>