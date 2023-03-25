  // session maintanence and authentication
  function login() {
    console.log(window.localStorage.getItem('user'));
    if(window.localStorage.getItem('user') != null){
     window.location.href = "profile.html";
    }

    else {
      window.location.href = "login.html"; 
    }
  }
  function register() {
    if(window.localStorage.getItem('user') != null){
      window.location.href = "profile.html";
    }

    else {
      window.location.href = "register.html"; 
    }
  }