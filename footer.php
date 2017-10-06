<?php
$qry_gamefowl = "SELECT * FROM _gamefowls order by gamefowl_breed asc";
$qry_farm = "SELECT * FROM _trees order by tree_breed asc";
$result_farm = $conn->query($qry_farm);
$result_gamefowl = $conn->query($qry_gamefowl);
?>
<div class="container">
		<div class="col-lg-3">
				<div class="widget clearfix">
                
					<h4 class="widgetheading">Gallery</h4>
					<dl>
					<dt><a href="gallery?src=gamefowl">Gamefowl</a></dt>
                    <dd>
                    	<?php 
							while($row_gamefowl = $result_gamefowl->fetch_assoc()) 
							{ 
								echo "<a href='gallery.php?src=gamefowl&product=".$row_gamefowl['gamefowl_ID']."'>".$row_gamefowl['gamefowl_breed']."</a>";
							} 
						?>
					</dd>
					<dt><a href="gallery?src=farm">Farm</a></dt>
					<dd>
                    	<?php 
								while($row_farm = $result_farm->fetch_assoc()) 
								{ 
									echo "<a href='gallery.php?src=farm&product=".$row_farm['tree_id']."'>".nl2br(ucfirst($row_farm['tree_breed']))."</a>";
								} 
						?>
                    </dd>
					<dd></dd>
					<dt><a href="gallery?src=goat">Goat</a></dt>
					<dd></dd>
				</dl>
				</div>
			</div>
        
    	<div class="col-lg-3">
				<div class="widget">
					<h4 class="widgetheading">Get in touch with us</h4>
					<address>
                    	<?php nl2br(information_details($qry_info. " where info_section='address'")); ?>
                    </address>
					<p><?php information_details($qry_info. " where info_section='contact'"); ?></p>
                    <p><?php information_details($qry_info. " where info_section='email'"); ?></p>
				</div>
		</div>
		<div class="col-lg-6">
			<div class="map">
               	<?php information_details($qry_info. " where info_section='map'"); ?>
       		</div>
		</div>
			
	
<div id="sub-footer">
		<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; E TICSE FARM & GAMEFOWL <?php echo date("Y");?>, All right reserved. By </span><a href="https://t2del.com/catch.php?source=eticsefarm.com" target="_blank">t2del.com</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/eticsefarm/" data-placement="top" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="/admin-panel.php">*</a></li>
					</ul>
				</div>
		</div>
	</div>
</div>               