let getData = document.getElementById("cookies_use_data");
const Product_Id = getData.dataset.id;
let cart_submit = document.getElementById('product_cart_submit');


function getCart() {
    let cart = Cookies.get('cart');
    return (!cart) ? {} : JSON.parse(cart);
}

function saveCart(cart) {
    Cookies.set('cart', JSON.stringify(cart))
}

function addProductToCart(productId, qty) {
    let cart = getCart();
    let quantity = parseInt(cart[productId]) || 0;
    let addQuantity = parseInt(qty) || 0;
    let newQuantity = quantity + addQuantity;
    cart[productId] = newQuantity;
    saveCart(cart);

    alert(`已加入詢價,目前該商品數量 ${cart[productId]}`)
}

if(cart_submit) {
    cart_submit.addEventListener('click', function(){
        let cart_input = document.getElementById('product_cart_input');
        if(cart_input) {
            addProductToCart(Product_Id ,cart_input.value)
        }
    })
}