let cart_submit = document.getElementById('product_cart_submit');
if(cart_submit) {
    cart_submit.addEventListener('click', function(){
        let cart_input = document.getElementById('product_cart_input');
        if(cart_input) {
            let quantity = parseInt(Cookies.get('quantity')) || 0;
            let addQuantity = parseInt(cart_input.value) || 0;
            let newQuantity = quantity + addQuantity;
            Cookies.set('quantity' , newQuantity)
        }
    })
}