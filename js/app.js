$(document).foundation()

function breakfast() {
    document.getElementById("breakfast-menu").style.display="inline";
    document.getElementById("lunch-menu").style.display="none";
}
function lunch() {
    document.getElementById("lunch-menu").style.display="inline";
    document.getElementById("breakfast-menu").style.display="none";
}
function dinner() {
    document.getElementById("dinner-menu").style.display="inline";
}