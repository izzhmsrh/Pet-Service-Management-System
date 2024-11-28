function check(){
    var id=document.form.id.value;
    var uname=document.form.uname.value;
    var pwd=document.form.pwd.value;
    var name=document.form.name.value;
    var role=document.form.role.value;

    if(id==""){
        alert("input id number");
        document.form.id.focus();
        return false;
    }
    else if(isNaN(id)){
        alert("in number only");
        document.form.id.focus();
        return false;
    }
    else if(uname==""){
        alert("input username");
        document.form.uname.focus();
        return false;
    }
    else if(pwd==""){
        alert("input password");
        document.form.pwd.focus();
        return false;
    }
    else if(name==""){
        alert("input name");
        document.form.name.focus();
        return false;
    }
    else if(role==""){
        alert("input role");
        document.form.role.focus();
        return false;
    }
}