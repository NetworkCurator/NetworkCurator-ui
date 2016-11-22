<?php
/**
 * Footer at the bottom of each page
 */
?>

<?php // the next </div> closes the "container" div from nc-header.php ?>
</div>


<?php
// generic modal on every page that can be used to communicate error messages
?>
<div class="modal fade " id="nc-msg-modal" role="dialog">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-md vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="nc-msg-header" class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p id="nc-msg-body"></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal">OK</button>                
                </div>
            </div>
        </div>
    </div>
</div>


<?php
// generic modal on every page that can be used to communicate error messages
?>
<div class="modal fade " id="nc-danger-modal" role="dialog">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog modal-md vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 id="nc-danger-header" class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p id="nc-danger-body"></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal" val="nc-ok">OK</button>                
                    <button class="btn btn-success" data-dismiss="modal" val="nc-cancel">Cancel</button>                
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="footer nc-footer">
    <div class="container">                        
        <div class="navbar-text col-sm-8">
            <span class="nc-first"><a href="?page=about">About</a></span>
            <span class="nc-quiet">This site uses cookies. See more information about <a href="?page=privacy">privacy</a></span>
        </div>        
        <div class="navbar-text col-sm-3 pull-right">
            <span class="nc-first nc-quiet pull-right">Powered by <a href="https://networkcurator.github.io">NetworkCurator</a></span>
        </div>
    </div>
</footer>


<?php // the next </div> closes the "page" div from nc-header.php, then standard html ?>
</div>

</body>
</html>