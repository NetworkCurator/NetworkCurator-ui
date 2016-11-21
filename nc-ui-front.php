<?php
/**
 * Main/Front page
 * 
 */
// load a jumbotron at the top
$jumbofile = "nc-ui/ui-components/ui-front-jumbo-local.php";
if (!file_exists($jumbofile)) {
    $jumbofile = "nc-ui/ui-components/ui-front-jumbo.php";
}
include_once $jumbofile;


// get info on existing and viewable networks
// display each using the code in ui-network-card            
$mynetworks = $NCapi->listNetworks();
//print_r($mynetworks);
// get a set of elements that need markdown treatment
$md = [];
?>


<div class="container">
    <div class="row">   
        <div class="col-sm-8">            
            <?php
            for ($x = 0; $x < count($mynetworks); $x++) {
                $netid = $mynetworks[$x]['id'];
                $netname = $mynetworks[$x]['name'];
                $nettitle = $mynetworks[$x]['title'];
                $nettitleid = $mynetworks[$x]['title_id'];
                $netabstract = $mynetworks[$x]['abstract'];
                $netabstractid = $mynetworks[$x]['abstract_id'];
                include "ui-components/ui-network-card.php";
                $md[$netabstractid] = $netabstract;
                $md[$nettitleid] = $nettitle;
            }
            ?>

        </div>
    </div>
</div>



<?php
echo ncScriptObject("nc.md", $md);
?>


