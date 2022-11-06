<div class="form-signin w-100 mx-auto mb-5">
    <form action="<?=URL?>check_connexion" method="POST">
        <img class="d-block mx-auto my-4 rounded" src="<?=URL?>public/img/logo.png" alt="logo" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal"></h1>

        <div class="form-floating">
            <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="name@example.com" autofocus>
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-2">
            <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
            <label for="password">Mot de passe</label>
        </div>

        <button class="w-100 btn btn-md btn-primary" type="submit">Se connecter</button>
    </form>
    <div class="d-flex flex-column align-items-end mt-2">
        <a class="text-white btn disabled m-2" href="">mot de passe oublié</a>
        <a class="text-white m-2" href="<?=URL?>create_account">créer un compte</a>
    </div>
</div>

