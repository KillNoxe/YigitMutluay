function kapat(kapatid){
  var kapatid;
  // console.log(kapatid);
  document.getElementById(kapatid).style.display = "none";
  }

function renk(){
   var s1;
   var s2;
   var s3;
   var renk;
   s1 = Math.floor(Math.random() * 256);
   s2 = Math.floor(Math.random() * 256);
   s3 = Math.floor(Math.random() * 256);
   renk = "(" + s1 + ", " + s2 + ", " + s3 + ")";
   document.getElementById("akademi").style.color = "rgb" + renk ;
   console.log(renk);
 }
//  function gecis(){
//   let gecis = document.getElementById("gecis");
//   gecis.classList.add('gecis')
//  }