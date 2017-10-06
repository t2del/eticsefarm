<div class="col-lg-9">
	<?php
		$qry_left ="SELECT * FROM _videos order by video_id asc";
		$vid_left = $conn->query($qry_left);
		while($row_left = $vid_left->fetch_assoc())
		{
	?>
            <div class="col-sm-6">
				<div class="boxify_noshadow vid_box">
                	<a href="admin/process_video.php?video_process=del_video&vid_id=<?php echo $row_left['video_id']; ?>" class="del" title="Delete">X</a>
                    <input type="text" name="vid_title" id="vid_title" placeholder="Video title" value="<?php echo $row_left['video_title']; ?>" />
                    <textarea name="video_source" rows="4" id="video_source" placeholder="Embed Youtube code here."><?php echo $row_left['video_code']; ?></textarea>
					<button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="5"  class="btn btn-theme">Edit</button>
				</div>
            </div>    
            <?php } ?>
</div>