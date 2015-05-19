<?php if (!isset($TINY_FW)) exit('Access Denied'); ?>
<div class="page error-page">
    <div class="container">
        <div class="row">
            <!-- main -->
            <div class="col-md-12">
                <h2 class="error-code">403</h2>
                <p class="error-description">
                    <b>Forbidden</b><br>
                    The page you are looking for is forbidden.<br><br>
                    <a href="<?php echo $BASE_URL; ?>">Go back to home</a>
                </p>
            </div>
            <!-- /main -->
        </div>
    </div>
</div>
<!-- /page -->