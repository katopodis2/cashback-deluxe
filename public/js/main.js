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


