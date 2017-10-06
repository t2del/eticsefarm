<?php
$basefile=basename($_SERVER['PHP_SELF'], ".php");
?>

<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.eticsefarm.com/">E.Ticse Farm & Gamefowl</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li <?php if($basefile=='index') { echo 'class="active"'; } ?>><a href="./">Home</a></li>
                        <li <?php if($basefile=='about') { echo 'class="active"'; } ?>><a href="about">About</a></li>
                        <li <?php if($basefile=='gallery') { echo 'class="active"'; } ?>><a href="gallery.php">Gallery</a></li>
                        <li <?php if($basefile=='product') { echo 'class="active"'; } ?>><a href="video">Videos</a></li>
                        <li <?php if($basefile=='contact') { echo 'class="active"'; } ?>><a href="contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
</header>