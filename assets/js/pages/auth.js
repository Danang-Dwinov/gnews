function button_option(){
  const optionLogin = document.getElementById("opsi-login");
  const optionSignup = document.getElementById("opsi-signup");
  
  const formLogin = document.getElementById("form-login");
  const formSignup = document.getElementById("form-signup");
  
  optionLogin.addEventListener("click", 
  () => {
    formLogin.style.display="block";
    formSignup.style.display="none";
    
    optionLogin.style.backgroundColor="red";
    optionSignup.style.backgroundColor="white";
  });
  optionSignup.addEventListener("click", 
  () => {
    formLogin.style.display="none";
    formSignup.style.display="block";
    
    optionLogin.style.backgroundColor="white";
    optionSignup.style.backgroundColor="red";
  });
}
button_option();

function showPassword(){
  const x = document.getElementById("signup-password-input");
  const y = document.getElementById("login-password-input");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}