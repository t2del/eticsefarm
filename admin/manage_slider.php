<?php
	$rowsperpage = 9;	// number of rows to show per page admin-pagination
	$range = 4; 		// range of num links to show admin-pagination
	$qry_manage = "SELECT * FROM index_slider order by slider_id desc";
	$qry_count = "Select Count(*) from index_slider";
	
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
			?>
			<li class="item-thumbs col-md-4 design " data-id="id-0">
					<a class="hover-wrap fancybox" title="<?php echo $row['description']; ?>" href="<?php echo 'img/slides/'.$row['imgurl']; ?>"></a>
					<img src="<?php echo 'img/slides/'.$row['imgurl']; ?>" title="<?php echo $row['description']; ?>" alt=""><br />
                    <?php echo $row['description']; ?>
					<div class="clearfix"></div>
					<ul class='pagination pagination-sm'> 
						<li>
							<a href="<?php echo $_SERVER['REQUEST_URI']; ?>&slider_id=<?php echo $row['slider_id']; ?>&imgurl=<?php echo 'img/slides/'.$row['imgurl']; ?>" onclick="return confirm('Confirm delete?')">Delete</a>
						</li>
					</ul>
			</li>
			<?php } ?>
        </ul>
        <div class="clearfix"></div>
    </div>