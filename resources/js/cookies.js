let getData = document.getElementById("cookies_use_data");
const Product_Id = getData.dataset.id;
let cart_submit = document.getElementById('product_cart_submit');

function getCart() {
    let cart = Cookies.get('wqn_cart');
    return (!cart) ? [] : JSON.parse(cart);
}

function saveCart(cart) {
    Cookies.set('wqn_cart', JSON.stringify(cart))
}

function addProductToCart(productId, quantity, attribute) {
		let cart = getCart(); 

		if (!attribute) { // 如果沒有傳屬性

			let value = cart.find((v) => {
				return v.id == productId
			})

			let id = cart.indexOf(value);

			if ( value ) { // 如果有找到重複id
				console.log('有重複id', value);
				let newQuantity = Number(value.value[0].qty) + Number(quantity);
				cart[id].value[0].qty = newQuantity;
				saveCart(cart)
				alert(`已更新購物車, 目前該商品數量 ${cart[id].value[0].qty}`)

			} else { // 如果沒有重複id
				cart.push(
					{
						id: productId,
						value: [{
							attr: null,
							qty: quantity
						}]
					},
				)
				saveCart(cart)
				alert(`已加入購物車`)
			}
		} else { // 有屬性
		
			let item = cart.find((v) => { 
				return v.id == productId
			})

			if ( item ) { // 如果有找到重複id

				let _attribute = item.value.find((v) => {
					return v.attr == attribute
				})

				let item_id = cart.indexOf(item);
				let attr_id = item.value.indexOf(_attribute);

				if ( _attribute ) {
					console.log('有相同屬性');
					let item_value = cart[item_id].value[attr_id];
					let newQuantity = Number(item_value.qty) + Number(quantity);
					item_value.qty = newQuantity
					saveCart(cart)
					alert(`已更新購物車, 目前該商品數量 ${item_value.qty}`)
				}	else {
					console.log('沒有相同屬性');
					cart[item_id].value.push({
						qttr: attribute,
						qty: quantity
					})
					saveCart(cart)
					alert(`已加入購物車`)
				}

			} else { // 如果沒有重複id
				cart.push(
					{
						id: productId,
						value: [{
							attr: attribute,
							qty: quantity
						}]
					},
				)
				saveCart(cart)
				alert(`已加入購物車`)
			}

		}

}

if( cart_submit ) {
    cart_submit.addEventListener('click', function(){
        let cart_qty_input = document.getElementById('product_cart_input').value;
				let prosuct_attr = document.getElementById("product_attr") ? document.getElementById("product_attr").value : null;
				if(cart_qty_input) {
					addProductToCart(Product_Id ,cart_qty_input, prosuct_attr)
        }
    })
}