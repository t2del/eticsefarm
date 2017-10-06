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
	$qry_breed = "SELECT * FROM _trees order by tree_breed asc";
 ?>
<div class="clearfix ">
    <form action="admin/processuploadfarm.php" method="post" name="upload"  enctype="multipart/form-data">
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
                        <option value="<?php echo $row['tree_id']; ?>"><?php echo ucfirst($row['tree_breed']); ?></option>
                     <?php } ?>
                    </select>
            <input name="pic1"  type="file" id="pic1" >
        </div>
        <hr />
        <div>Breed: 
                    <select name="breed2" >
                    <?php 
						$result = $conn->query($qry_breed);
							while($row = $result->fetch_assoc()) 
							{
					?>
                        <option value="<?php echo $row['tree_id']; ?>"><?php echo ucfirst($row['tree_breed']); ?></option>
                     <?php } ?>
                    </select>
        <input name="pic2"  type="file" id="pic2" >
        </div>
        <hr />
        <div>Breed: 
                    <select name="breed3" >
                    <?php 
						$result = $conn->query($qry_breed);
							while($row = $result->fetch_assoc()) 
							{
					?>
                        <option value="<?php echo $row['tree_id']; ?>"><?php echo ucfirst($row['tree_breed']); ?></option>
                     <?php } ?>
                    </select> 
        <input name="pic3"  type="file" id="pic3" >
        </div>
        <hr />
        <div>Breed: 
                    <select name="breed4" >
                    <?php 
						$result = $conn->query($qry_breed);
							while($row = $result->fetch_assoc()) 
							{
					?>
                        <option value="<?php echo $row['tree_id']; ?>"><?php echo ucfirst($row['tree_breed']); ?></option>
                     <?php } ?>
                    </select>
        <input name="pic4"  type="file" id="pic4" >
        </div>
        <hr />
        <div>Breed: 
                    <select name="breed5" >
                    <?php 
						$result = $conn->query($qry_breed);
							while($row = $result->fetch_assoc()) 
							{
					?>
                        <option value="<?php echo $row['tree_id']; ?>"><?php echo ucfirst($row['tree_breed']); ?></option>
                     <?php } ?>
                    </select> 
        <input name="pic5"  type="file" id="pic5" >
        </div>
        <hr />
        <input type="submit" name="submit" id="submit" value="Upload" class="btn-theme">
        <div class="msg"><?php echo $msg; ?></div>
    </form>
</div>