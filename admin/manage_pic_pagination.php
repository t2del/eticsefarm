<div class="admin-pagination clearfix">
	<ul class='pagination pagination-sm'>
		<?php 
		if (isset($_GET['upload_src'])) 
		{ $ext_url = "?src=manage_gallery&upload_src=".$_GET['upload_src']."&"; }
		else 
		{ $ext_url = "?src=manage_gallery&"; }
		
		if($numrows>0)
		{	
			echo "<li><a>Total: $numrows</a></li>";	// pagination link starts
			if ($si > 1) {	// if not on page 1, don't show back links
			echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."#form> << </a></li>"; // show << link to go back to page 1
			$prevpage = $si - 1; // get previous page num
			echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."si=".$prevpage."#form> < </a></li>"; // show < link to go back to 1 page
			} 
			for ($x = ($si - $range); $x < (($si + $range) + 1); $x++) { // loop to show links to admin_range of pages around current page
			   if (($x > 0) && ($x <= $totalpages)) { // if it's a valid page number...
				  if ($x == $si) { // if we're on current page...
					 echo "<li class='active'><a> <b>$x</b> </a></li>"; // 'highlight' it but don't make a link
				  } else { // if not current page...
					 echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."si=".$x."#form> $x </a></li>";  // make it a link
				  } 
			   } 
			} 
			if ($si != $totalpages) { // if not on last page, show forward and last page links   
			   $nextpage = $si + 1; // get next page
			   echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."si=".$nextpage."#form> > </a></li>"; // echo forward link for next page
			   echo "<li><a href=".$_SERVER['PHP_SELF'].$ext_url."si=".$totalpages."#form> >> </a></li>"; // echo forward link for lastpage
			}
		}
		?>
	</ul>
</div>