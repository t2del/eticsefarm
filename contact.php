<?php
include('confg.php');
include('admin-panel-function.php');
	session_start();
	$msg_mail="";
	$msg_show="";
	if(isset($_SESSION['mail_sent']))
	{
		if($_SESSION['mail_sent']==1)
		{
			$msg_mail="Your message has been sent. Thank you!";
		}
		else
		{
			$msg_mail="Error sending your message.";
		}
		$msg_show='class="show"';
	}
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
                <div class="col-lg-4">
                	<div class="pricing-box-alt">
                        <div class="pricing-heading">
                            <h4><strong>Contact Information</strong></h4>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li> 
                                	<p><i class="fa fa-envelope pr-10"></i><?php information_details("select * from _information where info_section='email'"); ?></p>
                                    <p><i class="fa fa-phone pr-10"></i><?php information_details("select * from _information where info_section='contact'"); ?></p>
                                    <p><i class="fa fa-map-marker pr-10"></i><?php information_details("select * from _information where info_section='address'"); ?></p>
                                </li>
                                <li><i class="icon-ok"></i> 
                                	<h4><strong>Social Media</strong></h4>
                                	<?php information_details($qry_info. " where info_section='index_social'"); ?>
                                    <hr>
                                    <div class="fb-page" data-href="https://www.facebook.com/punscence" data-tabs="timeline" data-width="400" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/punscence" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/punscence">PunScene</a></blockquote></div>
                                </li>
                            </ul>
                        </div>
					</div>
                </div>
                
                <div class="col-lg-8">
                    <h4>Get in touch with us by filling <strong>contact form below</strong></h4>
                    <form id="contactform" action="tools/contact/sendmail.php" method="post" class="validateform" name="send-contact">
                    	
                        <div id="sendmessage" <?php echo $msg_show; ?>>
                        	<?php echo $msg_mail; ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 field">
                                <input type="text" name="name" placeholder="* Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation">
                                </div>
                            </div>
                            <div class="col-lg-4 field">
                                <input type="text" name="email" placeholder="* Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation">
                                </div>
                            </div>
                            <div class="col-lg-3 field">
                                <input type="text" name="phone" placeholder="* Phone" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation">
                                </div>
                            </div>
                            <div class="col-lg-11 margintop10 field">
                                <textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
                                <div class="validation">
                                </div>
                                <p>
                                    <button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
                                    <span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    
	<footer>
		<?php include('footer.php'); ?>
	</footer>
    
</div>    
<?php include('tools_js.php'); ?>
</body>
</html>
<?php session_destroy(); ?>