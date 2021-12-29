var x;
var y = 0;
function slider(x){
    y = y + x;
    if(y < 0){
        y = 0;
    }
    if(y > 2724){
        y = 2724;
    }
    var px = y + "px";
    console.log(px);
    document.getElementById("slide").style.right = px;
}