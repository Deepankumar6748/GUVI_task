  $(document).ready(function() {
  $("#submit").click(function() {
    var values = {
  'username': document.getElementById('username').value,
  'password': document.getElementById('password').value,
  'email': document.getElementById('email').value,
  'dob': document.getElementById('dob').value,
  'mobile': document.getElementById('mobile').value,
};

$.ajax({
  url: "php/register.php",
  type: "POST",
  
  data:values,
  success: function(result){
alert(result);
window.location.href = '/GUVI/login.html';
}
});
  })
});
