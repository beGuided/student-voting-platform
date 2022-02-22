let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
// let searchBtn = document.querySelector(".bx-search");
let list_Item = document.querySelector(".nav-list");

closeBtn.addEventListener("click", () => {
    sidebar.classList.toggle("open");

    menuBtnChange(); //calling the function(optional)
});
list_Item.addEventListener("click", () => { // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
});

// searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
//     sidebar.classList.add("open");
//     menuBtnChange(); //calling the function(optional)
// });


// following are the code to change sidebar button(optional)
function menuBtnChange() {
    const navButtons = document.querySelector(".nav-list").children;
    document.querySelector("#navv").classList.toggle("hide");
    document.querySelector("#navv").classList.toggle("ani");
    if (sidebar.classList.contains("open")) {
        closeBtn.innerHTML = 'close';
    } else {
        closeBtn.innerHTML = 'menu'; //replacing the iocns class
    }
}
// gallery item filter

const filterButtons = document.querySelector(".nav-list").children;
const items = document.querySelector(".home-section").children;

for (let i = 0; i < filterButtons.length; i++) {
    filterButtons[i].addEventListener("click", function() {
        for (let j = 0; j < filterButtons.length; j++) {
            filterButtons[j].classList.remove("active")
        }
        this.classList.add("active");
        const target = this.getAttribute("data-target")

        for (let k = 0; k < items.length; k++) {
            items[k].style.display = "none";
            if (target == items[k].getAttribute("data-id")) {
                items[k].style.display = "flex";
                items[k].style.background = "url(/assets/images/election\ bg.png) no-repeat #074b1c";
            }
            if (target == "all") {
                items[k].style.display = "none";
                items[0].style.display = "flex";
            }
        }

    })
};