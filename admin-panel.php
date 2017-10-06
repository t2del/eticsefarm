<?php
session_start();
include('admin-panel-process.php');
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
		include('header_nav.php'); // menu section	
		include('breadcrumbs.php'); 
	?>
    <div class="container">
    <section>
    	<div class="row">
        	<div class="clearfix row_spacer">
                <?php 
				if(isset($_SESSION["user"])) 
				{ 
					echo '<div class="col-lg-3">';
					include('admin_nav.php');
					echo '</div>';
					if(isset($_GET['src']))
					{
						include('admin/'.$_GET['src'].'.php');
					}
				} else { ?>
                	<form id="admin_login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <?php $prev_link = basename($_SERVER['REQUEST_URI']); 
					?>
            		<input type="hidden" name="prev_link" id="prev_link" value="<?php echo $prev_link; ?>" />
                    <input type="hidden" name="login" id="login" value="login" />
                    
                    <div class="boxify_noshadow">
                    	<input name="user" type="text" id="user" placeholder="Username">
                        <input name="pass" type="password" id="pass" placeholder="Password">
                        <fieldset>
                        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="5" class="btn btn-theme">Submit</button>
                        </fieldset>	
                    </div>
           	  </form>
                  
                <?php } ?>      
            </div>
        </div>
    </section>    
    </div> 
	<footer><?php include('footer.php'); ?></footer>
</div>    
<?php include('tools_js.php'); ?>
</body>
</html>
