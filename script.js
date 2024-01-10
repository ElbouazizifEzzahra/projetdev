let cartItems = [];

function addToCart(productId, productName, productPrice, quantityId) {
    const quantity = document.getElementById(quantityId).value;
    const totalPrice = productPrice * quantity;
    const item = {
        id: productId,
        name: productName,
        price: productPrice,
        quantity: quantity,
        totalPrice: totalPrice
    };

    const existingItemIndex = cartItems.findIndex(item => item.id === productId);

    if (existingItemIndex !== -1) {
        // Product already in cart, update quantity and total price
        cartItems[existingItemIndex].quantity = parseInt(cartItems[existingItemIndex].quantity) + parseInt(quantity);
        cartItems[existingItemIndex].totalPrice = parseFloat(cartItems[existingItemIndex].totalPrice) + parseFloat(totalPrice);
    } else {
        // Add new product to cart
        cartItems.push(item);
    }

    updateCartUI();
}

function updateCartUI() {
    const cartElement = document.getElementById('cart');
    const cartItemsElement = document.getElementById('cart-items');
    const totalElement = document.getElementById('total');

    cartItemsElement.innerHTML = '';

    let total = 0;

    cartItems.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = `${item.name} x${item.quantity} - ${item.totalPrice.toFixed(2)} DH`;
        cartItemsElement.appendChild(listItem);

        total += item.totalPrice;
    });

    totalElement.textContent = `Total: ${total.toFixed(2)} DH`;

    if (cartItems.length > 0) {
        cartElement.style.display = 'block';
    } else {
        cartElement.style.display = 'none';
    }
}

function toggleCart() {
    const cartElement = document.getElementById('cart');
    if (cartElement.style.display === 'block') {
        cartElement.style.display = 'none';
    } else {
        cartElement.style.display = 'block';
    }
}
