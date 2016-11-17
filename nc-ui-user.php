<?php
/*
 * Page for user account maintenance
 * 
 */

// This page should only be visible to the admin user
if ($uid == "guest") {    
    return;    
}

include_once "ui-components/ui-user-info.php";

?>    


