<?php
/**
 * Sandbox 
 * 
 * Helps to create mdalive code
 * 
 */
?>

<div class="row">
    <div class="container">
        <h1>Sandbox: <?php echo $sandbox; ?></h1>    
        <pre>
            <code class="makealive sandbox">
                { "sandbox": "<?php echo $sandbox; ?>" }
            </code>
        </pre>
    </div>
</div>

<?php
$mdaside = "";
include_once "ui-sandbox-md.php";
?>

