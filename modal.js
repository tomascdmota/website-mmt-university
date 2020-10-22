var modal = document.getElementById("myModal");
modal.style.display = "none";
// Get the button that opens the modal
var btn = document.getElementById("myBtn");



window.onclick = function (event) {
  if(event.target.id == "myBtn") {
    modal.style.display = "block";
    btn.style.display = 'none'
  }
  else if (modal !== event.target && !modal.contains(event.target)) {
    modal.style.display = "none";
    btn.style.display = 'block'
  }
}
