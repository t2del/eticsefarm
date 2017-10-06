<div class="container">
	<div class="row">
        <?php
		$vid_left = $conn->query("SELECT * FROM _videos order by video_id asc");
		while( $row_left = $vid_left -> fetch_assoc() ) {
		?>
        <div class="col-sm-6">
            <div class="vid_box">
                <h4>
                    <?php echo $row_left['video_title']; ?>
                </h4>
                <?php echo $row_left['video_code']; ?>
            </div>
        </div>    
        <?php }	?>
	</div>
</div>