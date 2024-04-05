window.addEventListener("load", init)
localStorage.setItem('selectedStore', '1');
const selectedStore = localStorage.getItem('selectedStore');
const storeURL = `http://localhost/CLE-3-Team-8/services/webservice/index.php/GetPart?id=1`;
let productList;
let shoppingArray = [];


function init() {
    console.log(storeURL)
    ajaxCallHandler(storeURL, showStoreProducts)
    productList = document.getElementById('product-list');
    productList.addEventListener('change', productClickHandler)
    shoppingArray = [];
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
    for (let item of data.products) {
        let product = document.createElement('div');
        product.classList.add('product-list');
        product.classList.add('product');
        productList.appendChild(product);
        let productText = document.createElement('p')
        productText.innerHTML = item.naam;
        product.appendChild(productText)
        let productBox = document.createElement('input')
        productBox.setAttribute('type', 'checkbox')
        productBox.setAttribute('value', item.naam)
        productBox.classList.add('productBox')
        product.appendChild(productBox)
    }
    setCheckboxFromStorage(data)
}

function setCheckboxFromStorage(data) {
    if (localStorage.getItem('shoppingList') === null) {
        return;
    }
    const localStorageArray = localStorage.getItem('shoppingList');
    shoppingArray = JSON.parse(localStorageArray);
    console.log(shoppingArray)

    for (let item of shoppingArray) {
        const checkboxStorage = document.querySelector(`.productBox[value='${item}']`)
        checkboxStorage.checked = true;
    }
}

function productClickHandler (e) {
    let clickedItem = e.target;
    if (clickedItem.checked) {
        addProductToList(e);
    } else {
        removeProductFromList(e);
    }
}

function addProductToList(e) {
    let clickedItem = e.target;

    const productName = clickedItem.value;
    shoppingArray.push(productName);
    localStorage.setItem('shoppingList', JSON.stringify(shoppingArray))
}

function removeProductFromList(e) {
    let clickedItem = e.target;
    const productName = clickedItem.value;
    const storageHasProduct = shoppingArray.indexOf(productName);
    shoppingArray.splice(storageHasProduct, 1);
    localStorage.setItem('shoppingList', JSON.stringify(shoppingArray))
}

function ajaxErrorHandler() {

}