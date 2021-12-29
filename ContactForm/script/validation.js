function Kontrol(){
    var name = document.forms[0][0].value;
    var email = document.forms[0][1].value;
    var phone = document.forms[0][2].value;

    let text = document.forms[0][1].value;
    let pattern = /@gmail.com/g;
    let result = text.match(pattern);
    if(name==""){
        document.getElementById("fname").style.display = "block";
        return false;
    }
    else {
        document.getElementById("fname").style.display = "none";
        document.getElementById("name").style.border = "1px solid #00ff00";
    }

    if(email==""){
        document.getElementById("ename").style.display = "block";
        document.getElementById("ename2").style.display = "none";
        return false;
    }
    else if(result == "@gmail.com"){
        document.getElementById("ename").style.display = "none";
        document.getElementById("ename2").style.display = "none";
        document.getElementById("email").style.border = "1px solid #00ff00";
    }
    else {
        document.getElementById("ename").style.display = "none"
        document.getElementById("ename2").style.display = "block";
        return false;
    }
    if(phone==""){
        document.getElementById("pname").style.display = "block";
        return false;
    }
    else {
        document.getElementById("pname").style.display = "none";
        document.getElementById("phone").style.border = "1px solid #00ff00";
    }
    return true;
}