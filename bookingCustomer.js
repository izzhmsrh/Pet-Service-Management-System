function check(){
    var Cust_ID=document.form.Cust_ID.value;
    var service_ID=document.form.service_ID.value;
    var cust_Petname=document.form.cust_Petname.value;
    var no_Cat=document.form.no_Cat.value;
    var book_Date=document.form.book_Date.value;
    var book_Time=document.form.book_Time.value;
   

    if(Cust_ID==""){
        alert("input id number");
        document.form.cust_ID.focus();
        return false;
    }
    else if(isNaN(Cust_ID)){
        alert("please enter in number only");
        document.form.Cust_ID.focus();
        return false;
    }
    else if(service_ID==""){
        alert("input username");
        document.form.service_ID.focus();
        return false;
    }
    else if(cust_Petname==""){
        alert("input password");
        document.form.cust_Petname.focus();
        return false;
    }
    else if(no_Cat==""){
        alert("input Number");
        document.form.no_Cat.focus();
        return false;
    }
    else if(book_Date==""){
        alert("input name");
        document.form.book_Date.focus();
        return false;
    }
    else if(book_Time==""){
        alert("input email");
        document.form.book_Time.focus();
        return false;
    }
}