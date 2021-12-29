function gizle(){
    var x;
    var hideshow;
    x = document.getElementById("gizle").innerHTML;
    hideshow = document.getElementById("yazi");
    if(x == "Göster"){
        document.getElementById("gizle").innerHTML = "Gizle";
        hideshow.classList.remove("y");
        hideshow.classList.add("x");
    }
    else{
        document.getElementById("gizle").innerHTML = "Göster";
        hideshow.classList.remove("x");
        hideshow.classList.add("y");
    }
}