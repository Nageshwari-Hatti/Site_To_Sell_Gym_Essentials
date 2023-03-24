<?php 
require_once('./classes/Master.php');
$master = new Master();
$subs_id = $_GET['id'] ?? "";
$update= $master->verify_subscriber($subs_id);
if($update['status'] !== "success"){
    throw new ErrorException($update['error']);
    exit;
}
?>
<div class="col-lg-3 col-md-5 col-sm-12 col-12 mx-auto">
    <div class="card shadow rounded-0">
        <div class="card-body rounded-0">
            <div class="container-fluid">
                <div class="d-flex justify-content-center w-100 mb-3">
                    <img src="<?= siteURL.logo_path ?>" alt="" class="form-site-logo">
                </div>
                <h3 class="text-center mb-3"><b>Newsletter Subscription has been Verified!</b></h3>
                <div class="alert alert-success py-2 rounded-0 text-body-secondary">You are now one of our subrscibers and we will make sure that you won't miss any updates. We have sent you a sample newsletter.</div>
            </div>
        </div>
    </div>
</div>