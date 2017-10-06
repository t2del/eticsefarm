<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<ul class="portfolio-categ filter clearfix">
				<li><a <?php if(isset($_GET['src'])) { if($_GET['src']=='gamefowl') { echo 'style="color:#68A4C4;"'; }} ?> href="?src=gamefowl" title="">Gamefowl</a></li>
				<li><a <?php if(isset($_GET['src'])) { if($_GET['src']=='farm') { echo 'style="color:#68A4C4;"'; }} ?> href="?src=farm" title="">Farm trees</a></li>
				<li><a <?php if(isset($_GET['src'])) { if($_GET['src']=='goat') { echo 'style="color:#68A4C4;"'; }} ?> href="?src=goat" title="">Goat</a></li>
			</ul>
            <?php include('gallery_nav.php'); ?>
			<div class="row">
				<section id="projects">
                   	<ul id="thumbs" class="portfolio clearfix text_center">
						<?php include('gallery_preview.php'); ?>
                    </ul>
				</section>
			</div>
		</div>
	</div>
</div>