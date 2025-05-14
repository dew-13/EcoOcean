// Array of fashion images and corresponding texts
const fashionData = [
    { img: 'images/shopBack/wall2.jpg', text: 'New Arrivals in Fashion' },
    { img: 'images/shopBack/fashion2.jpg', text: 'Sustainable Fashion for All' },
    { img: 'images/shopBack/happy3.jpg', text: 'Exclusive Ocean-Inspired Designs' }
];
let currentFashionIndex = 0;

function changeFashionImage() {
    const carouselImage = document.getElementById('image-change');
    const fashionText = document.getElementById('text-overlay');

    //Fade out the previous image
    carouselImage.style.opacity = 0;

    setTimeout(() => {
        // Update background image and text
        carouselImage.style.backgroundImage = `url('${fashionData[currentFashionIndex].img}')`;
        fashionText.textContent = fashionData[currentFashionIndex].text;

        // Move to the next image index
        currentFashionIndex = (currentFashionIndex + 1) % fashionData.length;

        // Fade in the next image
        carouselImage.style.opacity = 1;
    },500);

    
}

// Immediately load the first image and text
changeFashionImage();

// Change image and text every 3 seconds (3000 milliseconds)
setInterval(changeFashionImage, 4000);


// Display items based on selected category
function showCategory(category) {
    const itemDisplay = document.getElementById('item-display');
    itemDisplay.innerHTML = ''; // Clear previous items

    let items = [];

    if (category === 'men') {
        items = [
            { img: 'images/Men/shirt1.jpg', name: 'Men Shirt 1', price: 25},
            { img: 'images/Men/shirt2.png', name: 'Men Shirt 2', price: 35},
            { img: 'images/Men/shirt3.png', name: 'Men Shirt 3', price: 55},
        ];
    } else if (category === 'women') {
        items = [
            { img: 'images/Women/girl.png', name: 'Women Dress 1', price: 25},
            { img: 'images/Women/girl2.jpg', name: 'Women Dress 2', price: 45},
            { img: 'images/Women/girl3.png', name: 'Women Dress 3', price: 55},
        ];
    } else if (category === 'accessories') {
        items = [
            { img: 'images/Acc/acc1.jpg', name: 'Accessory 1', price: 15},
            { img: 'images/Acc/acc2.jpg', name: 'Accessory 2', price: 20},
            { img: 'images/Acc/acc3.jpg', name: 'Accessory 3', price: 25},
        ];
    }

    items.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.className = 'item';
        itemDiv.innerHTML = `
            <img src="${item.img}" alt="${item.name}">
            <p>${item.name}</p>
            <p>$${item.price}</p>
            <button onclick="openOrderForm('${item.name}', '${item.price}', '${item.img}')">Order Now</button>
        `;
        itemDisplay.appendChild(itemDiv);
    });
}

function openOrderForm(name, price, img) {

    // Show the modal
    const modal = document.getElementById('order-modal');
    modal.style.display = 'block';

    // Populate the modal with the item details
    document.getElementById('modal-item-name').textContent = name;
    document.getElementById('modal-item-price').textContent = '$'+price;
    document.getElementById('modal-item-img').src = img;
    document.getElementById('modal-item-img').alt = name;


    let txt = document.getElementById('modal-item-name').textContent;

    //Get price
    document.getElementById('total-price').value = '$'+price;

    //Place item price for calculation
    document.getElementById('total-price').setAttribute('itemPrice', price);

    document.getElementById('hidden-item-name').value = txt;
    document.getElementById('hidden-item-price').value = price;

}

function calculatePrice(){
    //Accept integers only
    let amount = Math.floor(document.getElementById('item-amount').value);

    //Further validate
    if (amount<1 || isNaN(amount)){
        amount = 1;
        document.getElementById('item-amount').value = amount;
    }

    const PriceOfItem = parseFloat(document.getElementById('total-price').getAttribute('itemPrice'));
    const total = amount * PriceOfItem;
    document.getElementById('total-price').value = '$'+total;
}

// Close the modal when the close button or outside of the modal is clicked
function closeModal() {
    document.getElementById('order-modal').style.display = 'none';
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
    const modal = document.getElementById('order-modal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
}

// Display "Men" category items by default when the page loads
window.onload = function() {
    showCategory('men');
};