<?php

/*
 * Page showing version history for one annotation  
 *  
 * Assumes $network is set, also that $_REQUEST['history'] contains the object id
 * 
 */


// identify object type
$objid = $_REQUEST['history'];

// fetch summary
$history = $NCapi->getHistory($network, $_REQUEST['history']);
//print_r($history);

// transfer the annotation text into $netmd - will be converted to html in browser
//foreach (["title", "content", "abstract"] as $i) {
//    $netmd[$summary[$i]['anno_id']] = $summary[$i]['anno_text'];
//}

// shorthand for node content anno id
//$contid = $summary['content']['anno_id'];
//$owner = $summary['content']['owner_id'];

echo ncScriptObject("nc.history.annoid", $objid);
?>

<div class="row">
    <div class="col-sm-12">
        <h3>Annotation: <?php echo $objid; ?></h3>
    </div>
</div>
<div class="row nc-mt-15">
    <div class="col-sm-3" id="nc-history-timeline">
        <h4>Timeline</h4>
    </div>
    <div class="col-sm-8 pull-right">        
        <h4>Content</h4>
        <div id="nc-history-text"></div>
    </div>                
</div>


