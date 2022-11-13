var meal;
var url = (window.location.href); //http://localhost/workspace/projetPerso/restaurant/actions/order
var mealQuantity = [];
var order;
var totalPrice;

function loadDetails() {
    
    $('#alert').addClass('d-none');
    url = url.replace('/actions', '');
    url = url.replace('order', '');
    $.get(url+"index.php", "page=actions/order/ajax_actions/"+$('#product').val(), showDetails);
    // http://localhost/workspace/projetPerso/restaurant/index.php?page=actions/order/ajax_actions/1
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
    if (localStorage.getItem('order')) {
        order = JSON.parse(localStorage.getItem('order'));
    }
    $('#panier').empty();
    if(order !== null) {
        $('#panier').append('<thead><tr><th>Menu</th><th>Prix Unit</th><th>Quantité</th><th>Totale</th><th>Actions</th></tr></thead>');
        $('#panier').append('<tbody class="text-center">');
        totalPrice = 0;
        for(let i = 0; i < order.length; i++) {
            totalPrice += (order[i][0].meal_price) * (order[i][1]);
            $('#panier').append(`<tr id="meal${i}"><td>${order[i][0].meal_name}</td><td>${order[i][0].meal_price} €</td><td>${order[i][1]}</td><td>${order[i][0].meal_price * order[i][1]} €</td><td><i class="fa-solid fa-xmark fa-lg" id="delete${i}"></i></td></tr>`);
        }
        $('#panier').append('</tbody>');
        $('#panier').append(`<tfoot><tr><td>Total à payer</td><td colspan=3 class="table-active fs-4">${totalPrice} €</td></tr></tfoot>`);
        $('#validate').removeAttr('hidden');
    }
}

function validateOrder() {
    let orderToSend = JSON.stringify(order);
    $.get(url+'index.php', 'page=actions/order/ajax_actions/'+orderToSend+'/'+totalPrice, emptyOrder);
}

function emptyOrder() {
    $('#alert').removeClass('d-none');
    $('#validate').hide();
    localStorage.clear();
    displayOrder();
}

function removeAnOrder(e) {
    order = JSON.parse(localStorage.getItem('order'));
    // console.log(order[1][0].meal_name); frites 2eme commande
    let element = e.target;
    let idElement = element.id;
    let numberInId = idElement.replace('delete', '');
    let countOrderToRemove = 1;
    order.splice(numberInId, countOrderToRemove);
    localStorage.setItem('order', JSON.stringify(order));
    /**
     * on va mettre à jour le prix total sur le moment
     * on va utiliser order et additioner que les prix restant puis mettre à jour le contenu du prix
     * loop for
     */
    totalPrice = 0;
    for (let i = 0; i < order.length; i++) {
        totalPrice += (order[i][0].meal_price) * (order[i][1]);
    }
    $('tfoot tr td:last-child').text(`${totalPrice} €`);

    // changer l'id du tr et du i (meal et delete) car l'élément du dessous prend la place de l'élément supprimé sauf le dernier
    if (numberInId >= order.length) {
    } else {
        $(`tr#meal${parseInt(numberInId)+1}`).attr('id', `meal${numberInId}`);
        $(`i#delete${parseInt(numberInId)+1}`).attr('id', `delete${numberInId}`);
    }
    $(`#meal${numberInId}`).remove();
    if (order.length == 0) {
        localStorage.clear();
        $('thead').remove();
        $('tfoot').remove();
        $('#validate').hide();
    }

}


$(function() {
    $('#product').on('click', loadDetails);
    $('#add').on('click', addBasket);
    $('table').on('click', removeAnOrder);
    $('#validate').on('click', validateOrder);
    loadDetails();
    // displayOrder();
})