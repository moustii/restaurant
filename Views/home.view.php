<h1 class="text-center my-4 text-white fw-bold">FullSnack</h1>

<div>
    <img src="<?=URL?>public/img/restaurant.jpg" class="img-fluid rounded d-block mx-auto w-100 border border-5" alt="image du restaurant">
</div>    

<section class="mt-5" id="presentation">
    <h2 class="mb-5 text-center font-weight-bold">Presentation</h2>
    <p class="fs-5 text-center fst-italic text-white">
        FullSnack est une enseigne de restauration qui verra le jour dans un futur proche.
        Nous nous activons aux fourneaux pour vous fournir des repas savoureux avec des ingrédients frais et de qualités.
        Vous découvrirez une authentique saveure et de multiples recettes qui ont été transmises de générations en générations.
        Ensemble faisont de ce lieu un endroit simple, sympas et agréable :)
    </p>
</section>

<section class="mt-5" id="menu">
    <h2 class="text-center mb-5">Au menu</h2>
    <div class="row mb-2">
        <?php foreach ($meals as $meal): ?>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-5 shadow-sm h-md-250 position-relative">
                <div class="col-auto col-lg-6 d-inline-block">
                    <img class="rounded img-fluid" src="<?=URL?>public/img/<?=$meal->meal_picture?>" alt="<?=$meal->meal_name?>">
                </div>
                <div class="col col-lg-6 p-4 d-flex flex-column position-static">
                    <h3 class="mb-1 fs-6 fw-bold"><?=$meal->meal_name?></h3>
                    <p class="card-text mb-3 mb-md-3"><?=$meal->meal_description?></p>
                    <p class="text-center text-white fw-bold"><?=$meal->meal_price?> €</p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</section>