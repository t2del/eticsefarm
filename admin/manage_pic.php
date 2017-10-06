<?php
	$rowsperpage = 9;	// number of rows to show per page admin-pagination
	$range = 4; 		// range of num links to show admin-pagination
	$qry_manage = "SELECT * FROM _farm_animals order by fa_type asc, gamefowl_ID asc, tree_ID asc";
	$qry_count = "Select Count(*) from _farm_animals";
	
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
	$sql2 = $qry_manage." LIMIT $offset, $rowsperpage"; 
	$result = $conn->query($sql2);
?>

	<div class="clearfix"></div>
    <div class="boxify_noshadow text_center">
        <strong>Manage Photos:</strong><?php include('pagination.php'); ?><hr>
        <ul id="thumbs" class="portfolio clearfix">
        	<?php
        	while($row = $result->fetch_assoc()) {
			$check_gamefowl="select * from _farm_animals, _gamefowls where _gamefowls.gamefowl_ID=_farm_animals.gamefowl_ID and _farm_animals.gamefowl_ID=".$row['gamefowl_ID'];
			$check_tree="select * from _farm_animals, _trees where _trees.tree_id=_farm_animals.tree_id and _farm_animals.tree_id=".$row['tree_id'];
			$result_gamefowl = $conn->query($check_gamefowl);
			$result_tree = $conn->query($check_tree);
			if($result_gamefowl->num_rows > 0)
			{  
				$row_desc = $result_gamefowl->fetch_assoc();
				$manage_pic_desc=ucfirst($row_desc['fa_type']).' - '.ucfirst($row_desc['gamefowl_breed']);
			}
			if($result_tree->num_rows > 0)
			{  
				$row_desc = $result_tree->fetch_assoc();
				$manage_pic_desc=ucfirst($row_desc['fa_type']).' - '.ucfirst($row_desc['tree_breed']);
			}
			if($row['fa_type']=='goat')
			{
				$manage_pic_desc=ucfirst($row['fa_type']);
			}
			?>
			<li class="item-thumbs col-md-4 design " data-id="id-0">
					<a class="hover-wrap fancybox" title="<?php echo $manage_pic_desc; ?>" href="<?php echo 'img/gallery/'.$row['fa_type'].'/'.$row['fa_img']; ?>"></a>
					<img src="<?php echo 'img/gallery/'.$row['fa_type'].'/'.$row['fa_img']; ?>" title="<?php echo $manage_pic_desc; ?>" alt=""><br />
                    <?php echo $manage_pic_desc; ?>
					<div class="clearfix"></div>

					<ul class='pagination pagination-sm'> 
						<li>
							<a href="<?php echo $_SERVER['REQUEST_URI']; ?>&delete_fa_id=<?php echo $row['fa_id']; ?>&amp;imgurl=<?php echo 'img/gallery/'.$row['fa_type'].'/'.$row['fa_img']; ?>" onclick="return confirm('Confirm delete?')">Delete</a>
						</li>
					</ul>
			</li>
			<?php } ?>
        </ul>
        <div class="clearfix"></div>
    </div>