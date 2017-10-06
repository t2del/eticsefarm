<?php 
	$breadcrumb = $basefile;

	if($basefile=='gallery')
	{
		if(isset($_GET['src']))
		{
			$breadcrumb='<a href="gallery.php">'.ucfirst($basefile).'</a>&nbsp;&nbsp;/&nbsp;&nbsp;'.ucfirst($_GET['src']);
			if($_GET['src']=='gamefowl' and isset($_GET['product']))
			{
				$breadcrumb="";
				$check_gamefowl="select * from _gamefowls where gamefowl_id=".$_GET['product'];
				$gamefowl_sel=$conn->query($check_gamefowl);
				$gamefowl = $gamefowl_sel->fetch_assoc();
				$breadcrumb = ucfirst('<a href="gallery.php">Gallery</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="?src='.$_GET['src'].'">'.ucfirst($_GET['src']))."</a>&nbsp;&nbsp;/&nbsp;&nbsp;".ucfirst($gamefowl['gamefowl_breed']);
			}
			if($_GET['src']=='farm' and isset($_GET['product']))
			{
				$breadcrumb="";
				$check_tree="select * from _trees where tree_id=".$_GET['product'];
				$tree_sel=$conn->query($check_tree);
				$tree = $tree_sel->fetch_assoc();
				$breadcrumb = ucfirst('<a href="gallery.php">Gallery</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="?src='.$_GET['src'].'">'.ucfirst($_GET['src']))."</a>&nbsp;&nbsp;/&nbsp;&nbsp;".ucfirst($tree['tree_breed']);
			}
		}
	}
	if($basefile=='admin-panel')
	{
		$breadcrumb = "Admin";
	}

?>
<section id="inner-headline">
	<div class="container">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="./" title="Home"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active"><?php echo ucfirst($breadcrumb); ?></li>
				</ul>
		</div>
	</div>
</section>