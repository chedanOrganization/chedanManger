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
function showCreate() {
    document.getElementById("createContent").style.display="block";
    document.getElementById("deleteContent").style.display="none";
    document.getElementById("updateContent").style.display="none";
    document.getElementById("selectedContent").style.display="none";
}
function showDelete() {
    document.getElementById("createContent").style.display="none";
    document.getElementById("deleteContent").style.display="block";
    document.getElementById("updateContent").style.display="none";
    document.getElementById("selectedContent").style.display="none";
}
function showUpdate() {
    document.getElementById("createContent").style.display="none";
    document.getElementById("deleteContent").style.display="none";
    document.getElementById("updateContent").style.display="block";
    document.getElementById("selectedContent").style.display="none";
}
function showSelected() {
    document.getElementById("createContent").style.display="none";
    document.getElementById("deleteContent").style.display="none";
    document.getElementById("updateContent").style.display="none";
    document.getElementById("selectedContent").style.display="block";
}

