<div class="alert alert-dismissible alert-success px-2 py-3 mt-3 d-none" id="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Commande Validée !</strong>
</div>

<div class="p-4 mt-4 bg-light rounded">
    <h1>Commande</h1>

    <div class="row mt-5">
        <div class="col-md-7 col-lg-7">
            <form>
                <label for='product'>Menu</label>
                <select class="form-select w-50" name='product' id='product' class="rounded">
                    <?php foreach($meals as $meal): ?>
                        <option value=<?= $meal->meal_id ?>> <?= $meal->meal_name ?> </option>
                    <?php endforeach; ?>
                </select>

                <div class="mt-4" id='productDetails'>
                    <img src='' class="img-fluid rounded w-50" alt=''>
                    <p class="mt-3 text-white w-50"></p>
                    <span class="fs-3 text-white"></span>
                </div>

                <label for='quantity'></label>
                <input type='number' name='quantity' id='quantity' value="1" min='1' max="15" class="form-control form-control-sm w-25" placeholder="quantité" required autofocus>
                <hr class="mb-4">
                <input type='button' name='add' id='add' value='ajouter' class="form-control form-control-sm btn btn-sm btn-primary w-25">
            </form>
        </div>

        <div class="col-md-5 col-lg-5">
            <form id='formValidPanier'>
                <table class="table table-dark gy-5 text-white" id='panier'>
                        
                </table>
                <input type='button' class='btn btn-success' name='validate' id='validate' value='valider la commande' hidden>
            </form>
        </div>

    </div>

</div>