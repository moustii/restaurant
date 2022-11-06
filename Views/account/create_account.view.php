<div class="py-5 text-center">
    <img class="img-fluid rounded d-block mx-auto mb-4" src="<?=URL?>public/img/logo.png" alt="logo" width="72" height="57">
    <h2>Créer votre compte</h2>
</div>

<div class="row justify-content-center g-5 pb-3 mb-5 bg-light">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Vos informations</h4>
        <form class="">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="fname" class="form-label">Prenom <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="fname" id="fname" required>
                </div>

                <div class="col-sm-6">
                    <label for="lname" class="form-label">Nom <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="lname" id="lname" required>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Adresse <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="2 rue de la joie" required>
                </div>

                <div class="col-12">
                    <label for="code" class="form-label">Code postal <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="code" id="code" placeholder="Code postal" required>
                </div>

                <div class="col-md-5">
                    <label for="city" class="form-label">Ville <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Ville" required>
                </div>

                <div class="col-md-5">
                    <label for="phone" class="form-label">N°Téléphone <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone" required>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Mot de passe <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Valider</button>
        </form>
    </div>
</div>

