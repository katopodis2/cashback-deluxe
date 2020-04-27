let click = false
function display(){
    click = !click
    console.log(click)
    if( click){
        document.getElementById("home").style.display = "block"
        // let mainPaddingMyFeedback = document.getElementById(mainPaddingMyFeedback);
        // mainPaddingMyFeedback.classList.add("mainPaddingMyFeedback")
        // let adidasFlexMarginRight = document.getElementById(adidasFlexMarginRight);
        // adidasFlexMarginRight.classList.add("adidasFlexMarginRight")
    }
    else {
        document.getElementById("home").style.display = "none"
        // mainPaddingMyFeedback.classList.remove("mainPaddingMyFeedback");
        // adidasFlexMarginRight.classList.remove("adidasFlexMarginRight");

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


const stars = document.querySelectorAll(".ratings")

const ratingValue= document.querySelectorAll("#rating-value");

let index
stars.forEach(el => {
    const children = el.children;

    for(let i = 0; i< children.length; i++){
        children[i].addEventListener("mouseover", function(){
            for(let j=0; j < children.length; j++){
                children[j].classList.remove("fa-star");
                children[j].classList.add("fa-star-o")
            }
            for (let j = 0; j <= i; j++){
                children[j].classList.remove("fa-star-o")
                children[j].classList.add("fa-star")
            }
        })

        children[i].addEventListener("click", function(){
            ratingValue.value = i+1
            console.log(ratingValue.value);
            index=i
        })
        children[i].addEventListener("mouseout", function(){
            for(let j=0; j < children.length; j++){
                children[j].classList.remove("fa-star");
                children[j].classList.add("fa-star-o")
            }
            for (let j = 0; j <= index; j++){
                children[j].classList.remove("fa-star-o")
                children[j].classList.add("fa-star")
            }
        })
    }
})
