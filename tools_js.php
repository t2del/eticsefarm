<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<script src="tools/js/jquery.js"></script>
<script src="tools/js/jquery.easing.1.3.js"></script>
<script src="tools/js/bootstrap.min.js"></script>
<script src="tools/js/jquery.fancybox.pack.js"></script>
<script src="tools/js/jquery.fancybox-media.js"></script>
<script src="tools/js/google-code-prettify/prettify.js"></script>
<script src="tools/js/portfolio/jquery.quicksand.js"></script>
<script src="tools/js/portfolio/setting.js"></script>
<script src="tools/js/jquery.flexslider.js"></script>
<script src="tools/js/animate.js"></script>
<script src="tools/js/custom.js"></script>

<?php 
$basefile=basename($_SERVER['PHP_SELF'], ".php");
if($basefile=='index' or $basefile=='contact' or $basefile=='gallery' or $basefile=='admin-panel') 
{ 
?>
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=231377440297775";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php } ?>