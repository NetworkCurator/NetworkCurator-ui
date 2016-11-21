<?php
/*
 * Links and widgets for site administration
 * (Should be loaded only for the admin user)
 */

if ($uid !== "admin") {
    return;
}
?>


<!--<div class="row nc-mt-20">  -->  
<div class="col-sm-6 pull-right"> 
    <h1>Site Administration</h1>
    <div class='btn-toolbar nc-mt-20'>
        <a class='btn btn-primary' role='button' href='?page=admin&new=network'>Create New Network</a>
        <a class='btn btn-primary' role='button' href='?page=admin&new=user'>Create New User</a>
    </div>
</div>
<!--</div>
</div>-->
