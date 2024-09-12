const   card    = document.getElementById('card');

const   displayCards = (flower) => 
        {
            const htmlString = flower.map((flower) =>
                                {   
                                    return`
                                    <li>
                                        <a class = "card_link" href="../product_detail/product.php?id=${flower.id}">
                                            <div class = "card">
                                                <img class = "card_img" src=${flower.image}>
                                                <div class = "card_name">${flower.name}</div>
                                                <div class = "card_price">
                                                ${flower.discount != 0 ? `<span id="discount">RM ${flower.originalprice}</span>` : ''}
                                                    <span id = "ori_price">RM ${flower.price}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                `;
                                })
                                .join('');
            card.innerHTML = htmlString;
                                
        };