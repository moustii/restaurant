<div class="py-5 text-center">
    <img class="img-fluid rounded d-block mx-auto mb-4" src="<?=URL?>public/img/logo.png" alt="logo" width="72" height="57">
    <h2>Créer votre compte</h2>
</div>

<div class="row justify-content-center g-5 pb-3 mb-5 bg-light">
    <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Vos informations</h4>
        <form action="<?=URL?>check_account" method="POST">
            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="fname" class="form-label">Prenom <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="fname" id="fname" minlength="3" maxlength="20" required>
                </div>

                <div class="col-sm-6">
                    <label for="lname" class="form-label">Nom <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="lname" id="lname" minlength="3" maxlength="20" required>
                </div>

                <div class="col-12">
                    <label for="address" class="form-label">Adresse <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="address" id="address" minlength="5" maxlength="50" placeholder="2 rue de la joie" required>
                </div>

                <div class="col-12">
                    <label for="code" class="form-label">Code postal <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="code" id="code" minlength="5" maxlength="5" pattern="[0-9]{5}" placeholder="Code postal" required>
                </div>

                <div class="col-md-5">
                    <label for="city" class="form-label">Ville <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="text" class="form-control" name="city" id="city" minlength="3" maxlength="50" placeholder="Ville" required>
                </div>

                <div class="col-md-5">
                    <label for="phone" class="form-label">N°Téléphone <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="tel" class="form-control" name="phone" id="phone" pattern="[0-9]{10}" placeholder="Numéro de téléphone" required>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="email" class="form-control" name="email" id="email" 
                        pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._-]+\.[a-zA-Z]{2,4}$" placeholder="you@example.com" required>
                </div>

                <div class="col-12">
                    <label for="password" class="form-label">Mot de passe <span class="text-muted">(*Obligatoire)</span></label>
                    <input type="password" class="form-control" minlength="7" maxlength="30" name="password" id="password" required>
                </div>
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-primary btn-lg" type="submit">Valider</button>
        </form>
    </div>
</div>

