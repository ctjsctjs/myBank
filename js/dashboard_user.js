$( document ).ready(function() {
    updateBalance(5600);
});

//Update balance value
function updateBalance(value){
    $("#value-balance").html(value);
}
