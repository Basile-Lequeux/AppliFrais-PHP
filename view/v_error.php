<div class="alert alert-danger" role="alert">
    <?php
    foreach ($_REQUEST['error'] as $error) 
    { ?>
        <p><?php echo($error) ?></p>

    <?php}?>
    
</div>