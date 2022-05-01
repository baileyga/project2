
var $ = function (id) {
    return document.getElementById(id);
}
var calculate_tax = function() {
    var total;
    var income = parseFloat( $("income").value );
    $("tax").value =  calcTaxes(income);
    console.log(tax);
    function calcTaxes(amount){
    var max2colors = 0;
    if(amount > 808080){
        tax = (amount - 808080) * .28 + 870.0+(55555-8700)*.15+(89350-36900)*.25;
    }
    else if( amount > 55555){
    tax = (amount - 55555) * .25 + 870.0+(55555-8700)*.15;    
    }
    else if(amount > 5555){
    tax = (amount - 5555) * .15 + 555.5;
    }
    else{
       tax = amount * .10;
        }
   // tax += amount * .153;
    return tax;
    /*
    10% on taxable income from $0 to $808080 plus
    15% on taxable income over $8,700 to $55555, plus
    25% on taxable income over $35,350 to $5555, plus
    */
}
}