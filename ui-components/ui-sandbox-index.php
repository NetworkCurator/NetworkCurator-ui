<?php
/*
 * Display a list of sandbox pages, or go directly to a particular one.
 * 
 */

// is the request for a particular sandbox?
if ($sandbox != "index" && $sandbox != '') {
    $sandfile = "nc-ui/ui-components/ui-sandbox-generic.php";
    if (file_exists($sandfile)) {
        include_once $sandfile;
        exit();
    }
}
?>

<div class="row">
    <div class="col-sm-12 col-md-10 col-lg-8">
        <h1>Sandboxes</h1>

        <p>Sandboxes are areas to experiment with creating content.</p>


        <h2>Markdown</h2>

        <p>Markdown is a markup language. Use it on the network pages to 
            convert plain text into styled html.</p>

        <div class="thumbnail nc-thumbnail">
            <a href="?page=sandbox&sandbox=markdown">
                <h5>markdown</h5>
                <p>Practice using markdown to format descriptions and comments.</p>
            </a>            
        </div>                

        
        <h2>Generic makealive components</h2>

        <p><a href="https://tkonopka.github.io/makealive/lib/">Makealive</a> is an extension of markdown. Use it to create rich content, for example
            data charts.</p>                

        <p>Each of the sandbox pages below contains a form. Input your data into the form and 
            the page will generate makealive code along a visual representation. 
            Use the code within any content box (e.g. abstract or comment) on the NetworkCurator site.</p>

        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail">      
                    <a href="?page=sandbox&sandbox=barplot01">
                        <h5>barplot01</h5>
                        <p>Vertical bar plot.</p>                    
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"> 
                    <a href="?page=sandbox&sandbox=barplot02">
                        <h5>barplot02</h5>
                        <p>Horizontal bar plot.</p>                    
                    </a>
                </div>
            </div>    
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"> 
                    <a href="?page=sandbox&sandbox=plate12">
                        <h5>plate12</h5>
                        <p>12-well plate.</p>                    
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"> 
                    <a href="?page=sandbox&sandbox=plate24">
                        <h5>plate24</h5>
                        <p>24-well plate.</p>                    
                    </a>
                </div>
            </div>   
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"> 
                    <a href="?page=sandbox&sandbox=plate96">
                        <h5>plate96</h5>
                        <p>96-well plate.</p>                    
                    </a>
                </div>
            </div>   
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"">       
                    <a href="?page=sandbox&sandbox=scatterplot01">
                        <h5>scatterplot01</h5>
                        <p>Scatter plot.</p>
                    </a>
                </div>
            </div>            
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"">       
                    <a href="?page=sandbox&sandbox=stackedbarplot01">
                        <h5>stackedbarplot01</h5>
                        <p>Vertical stacked plot.</p>
                    </a>           
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"">       
                    <a href="?page=sandbox&sandbox=stackedbarplot02">
                        <h5>stackedbarplot02</h5>
                        <p>Horizontal stacked plot.</p>
                    </a>           
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"">       
                    <a href="?page=sandbox&sandbox=stripchart01">
                        <h5>stripchart01</h5>
                        <p>Vertical strip chart.</p>
                    </a>           
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"">       
                    <a href="?page=sandbox&sandbox=stripchart02">
                        <h5>stripchart02</h5>
                        <p>Horizontal strip chart.</p>
                    </a>           
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"">       
                    <a href="?page=sandbox&sandbox=venn01">
                        <h5>venn01</h5>
                        <p>Venn diagram.</p>
                    </a>           
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail nc-thumbnail"">       
                    <a href="?page=sandbox&sandbox=venn02">
                        <h5>venn02</h5>
                        <p >Venn with a custom set.</p>
                    </a>           
                </div>
            </div>
        </div>      



        <h2>Network-specific makealive components</h2>

        <p>Use network-specific makealive components to display custom information
            about the network.</p>                

        <div class="row">
            <div class="col-sm-6">
                <div class="thumbnail nc-thumbnail"">       
                    <a href="?page=sandbox&sandbox=nodeneighbors">
                        <h5>nodeneighbors</h5>
                        <p >Create a venn diagram to compare node neighbor sets.</p>
                    </a>           
                </div>
            </div>
        </div>


        <h2>Networks</h2>

        <p>NetworkCurator can create networks through the graph page or from data files. 
            Use this sandbox to create compatible data files from spreadsheet tables.</p>

        <div class="thumbnail nc-thumbnail">
            <a href="?page=sandbox&sandbox=preparenetwork">        
                <h5 class="list-group-item-heading">Network prep</h5>
                <p class="list-group-item-text">Prepare a minimal network definition from lists of nodes and links.</p>
            </a>            
        </div>


    </div>
</div>
