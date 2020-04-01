let click = 0
function display(){
    click+=1
    console.log(click)
    if( click % 2 === 0 ){
        document.getElementById("home").style.display = "block"
    }
    else {
        document.getElementById("home").style.display = "none"

    }
}


function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

