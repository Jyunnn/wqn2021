/******/ (() => { // webpackBootstrap
/*!*********************************!*\
  !*** ./resources/js/cookies.js ***!
  \*********************************/
var getData = document.getElementById("cookies_use_data");
var Product_Id = getData.dataset.id;
var cart_submit = document.getElementById('product_cart_submit');

function getCart() {
  var cart = Cookies.get('wqn_cart');
  return !cart ? [] : JSON.parse(cart);
}

function saveCart(cart) {
  Cookies.set('wqn_cart', JSON.stringify(cart));
}

function addProductToCart(productId, quantity, attribute) {
  var cart = getCart();

  if (!attribute) {
    // 如果沒有傳屬性
    var value = cart.find(function (v) {
      return v.id == productId;
    });
    var id = cart.indexOf(value);

    if (value) {
      // 如果有找到重複id
      console.log('有重複id', value);
      var newQuantity = Number(value.value[0].qty) + Number(quantity);
      cart[id].value[0].qty = newQuantity;
      saveCart(cart);
      alert("\u5DF2\u66F4\u65B0\u8CFC\u7269\u8ECA, \u76EE\u524D\u8A72\u5546\u54C1\u6578\u91CF ".concat(cart[id].value[0].qty));
    } else {
      // 如果沒有重複id
      cart.push({
        id: productId,
        value: [{
          attr: null,
          qty: quantity
        }]
      });
      saveCart(cart);
      alert("\u5DF2\u52A0\u5165\u8CFC\u7269\u8ECA");
    }
  } else {
    // 有屬性
    var item = cart.find(function (v) {
      return v.id == productId;
    });

    if (item) {
      // 如果有找到重複id
      var _attribute = item.value.find(function (v) {
        return v.attr == attribute;
      });

      var item_id = cart.indexOf(item);
      var attr_id = item.value.indexOf(_attribute);

      if (_attribute) {
        console.log('有相同屬性');
        var item_value = cart[item_id].value[attr_id];

        var _newQuantity = Number(item_value.qty) + Number(quantity);

        item_value.qty = _newQuantity;
        saveCart(cart);
        alert("\u5DF2\u66F4\u65B0\u8CFC\u7269\u8ECA, \u76EE\u524D\u8A72\u5546\u54C1\u6578\u91CF ".concat(item_value.qty));
      } else {
        console.log('沒有相同屬性');
        cart[item_id].value.push({
          qttr: attribute,
          qty: quantity
        });
        saveCart(cart);
        alert("\u5DF2\u52A0\u5165\u8CFC\u7269\u8ECA");
      }
    } else {
      // 如果沒有重複id
      cart.push({
        id: productId,
        value: [{
          attr: attribute,
          qty: quantity
        }]
      });
      saveCart(cart);
      alert("\u5DF2\u52A0\u5165\u8CFC\u7269\u8ECA");
    }
  }
}

if (cart_submit) {
  cart_submit.addEventListener('click', function () {
    var cart_qty_input = document.getElementById('product_cart_input').value;
    var prosuct_attr = document.getElementById("product_attr") ? document.getElementById("product_attr").value : null;

    if (cart_qty_input) {
      addProductToCart(Product_Id, cart_qty_input, prosuct_attr);
    }
  });
}
/******/ })()
;