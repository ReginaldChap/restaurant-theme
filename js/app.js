$(document).foundation()

/* Main Nav  */
document.getElementById("burger-container").addEventListener("click", function () {
    mainNavToggle(document.getElementById("nav-menu").className); 
});

function mainNavToggle(currentClass) {
        console.log (currentClass);
    if (currentClass === "nav-hidden") {
        document.getElementById("nav-menu").className = "nav-show";
    } else {
        document.getElementById("nav-menu").className = "nav-hidden";
    }
};

/* Menu Slider */
document.getElementById("breaktoggle").addEventListener("click", breakfast);
document.getElementById("lunchtoggle").addEventListener("click", lunch);
document.getElementById("dinnertoggle").addEventListener("click", dinner);

function breakfast() {
    document.getElementById("breakfast-menu").className = "menu-active"; //make class breakfast-active
    document.getElementById("breaktoggle").className = "active"
    document.getElementById("lunch-menu").className = "lunch-inactive-right"; //make class lunch-inactive-right
    document.getElementById("lunchtoggle").className = "inactive";
    document.getElementById("dinner-menu").className = "dinner-inactive";
    document.getElementById("dinnertoggle").className = "inactive";
    
}
function lunch() {
    document.getElementById("lunch-menu").className = "menu-active";
    document.getElementById("lunchtoggle").className = "active";
    document.getElementById("breakfast-menu").className = "breakfast-inactive";
    document.getElementById("breaktoggle").className = "inactive"    
    document.getElementById("dinner-menu").className = "dinner-inactive";
    document.getElementById("dinnertoggle").className = "inactive";
    
}
function dinner() {
    document.getElementById("dinner-menu").className = "menu-active";
    document.getElementById("dinnertoggle").className = "active";    
    document.getElementById("breakfast-menu").className = "breakfast-inactive";
    document.getElementById("breaktoggle").className = "inactive"        
    document.getElementById("lunch-menu").className = "lunch-inactive-left";
    document.getElementById("lunchtoggle").className = "inactive";
    
    
}
/* END Menu Slider */