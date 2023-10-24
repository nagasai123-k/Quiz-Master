function validate(){
  const uname = document.getElementById('username');
  const pass = document.getElementById('password');
  const email= document.getElementById('email');

  if(uname.value.trim()==""){
    alert("Name required");
    uname.style.border = "solid 3px red"
    document.getElementById("inval").style.visibility="visible";
    return false;
  }
  else if(pass.value.trim()==""){
    // alert("Password required");
    pass.style.border = "solid 5px red";
    document.getElementById("inval").style.visibility="visible";
    return false;
  }
  else if(pass.value.trim().length<5){
    alert("Password too short");
    pass.style.border = "solid 5px orange";
    document.getElementById("inval").style.visibility="visible";
    return false;
  }
  else{
    return true;
  }
}