<?php
use App\Controllers\AccountController;
?>

<div class=" py-5 my-5">
    <?php if(AccountController::isConnected()):?>
    <div class="text-center mb-5">
        <span class="badge rounded-pill bg-light fs-6">Bon retour <?= strtoupper($_SESSION['user']['fname'])?></span>
    </div>
    <?php endif;?>
    <div class="row text-center">
        <div class="col-12 col-md-6">
            <a href="<?=URL?>actions/order"><img src="<?=URL?>public/img/order.jpg" class="img-fluid rounded me-2 w-50" alt="image commande"></a>
            <p class="fs-4 text-white">Commander</p>
        </div>
        <div class="col-12 col-md-6">
            <a href="<?=URL?>actions/booking"><img src="<?=URL?>public/img/booking.jpg" class="img-fluid rounded w-50" alt="image reservation"></a>
            <p class="fs-4 text-white">Réserver</p>
        </div>



    </div>
    
</div>