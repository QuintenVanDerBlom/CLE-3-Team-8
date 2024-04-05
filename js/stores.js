window.addEventListener('load', init);

const webAPI = 'http://localhost/Periode%203/CLE-3-Team-8/services/webservice/index.php';
let storeContainer;
let storeData;

function init() {
    storeContainer = document.getElementById('stores-container');
    storeContainer.addEventListener('click',selectStore)
    ajaxRequest(webAPI, createStores);
}

function ajaxRequest(url, succesHandler) {
    fetch(url)
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP-fout (${response.status}): ${response.statusText}`);
            }
            return response.json();
        })
        .then(succesHandler)
        .catch(ajaxErrorHandler);
}

function ajaxErrorHandler(data) {
    console.error(data);
    const error = document.createElement('div');
    error.classList.add('error');
    error.innerHTML = 'oeps';
    storeContainer.before(error);
}

function createStores(storeData){
    for (let item of storeData) {

        //store name
        let storeNameContainer = document.createElement('section');
        storeNameContainer.classList.add('store-name-comtainer');
        storeNameContainer.dataset.storeId = item.id;
        storeContainer.appendChild(storeNameContainer);

        let storeIcon = document.createElement('img');
        storeIcon.src = 'img/store-icon.png';
        storeIcon.classList.add('store-icon');
        storeNameContainer.appendChild(storeIcon);

        let storeTitle = document.createElement('h3');
        storeTitle.innerHTML = item.name;
        storeNameContainer.appendChild(storeTitle);

        checkSelectedStore()
    }
}

function selectStore(e) {

    //pak de winkel id
    const storeCard = e.target.closest('.store-name-comtainer');
    if (storeCard) {
        const selectedStoreId = storeCard.dataset.storeId;

        //stuur store id naar local storage
        localStorage.setItem("selectedStore", selectedStoreId);
    }

    checkSelectedStore()
}

function checkSelectedStore() {
    const selectedStoreId = localStorage.getItem("selectedStore");

    if (selectedStoreId) {
        const selectedStore = document.querySelector(`.store-name-comtainer[data-store-id="${selectedStoreId}"]`);

        if (selectedStore) {
            // Remove 'selected-store' class from all stores
            const allStores = document.querySelectorAll('.store-name-comtainer');
            allStores.forEach(store => store.classList.remove('selected-store'));

            // Add 'selected-store' class to the selected store
            selectedStore.classList.add('selected-store');
        }
    }
}