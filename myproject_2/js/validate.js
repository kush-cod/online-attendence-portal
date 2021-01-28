
function validate(){
    var pattern = /^[a-zA-Z][a-zA-Z ]{2,}$/;
    var u = document.getElementById("name");
    if(!u.value.match(pattern)){
        alert("Enter First and Last Name");
        u.focus();
        return false;
   
    }else{
        var pattern = /^[0-9]{10}$/;
        var u = document.getElementById("rollno");
        if(!u.value.match(pattern)){
            alert(" Invalid Roll No. Enter 10 digit number only");
            u.focus();
            return false;
        
        }else{
            var pattern = /^[a-zA-Z]{1,}$/;
            var u = document.getElementById("branch");
            if(!u.value.match(pattern)){
            alert("Invalid Branch");
            u.focus();
            return false;

            }else{
                var pattern = /^[a-zA-Z]{1}$/;
                var u = document.getElementById("section");
                if(!u.value.match(pattern)){
                alert("Invalid Section");
                u.focus();
                return false;

                }else{
                    var pattern = /^[1-8]{1}$/;
                    var u = document.getElementById("year");
                    if(!u.value.match(pattern)){
                    alert("Invalid Semester");
                    u.focus();
                    return false;

                    }else{
                        var pattern = /^[a-zA-Z][a-zA-Z ]{2,}$/;
                        var u = document.getElementById("fname");
                        if(!u.value.match(pattern)){
                        alert("Enter First and Last Name");
                        u.focus();
                        return false;

                        }
                        else{
                            var pattern =/^[a-zA-Z][a-zA-Z ]{2,}$/;
                            var u = document.getElementById("mname");
                            if(!u.value.match(pattern)){
                                alert("Enter First and Last Name");
                                u.focus();
                                return false;

                            }else{
                                var pattern = /^[0-9]{10}$/;
                                var u = document.getElementById("fno");
                                if(!u.value.match(pattern)){
                                alert("Invalid Mobile Number");
                                u.focus();
                                return false;

                                }else{
                                    var pattern = /^[0-9]{10}$/;
                                    var u = document.getElementById("mno");
                                    if(!u.value.match(pattern)){
                                        alert("Invalid Mobile Number");
                                        u.focus();
                                        return false;
                                    }
                                    else{
                                        var pattern = /^[0-9]{10}$/;
                                        var u = document.getElementById("sno");
                                        if(!u.value.match(pattern)){
                                        alert("Invalid Mobile Number");
                                        u.focus();
                                        return false;
                                        }
                                        
                                        /*else{
                                            var pattern = /^[a-zA-Z0-9]{1,}$/;
                                            var u = document.getElementById("add");
                                            if(!u.value.match(pattern)){
                                            alert("Invalid Address");
                                            u.focus();
                                            return false;
                                            }*/
                                            else{
                                                var pattern = /^[a-zA-Z]{1,}$/;
                                                var u = document.getElementById("city");
                                                if(!u.value.match(pattern)){
                                                alert("Invalid City");
                                                u.focus();
                                                return false;
                                                }
                                                else{
                                                    var pattern = /^[a-zA-Z]{1,}$/;
                                                    var u = document.getElementById("state");
                                                    if(!u.value.match(pattern)){
                                                    alert("Invalid State");
                                                    u.focus();
                                                    return false;
                                                    }
                                                    else{
                                                        var pattern = /^[0-9]{6}$/;
                                                        var u = document.getElementById("pin");
                                                        if(!u.value.match(pattern)){
                                                        alert("Invalid Pincode");
                                                        u.focus();
                                                        return false;
                                                        }
                                                        else{
                                                            var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
                                                            var u = document.getElementById("email");
                                                            if(!u.value.match(pattern)){
                                                            alert("Invalid E-mail");
                                                            u.focus();
                                                            return false;
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
