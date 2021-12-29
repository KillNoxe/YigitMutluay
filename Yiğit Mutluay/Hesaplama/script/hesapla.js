var x;
var y;
var islem;
function hesapla(){
    x = document.getElementById("uzun").value;
    y = document.getElementById("kisa").value;
    if(x == "" || y == ""){
        document.getElementById("bolum").style.display = "none";
        alert("Boş Bırakmayın")
        return;
    }
    if(isNaN(x) == true ||isNaN(y) == true){
        alert("Sayı Giriniz");
        return;
    }
    islem = parseInt(x) + parseInt(y);
     document.getElementById("bolum").style.display = "block";
     document.getElementById("sonuc").value = islem;
}