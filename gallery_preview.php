<?php 
	$rowsperpage = 16;	// number of rows to show per page admin-pagination
	$range = 4; 		// range of num links to show admin-pagination
	if(!isset($_GET['src'])) {
	$qry ="SELECT * FROM _farm_animals order by fa_type asc, fa_id desc";
	$qry_count = "Select Count(*) from _farm_animals";
	}
	else {
		if($_GET['src']=='gamefowl') {
			if(isset($_GET['product']))
			{
				$qry ="SELECT _farm_animals.*, _gamefowls.* FROM _farm_animals INNER JOIN _gamefowls ON _farm_animals.gamefowl_ID=_gamefowls.gamefowl_ID where _farm_animals.gamefowl_ID=".$_GET['product']." order by _gamefowls.gamefowl_breed asc, _farm_animals.fa_id desc";
				$qry_count = "Select Count(*) FROM _farm_animals INNER JOIN _gamefowls ON _farm_animals.gamefowl_ID=_gamefowls.gamefowl_ID where _farm_animals.gamefowl_ID=".$_GET['product'];
			}
			else
			{
				$qry ="SELECT _farm_animals.*, _gamefowls.* FROM _farm_animals INNER JOIN _gamefowls ON _farm_animals.gamefowl_ID=_gamefowls.gamefowl_ID order by _gamefowls.gamefowl_breed asc, _farm_animals.fa_id desc";
				$qry_count = "Select Count(*) FROM _farm_animals INNER JOIN _gamefowls ON _farm_animals.gamefowl_ID=_gamefowls.gamefowl_ID";
			}
		}
		if($_GET['src']=='farm') {
			if(isset($_GET['product']))
			{
				$qry ="SELECT _farm_animals.*, _trees.* FROM _farm_animals INNER JOIN _trees ON _farm_animals.tree_ID=_trees.tree_ID where _farm_animals.tree_ID=".$_GET['product']." order by _trees.tree_breed asc, _farm_animals.fa_id desc";
				$qry_count = "Select Count(*) FROM _farm_animals INNER JOIN _trees ON _farm_animals.tree_ID=_trees.tree_ID where _farm_animals.tree_ID=".$_GET['product'];
			}
			else
			{
				$qry ="SELECT _farm_animals.*, _trees.* FROM _farm_animals INNER JOIN _trees ON _farm_animals.tree_ID=_trees.tree_ID order by _trees.tree_breed asc, _farm_animals.fa_id desc";
				$qry_count = "Select Count(*) FROM _farm_animals INNER JOIN _trees ON _farm_animals.tree_ID=_trees.tree_ID";
			}	
		}
		if($_GET['src']=='goat') {
			$qry ="SELECT * FROM _farm_animals where fa_type='goat' order by fa_id desc";
			$qry_count = "Select Count(*) FROM _farm_animals where fa_type='goat'";
		}
	}
	
	$qry_total = $conn->query($qry_count); // find out how many rows are in the table
	$r =  $qry_total->fetch_row();
	$numrows = $r[0];
	$totalpages = ceil($numrows / $rowsperpage); // find out total pages
	if (isset($_GET['si']) && is_numeric($_GET['si'])) { // get the current page or set a default
	   $si = (int) $_GET['si']; // cast var as int
	} else {
	   $si = 1; // default page num
	}
	if ($si > $totalpages) {	// if current page is greater than total pages...
	   $si = $totalpages;		// set current page to last page
	}
	if ($si < 1) { // if current page is less than first page...
	   $si = 1;	// set current page to first page
	}
	$offset = ($si - 1) * $rowsperpage; // the offset of the list, based on current page 
	$qry_sel = $qry." LIMIT $offset, $rowsperpage"; 
	$result = $conn->query($qry_sel);
	while($row = $result->fetch_assoc()) 
		{
		$image_url='img/gallery/'.$row['fa_type'].'/'.$row['fa_img'];
		$check_gamefowl="select * from _farm_animals, _gamefowls where _gamefowls.gamefowl_ID=_farm_animals.gamefowl_ID and _farm_animals.gamefowl_ID=".$row['gamefowl_ID'];
		$check_tree="select * from _farm_animals, _trees where _trees.tree_id=_farm_animals.tree_id and _farm_animals.tree_id=".$row['tree_id'];
		$result_gamefowl = $conn->query($check_gamefowl);
		$result_tree = $conn->query($check_tree);
		if($result_gamefowl->num_rows > 0) // check gamefowl
		{  
			$row_desc = $result_gamefowl->fetch_assoc();
			$title=ucfirst($row_desc['fa_type']).' - '.ucfirst($row_desc['gamefowl_breed']);
		}
		if($result_tree->num_rows > 0) // check tree
		{  
			$row_desc = $result_tree->fetch_assoc();
			$title=ucfirst($row_desc['fa_type']).' - '.ucfirst($row_desc['tree_breed']);
		}
		if($row['fa_type']=='goat')
		{
			$title=ucfirst($row['fa_type']);
		}
?>	
<li class="item-thumbs col-lg-3 design" data-id="id-0">
    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="<?php echo $title; ?>" href="<?php echo $image_url; ?>"></a>
    <img src="<?php echo $image_url; ?>" title="<?php echo $title; ?>" alt="">
</li>
<?php } ?>

<div class="clearfix"></div>
<div class="gallery_pagination clearfix">
	<ul class='pagination pagination-sm'>
		<?php 
		if (isset($_GET['src'])) 
		{ $ext_url = "?src=".$_GET['src']."&"; }
		else 
		{ $ext_url = "?"; }
		
		if($numrows>0)
		{	
			echo "<li><a>Total: $numrows</a></li>";	// pagination link starts
			if ($si > 1) {	// if not on page 1, don't show back links
			echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."> First </a></li>"; // show << link to go back to page 1
			$prevpage = $si - 1; // get previous page num
			echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."si=".$prevpage."> Previous </a></li>"; // show < link to go back to 1 page
			} 
			for ($x = ($si - $range); $x < (($si + $range) + 1); $x++) { // loop to show links to admin_range of pages around current page
			   if (($x > 0) && ($x <= $totalpages)) { // if it's a valid page number...
				  if ($x == $si) { // if we're on current page...
					 echo "<li class='active'><a> <b>$x</b> </a></li>"; // 'highlight' it but don't make a link
				  } else { // if not current page...
					 echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."si=".$x."> $x </a></li>";  // make it a link
				  } 
			   } 
			} 
			if ($si != $totalpages) { // if not on last page, show forward and last page links   
			   $nextpage = $si + 1; // get next page
			   echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."si=".$nextpage."> Next </a></li>"; // echo forward link for next page
			   echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."si=".$totalpages."> Last </a></li>"; // echo forward link for lastpage
			}
		}
		?>
	</ul>
    <div class="fb-container clearfix">
    	<div class="fb-comments" data-href="http://www.eticsefarm.com/gallery.php" data-width="100%" data-numposts="10"></div>
    </div>
</div>

