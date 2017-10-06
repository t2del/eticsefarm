<?php
	if(isset($_GET['v']))
	{
		if($_GET['v']==0)
		{ $msg="Error uploading!"; }
		else
		{ $msg="Sucess!"; }	
	}
	else
	{ $msg=""; }
	$qry_breed = "SELECT * FROM _gamefowls order by gamefowl_breed asc";
 ?>
<div class="clearfix ">
    <form action="admin/processuploadgamefowl.php" method="post" name="upload"  enctype="multipart/form-data">
    	<?php
        	$prev_link=basename($_SERVER['REQUEST_URI']);
		?>
    	<input type="hidden" name="prev_link" id="prev_link" value="<?php echo $prev_link; ?>" />
        <div>Breed: 
                    <select name="breed1" >
                    <?php 
						$result = $conn->query($qry_breed);
							while($row = $result->fetch_assoc()) 
							{
					?>
                        <option value="<?php echo $row['gamefowl_ID']; ?>"><?php echo $row['gamefowl_breed']; ?></option>
                     <?php } ?>
                    </select>
            <input name="tag1"  type="text" id="tag1"  placeholder="Tag #"> 
            <input name="pic1"  type="file" id="pic1" >
        </div><hr />
        <div>Breed: 
                    <select name="breed2" >
                    <?php 
						$result = $conn->query($qry_breed);
							while($row = $result->fetch_assoc()) 
							{
					?>
                        <option value="<?php echo $row['gamefowl_ID']; ?>"><?php echo $row['gamefowl_breed']; ?></option>
                     <?php } ?>
                    </select>
        <input name="tag2"  type="text" id="tag2"  placeholder="Tag #"> 
        <input name="pic2"  type="file" id="pic2" >
        </div><hr />
        <div>Breed: 
                    <select name="breed3" >
                    <?php 
						$result = $conn->query($qry_breed);
							while($row = $result->fetch_assoc()) 
							{
					?>
                        <option value="<?php echo $row['gamefowl_ID']; ?>"><?php echo $row['gamefowl_breed']; ?></option>
                     <?php } ?>
                    </select> 
        <input name="tag3"  type="text" id="tag3" placeholder="Tag #"> 
        <input name="pic3"  type="file" id="pic3" >
        </div><hr />
        <div>Breed: 
                    <select name="breed4" >
                    <?php 
						$result = $conn->query($qry_breed);
							while($row = $result->fetch_assoc()) 
							{
					?>
                        <option value="<?php echo $row['gamefowl_ID']; ?>"><?php echo $row['gamefowl_breed']; ?></option>
                     <?php } ?>
                    </select>
        <input name="tag4"  type="text" id="tag4"  placeholder="Tag #"> 
        <input name="pic4"  type="file" id="pic4" >
        </div><hr />
        <div>Breed: 
                    <select name="breed5" >
                    <?php 
						$result = $conn->query($qry_breed);
							while($row = $result->fetch_assoc()) 
							{
					?>
                        <option value="<?php echo $row['gamefowl_ID']; ?>"><?php echo $row['gamefowl_breed']; ?></option>
                     <?php } ?>
                    </select> 
        <input name="tag5"  type="text" id="tag5"  placeholder="Tag #"> 
        <input name="pic5"  type="file" id="pic5" >
        </div><hr />
        <input type="submit" name="submit" id="submit" value="Upload" class="btn-theme">
        <div class="msg"><?php echo $msg; ?></div>
    </form>
</div>