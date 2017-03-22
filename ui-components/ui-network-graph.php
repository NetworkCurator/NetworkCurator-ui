<?php
/*
 * Page with network graph
 * 
 */
?>

<?php include_once "ui-browser-warning.php"; ?>
<div class="row">
    <div id="nc-graph-toolbar" class="col-sm-12"></div>
</div>
<div class="row">
    <div id="nc-graph-svg-container" class="col-sm-8">                       
        <svg id="nc-graph-svg"></svg>        
    </div>
    <div id="nc-graph-side" class="col-sm-4">        
        <?php include_once "ui-network-graph-element.php"; ?>
    </div>
</div>
