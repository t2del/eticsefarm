<div id="main-slider" class="flexslider">
	<ul class="slides">
    <?php
	$qry = "SELECT * FROM index_slider ORDER BY RAND()";
	$result = $conn->query($qry);
	while($slider = $result->fetch_assoc()) {
	?>        
    <li>
        <img src="img/slides/<?php echo $slider['imgurl']; ?>" alt="<?php echo $slider['description'];?>" title="<?php echo $slider['description'];?>"/>
    </li>
	<?php } ?>
</ul>
</div>