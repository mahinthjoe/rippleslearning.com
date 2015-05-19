<?php if (!isset($TINY_FW)) exit('Access Denied'); ?>
<div class="page error-page">
    <div class="container">
        <div class="row">
            <!-- main -->
            <div class="col-md-12">
                <h2 class="error-code">404</h2>
                <p class="error-description">
                    <b>Page Not Found</b><br>
                    Oops, we can't find the page you are looking for, make sure you have the correct url.<br><br>
                    <a href="<?php echo $BASE_URL; ?>">Go back to home</a>
                </p>
            </div>
            <!-- /main -->
        </div>
    </div>
</div>
<!-- /page -->