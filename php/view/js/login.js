function isEmpty(obj){
    if(typeof obj == "undefined" || obj == null || obj == ""){
        return true;
    }else{
        return false;
    }
}

function login(){
    const name = document.getElementById("name").value.trim();login
    const password = document.getElementById("password").value.trim();
    if(isEmpty(name) || isEmpty(password)) {
        alert("账号密码不能为null");
    } else {
        window.location.href="";
    }
}
