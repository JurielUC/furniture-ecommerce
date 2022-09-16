function preventBack() {
    window.history.forward(); 
}
setTimeout("preventBack()", 0);
window.onunload = function () { null };

//for show password
function showPass() {
    var x = document.getElementById("psw");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }