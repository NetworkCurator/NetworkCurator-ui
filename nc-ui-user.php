<?php
/*
 * Page for user account maintenance
 * 
 */

// This page should only be visible to the admin user
if ($uid == "guest") {    
    include_once ncGetLocalFile("ui-components/ui-user-guest.php");
    return;    
}

include_once ncGetLocalFile("ui-components/ui-user-info.php");

?>    


