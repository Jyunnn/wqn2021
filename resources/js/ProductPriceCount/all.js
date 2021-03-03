import React, { useState } from 'react';
import ReactDom from 'react-dom';

if( document.getElementById("ProductPriceCount") ){
    const propsContainer = document.getElementById("ProductPriceCount");
    const props = Object.assign({}, propsContainer.dataset);

    function ProductPriceCount(props) {
        const [ count , setCount ] = useState(1);
        return (
            <div>
                <label htmlFor="product_cart_input">數量</label>
                <input id="product_cart_input" name="product_cart_input" type="number" min="1" value={count} onChange={ e => {setCount(e.target.value)}}/>
                <h3 className="text py-3">單品總價格: <span className="text-red-500"> { count * props.price }  </span> 元 </h3>
            </div>
        )
    };
    
    ReactDom.render(
        <ProductPriceCount {...props}/>,
        document.getElementById('ProductPriceCount')
    );
}


