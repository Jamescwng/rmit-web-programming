var s1 = document.getElementById("quantity-s1");
var s2 = document.getElementById("quantity-s2");
var s3 = document.getElementById("quantity-s3");
var total = document.getElementById("price-total");

s1.addEventListener("change", function calculatePrice_s1() {
    var price_s1 = 17.00;
    var quantity = s1.value;
    var totalPrice = quantity * price_s1;

    document.getElementById("price-s1").innerHTML = " $" + totalPrice.toFixed(2);

    return totalPrice;
});

s2.addEventListener("change", function calculatePrice_s2() {
    var price_s2 = 22.50;
    var quantity = s2.value;
    var totalPrice = quantity * price_s2;

    document.getElementById("price-s2").innerHTML = " $" + totalPrice.toFixed(2);

    return totalPrice;
});

s3.addEventListener("change", function calculatePrice_s3() {
    var price_s3 = 26.75;
    var quantity = s3.value;
    var totalPrice = quantity * price_s3;

    document.getElementById("price-s3").innerHTML = " $" + totalPrice.toFixed(2);

    return totalPrice;
});

function getTotal(x, y, z) {
    return x + y + z;
}

document.getElementById("total-price").innerHTML = " $" + getTotal(calculatePrice_s1(totalPrice), calculatePrice_s2(totalPrice), calculatePrice_s3(totalPrice)).toFixed(2);

// document.getElementById("total-price").innerHTML = " $" + getTotal(17, 22.50, 26.75).toFixed(2);
