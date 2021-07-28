let menuTab = document.querySelectorAll(".tab__controls-elem");
let openTab = document.querySelectorAll(".open-tab__elem");

menuTab.forEach(elem => {
    elem.addEventListener("click", activeTab) 
});

function activeTab() {
    menuTab.forEach(elem => {
        elem.classList.remove('tab__controls-elem-active');
    });
    this.classList.add('tab__controls-elem-active');
    let tabName = this.getAttribute('data-tab');
    activeTabContent(tabName)
}

function activeTabContent(tabName){
    openTab.forEach(item => {
        if (item.classList.contains(tabName)) {
            item.classList.add('open-tab__active');
        } else {
            item.classList.remove('open-tab__active');
        }
    })
}