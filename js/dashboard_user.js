//Dummy data
transaction = {
    transaction_id:"128937Dqwe",
    transaction_sender:"John Tan",
    transaction_receiver:"David Kong",
    transaction_date:"22 Aug 2018",
    transaction_amount:"5827.24"
}

transaction2 = {
    transaction_id:"awea123D",
    transaction_sender:"Don Nick",
    transaction_receiver:"Alice Kong",
    transaction_date:"27 Aug 2018",
    transaction_amount:"23124.15"
}

transaction3 = {
    transaction_id:"128937Dqwe",
    transaction_sender:"John Tan",
    transaction_receiver:"David Kong",
    transaction_date:"3 Dec 2018",
    transaction_amount:"1244.23"
}

$( document ).ready(function() {
    updateBalance(15069);
    updateTransactions(transaction);
    updateTransactions(transaction2);
    updateTransactions(transaction3);

});

//Update balance value
function updateBalance(value){
    $("#value-balance").html(value);
}

function updateTransactions(object){
    var container = $("#transaction-ul");
    var li = $("<li>").appendTo(container);
    var arrow = '<i class="fas fa-long-arrow-alt-right">';

    //Left column
    var colLeft = $("<div>").attr("class", "trans-left").appendTo(li);
    var titleRow = $("<div>").attr("class", "row trans-title").appendTo(colLeft);
    var spanFrom = $("<span>").attr("class", "trans-from").html(object.transaction_sender).appendTo(titleRow);
    var spanArrow = $("<span>").attr("class", "trans-arrow").html(arrow).appendTo(titleRow);
    var spanTo = $("<span>").attr("class", "trans-to").html(object.transaction_receiver).appendTo(titleRow);
    var spanAmount = $("<span>").attr("class", "trans-amount").html(object.transaction_amount).appendTo(colLeft);

    //Right column
    var colRight = $("<div>").attr("class", "trans-right").appendTo(li);
    var spanFrom = $("<span>").attr("class", "trans-id").html(object.transaction_id).appendTo(colRight);
    var spanFrom = $("<span>").attr("class", "trans-date").html(object.transaction_date).appendTo(colRight);
}