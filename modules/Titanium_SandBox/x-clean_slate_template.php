<?php 
if (!defined('MODULE_FILE')) { 
   die('You can\'t access this file directly...');
}
############################################################################################################################################################################			
# TEST CODE GOES HERE - START
############################################################################################################################################################################
    $get_open_base_dir = ini_get("open_basedir");
	if(empty($get_open_base_dir)):
    echo '<div align="center">';
	print "<div align=\"center\">ini_get 'open_basedir' Failed (Testing open_basedir access)<br /><br /></div>";
	else:
	echo ini_get("open_basedir");    
	endif;
	
	echo "$domain"." = <code>\$domain</code>";
	echo "<br><br>";
	echo "$nukeurl"."= <code>\$nukeurl</code>";

	echo '</div>';
	echo '</fieldset>';
	//CloseTable();
############################################################################################################################################################################			
# TEST CODE GOES HERE - END
############################################################################################################################################################################
?> 