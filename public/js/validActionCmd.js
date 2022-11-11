var meal;
var url = (window.location.href);
var mealQuantity;
var order;
var totalPrice;

function loadDetails() {
    // vider le contenu précédent
    url = url.replace('/actions', '');
    url = url.replace('order', '');
    url += "index.php";
    $.get(url, "page=actions/order/ajax_actions/"+$('#product').val(), showDetails);
}

function showDetails(data) {
    $('#productDetails p,span').empty();
    meal = JSON.parse(data);
    url = url.replace('index.php', '');
    $('#productDetails img').attr({src : url+ 'public/img/' + meal.meal_picture, alt : meal.meal_name});
    $('#productDetails p').append(meal.meal_description);
    $('#productDetails span').append(meal.meal_price + ' €');
    
}

function addBasket() {
    if(localStorage.getItem('order')) {
        order = JSON.parse(localStorage.getItem('order'));
    } else {
        order = [];
    }
    mealQuantity = [meal, $('#quantity').val()];

    order.push(mealQuantity);

    localStorage.setItem('order', JSON.stringify(order));
    
    displayOrder();
    $('#validate').show();
}

function displayOrder() {
    order = JSON.parse(localStorage.getItem('order'));
    $('#panier').empty();
    if(order !== null) {
        $('#panier').append('<thead><tr><th>Menu</th><th>Prix Unit</th><th>Quantité</th><th>Totale</th></tr></thead>');
        $('#panier').append('<tbody>');
        totalPrice = 0;
        for(let i = 0; i < order.length; i++) {
            totalPrice += (order[i][0].meal_price) * (order[i][1]);
            $('#panier').append(`<tr><td>${order[i][0].meal_name}</td><td>${order[i][0].meal_price} €</td><td>${order[i][1]}</td><td>${order[i][0].meal_price * order[i][1]} €</td></tr>`);
        }
        $('#panier').append('</tbody>');
        $('#panier').append(`<tfoot><tr><td>Total à payer</td><td colspan=3 class="table-active fs-4">${totalPrice} €</td></tr></tfoot>`);
        $('#validate').removeAttr('hidden');
    }
}

function validateOrder() {
    let orderToSend = JSON.stringify(order);
    url += "index.php";
    $.get(url, 'page=actions/order/ajax_actions/'+orderToSend+'/'+totalPrice, emptyOrder);
}

function emptyOrder() {
    $('#validate').hide();
    localStorage.clear();
    displayOrder();
}


$(function() {
    $('#product').on('click', loadDetails);
    $('#add').on('click', addBasket);
    $('#validate').on('click', validateOrder);
    loadDetails();
    // displayOrder();
})