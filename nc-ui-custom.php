<?php

/*
 * This is a location that can process instance-specific page requests,
 * e.g. about pages, help pages, contact pages, etc.
 * 
 */

// sandbox pages requires an additional sandbox field
if ($page == "sandbox") {
    if (isset($_REQUEST['sandbox'])) {
        $sandbox = $_REQUEST['sandbox'];
    }
    include_once "nc-ui/ui-components/ui-sandbox-index.php";
    return;
}

// pages like "about" - these have a default setting in the ui-components
// but if a local instance has -local.php versions, the local versions are loaded instead
if ($page == "about" || $page=="privacy") {
    $customfile = "nc-ui/ui-components/ui-$page-local.php";   
    if (!file_exists($customfile)) {        
        $customfile = "nc-ui/ui-components/ui-$page.php";
    }
    include_once $customfile;
    return; 
}

// if reached here, the requested page type is not supported
include_once "nc-ui/ui-components/ui-unknown.php";
?>

