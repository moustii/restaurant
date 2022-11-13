<div class="alert alert-dismissible alert-<?=(isset($color)? $color:'')?> px-2 py-3 mt-3 d-none" id="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong><?=$alert?></strong>
</div>

<div class="p-4 mt-4 bg-light rounded">
    <h1>Réservation</h1>

    <form action="<?=URL?>actions/booking/booked" method="post">
        <input class="form-control form-control-md w-25 bg-dark" type="date" name="date" value="<?= date('Y-m-d') ?>">
                <select class="form-select form-select-sm my-3 w-25 pe-0 d-inline-block" name="hour" id="hour">
                    <option value="12">12 h</option>
                    <option value="13">13 h</option>
                    <option value="14">14 h</option>
                    <option value="18">18 h</option>
                    <option value="19">19 h</option>
                    <option value="20">20 h</option>
                    <option value="21">21 h</option>
                </select> 

                <select class="form-select form-select-sm my-3 w-25 d-inline-block" name="minutes" id="minutes">
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                </select> 
                <input class="d-block form-control form-control-sm w-25" type="number" name="guests" id="guests" min="1" max="4" value="1" placeholder="number of guests" required>
  
        <button type="submit" class="btn btn-primary mt-3">Réserver</button>
    </form>

</div>