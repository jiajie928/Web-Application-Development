const card = document.getElementById('card');
const searchContainer = document.getElementById('error');
let flowerList = [];

const displaySearchFlower = (flower) => {
    const htmlString = flower
        .map((flower) => {
            
            return `
                <li>
                    <a class='card_link' href='../product_detail/product.php?id=${flower.id}'>
                        <img class='card_img' src=${flower.image} alt='Picture'>
                        <div class='card_name'>${flower.name}</div>
                        <div class='card_price'>
                        ${flower.discount != 0 ? `<span id="discount">RM ${flower.originalprice}</span>` : ''}
                            <span id='ori_rice'>RM ${flower.price} </span>
                        </div>
                    </a>
                </li>
            `;
        })
        .join('');
    card.innerHTML = htmlString;
};

const search = (query) => {
    const request = query.toLowerCase();
    const filteredFlower = flowerList.filter(flower => {
        return flower.name.toLowerCase().includes(request);
    });
    if (filteredFlower.length > 0) {
        console.log(filteredFlower);
        displaySearchFlower(filteredFlower);
    } else {
        searchContainer.innerHTML = "<p>This flower does not exist. We are sorry for the inconvenience caused.</p>"
        searchContainer.style = "text-align: center; margin: auto";
    }
    
}
