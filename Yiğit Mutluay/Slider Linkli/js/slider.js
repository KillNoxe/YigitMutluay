var x;
var y = 0;
function slider(x){
    y = y + x;
    if(y < 0){
        y = 0;
    }
    if(y > 600){
    y = 600;
    }
    var px = y + "px";
    console.log(y + " " + px)
    document.getElementById("slide").style.right = px;
}