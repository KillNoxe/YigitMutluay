var x;
var y = -2;
function slider(x){
    y = y + x;
    if(y > -2){
        y = -2;
    }
    if(y < -602){
    y = -602;
    }
    var px = y + "px";
    console.log(y + " " + px)
    document.getElementById("slide").style.left = px;
}