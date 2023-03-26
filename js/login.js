$(document).ready(function() {
  $("#submit").click(function() {
    var values = {
  'username': document.getElementById('username').value,
  'password': document.getElementById('password').value,


};

$.ajax({
  url: "php/login.php",
  type: "POST",
  
  data:values,
  success: function(result){
if(result){

  if(result ==  document.getElementById('username').value)
  {window.localStorage.setItem("user",result);
  window.location.href = "profile.html";
 }
 else {
  
  window.location.href = "index.html";
 }
} else {
 alert("Incorrect Password");
}

}
});

  })
});
