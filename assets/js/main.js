$(document)
.on("submit", "form.js-register, form.js-login", function(event) {
	event.preventDefault();

  var _form = $(this);
  var _error = $(".js-error", _form);
  var data = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val()
  };

  if (data.email.length < 10) {
    _error.text("Short email!").show();
    return false;
  }else if(data.password.length < 8){
    _error.text("Weak password!").show();
    return false;
  }

  //code get throw
  _error.hide();

  console.log(data);


  return false;
})
