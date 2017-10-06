
    <ul class="portfolio-categ filter clearfix">
            <?php // nav selection for gamefowl
                if(isset($_GET['src'])) {
                    if($_GET['src']=='gamefowl') { $qry_breed = "SELECT * FROM _gamefowls order by gamefowl_breed asc";
                        $result = $conn->query($qry_breed);
                        while($row = $result->fetch_assoc()) 
                        {
            ?>
                        <li><a <?php if(isset($_GET['product'])) { if($_GET['product']==$row['gamefowl_ID']) { echo 'style="color:#68A4C4;"'; }} ?> href="?src=gamefowl&product=<?php echo $row['gamefowl_ID']; ?>"><?php echo $row['gamefowl_breed']; ?></a></li>
            <?php 		} 
                    }
                }	
            ?> 
            <?php // nav selection for farm/trees
                if(isset($_GET['src'])) {
                    if($_GET['src']=='farm') { $qry_tree = "SELECT * FROM _trees order by tree_breed asc";
                        $result = $conn->query($qry_tree);
                        while($row = $result->fetch_assoc()) 
                        {
            ?>
                        <li><a <?php if(isset($_GET['product'])) { if($_GET['product']==$row['tree_id']) { echo 'style="color:#68A4C4;"'; }} ?> href="?src=farm&product=<?php echo $row['tree_id']; ?>"><?php echo ucfirst($row['tree_breed']); ?></a></li>
            <?php 		}
                    }
                }	
            ?>
    </ul>
<hr class="clearfix"> 