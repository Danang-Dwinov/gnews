export function button_option(){
  const optionLogin = document.getElementById("option-login");
  const optionSignup = document.getElementById("option-signup");
  
  const formLogin = document.getElementById("form-login");
  const formSignup = document.getElementById("form-signup");
  
  optionLogin.addEvenListener("click", 
  () => {
    formLogin.style.display="block";
    formSignup.style.display="none";
    
    optionLogin.style.backgroundColor="red";
    optionSignup.style.backgroundColor="white";
  });
  optionSignup.addEvenListener("click", 
  () => {
    formLogin.style.display="none";
    formSignup.style.display="block";
    
    optionLogin.style.backgroundColor="white";
    optionSignup.style.backgroundColor="red";
  });
}