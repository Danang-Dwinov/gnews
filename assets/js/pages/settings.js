function textHeader(){
  document.getElementById("text").textContent="Settings";
}
textHeader();

function btnDeleteAcc() {
  return confirm("Are you sure you want to delete your account?");
}

function btnLogout() {
  return confirm("Are you sure you want to log out of your account ?");
}