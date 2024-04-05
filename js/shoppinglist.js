window.addEventListener("load", init)
const selectedStore = localStorage.getItem('selectedStore');
const storeURL = `http://localhost/CLE-3-Team-8/services/webservice/index.php/GetPart?id=${selectedStore}`;
let productList;
let localStorageArray = localStorage.getItem("shoppingList")
let shoppingArray = JSON.parse(localStorageArray)

function init() {
    ajaxCallHandler(storeURL, showStoreProducts)
    productList = document.getElementById('product-list');
    productList.addEventListener('click', removeProductFromList)

}

function ajaxCallHandler(url, successHandler) {
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(successHandler)
        .catch(ajaxErrorHandler)
}

function showStoreProducts(data) {
    productList = document.getElementById('product-list')
    shoppingArray = localStorage.getItem("shoppingList")
    let shoppingList = JSON.parse(shoppingArray)
    for (let item of data.products) {
        for (let shoppingItem of shoppingList) {
            if ( item.naam === shoppingItem) {
                let product = document.createElement('div');
                product.classList.add('product-list');
                product.classList.add('product');
                productList.appendChild(product);
                let productText = document.createElement('p')
                productText.innerHTML = item.naam;
                product.appendChild(productText)
            }
        }
    }
}
function ajaxErrorHandler() {

}