/******/ (() => { // webpackBootstrap
/*!*********************************!*\
  !*** ./resources/js/cookies.js ***!
  \*********************************/
var getData = document.getElementById("cookies_use_data");
var Product_Id = getData.dataset.id;
var cart_submit = document.getElementById('product_cart_submit');

function getCart() {
  var cart = Cookies.get('cart');
  return !cart ? {} : JSON.parse(cart);
}

function saveCart(cart) {
  Cookies.set('cart', JSON.stringify(cart));
}

function addProductToCart(productId, qty) {
  var cart = getCart();
  var quantity = parseInt(cart[productId]) || 0;
  var addQuantity = parseInt(qty) || 0;
  var newQuantity = quantity + addQuantity;
  cart[productId] = newQuantity;
  saveCart(cart);
  alert("\u5DF2\u52A0\u5165\u8A62\u50F9,\u76EE\u524D\u8A72\u5546\u54C1\u6578\u91CF ".concat(cart[productId]));
}

if (cart_submit) {
  cart_submit.addEventListener('click', function () {
    var cart_input = document.getElementById('product_cart_input');

    if (cart_input) {
      addProductToCart(Product_Id, cart_input.value);
    }
  });
}
/******/ })()
;