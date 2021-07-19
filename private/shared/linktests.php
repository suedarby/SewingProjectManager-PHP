<?php
//for testing links
//get one right in each folder
//this is the include
//files in each folder need to link into this to use the link system
//don't forget initialize.php on the other files
?>
<p>
Plain Links
</p>
<p>supplies</p>
<a href="<?php echo url_for('/public/supplies/embroidery.php'); ?>"><p>Embroidery</p></a>
<a href="<?php echo url_for('/public/supplies/embroidery_thread.php'); ?>"><p>Embroidery Thread</p></a>
<a href="<?php echo url_for('/public/supplies/fabric.php'); ?>"><p>Fabric</p></a>
<a href="<?php echo url_for('/public/supplies/notion.php'); ?>"><p>Notions</p></a>
<a href="<?php echo url_for('/public/supplies/pattern.php'); ?>"><p>Patterns</p></a>
<a href="<?php echo url_for('/public/supplies/tool.php'); ?>"><p>Tools</p></a>
<a href="<?php echo url_for('/public/supplies/trim.php'); ?>"><p>Trims</p></a>
<p>custom</p>
<a href="<?php echo url_for('/public/customizer/brand.php'); ?>"><p>Brand</p></a>
<a href="<?php echo url_for('/public/customizer/location.php'); ?>"><p>Location</p></a>
<a href="<?php echo url_for('/public/customizer/status.php'); ?>"><p>Status</p></a>
<a href="<?php echo url_for('/public/customizer/style.php'); ?>"><p>Style</p></a>
<a href="<?php echo url_for('/public/customizer/tag.php'); ?>"><p>Tags</p></a>
<p>reports</p>
<a href="<?php echo url_for('/public/reports/project.php'); ?>">Projects</a>
<a href="<?php echo url_for('/public/reports/shopping.php'); ?>"><p>Shopping</p></a>


