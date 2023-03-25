$(document).ready(function() {
    $('#fetch-btn').click(function() {
     
      $.ajax({
        url: 'php/profile.php',
        method: 'POST',
        data: { 
          uname: $('#username').val(), 
          pass: $('#password').val(),
          email: $('#email').val(),
          mobile: $('#mobile').val(),
          dob: $('#dob').val() 
        },
        success: function(data) {
          var response = JSON.parse(data);
          if (response.success) {
            $('#username').html(response.data.username);
            $('#password').html(response.data.password);
            $('#email').html(response.data.email);
            $('#mobile').html(response.data.mobile);
            $('#dob').html(response.data.dob);
          } else {
            $('#error-msg').html(response.message);
          }
        },
        error: function() {
          $('#error-msg').html('An error occurred ');
        }
      });
    });
  });
  