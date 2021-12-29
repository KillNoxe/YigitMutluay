function ackapa(x){
    var x;
    switch(x){
        case 1:
        document.getElementById("Kare").style.display = "none";
        document.getElementById("daire").style.display = "block";
        break;

        case 2:
        document.getElementById("Kare").style.display = "block";
        document.getElementById("daire").style.display = "none";
        break;

        default:
        break;
    }
}
function Hesapla(){
    var taban = document.getElementById("taban").value;
    var yukseklik = document.getElementById("yukseklik").value;
    var yaricap = document.getElementById("yaricap").value;
    if(document.getElementById("radio1").checked){
        cevap = taban * yukseklik;
        document.getElementById("cevap").innerHTML = "Cevap : " + cevap;
    }
    else if(document.getElementById("radio2").checked){
        cevap = (taban * yukseklik)/2;
        document.getElementById("cevap").innerHTML = "Cevap : " + cevap;
    }
    else{
        cevap = 3 * (yaricap * yaricap);
        document.getElementById("cevap").innerHTML = "Cevap : " + cevap;
    }
}
function temizle(){
    document.getElementById("taban").value = "";
    document.getElementById("yukseklik").value = "";
    document.getElementById("yaricap").value = "";
}