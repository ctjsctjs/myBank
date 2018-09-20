$( document ).ready(function() {
    updateBalance(0);
});

//Update balance value
function updateBalance(value){
    $("#value-balance").html(value);
}
