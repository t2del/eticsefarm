<div class="video_box_form">
    	<form action="admin/process_video.php?video_process=add_video" method="post" enctype="multipart/form-data">
        	<input type="text" name="video_title"  id="video_title"  placeholder="Video title">
            <textarea name="video_source" rows="4" id="video_source" placeholder="Embed Youtube code here."></textarea>
            <!--<select name="section">
            	<option value="left">Left</option>
                <option value="right">Right</option>
            </select>-->
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" tabindex="5"  class="btn btn-theme">Add</button>
        </form>
</div>