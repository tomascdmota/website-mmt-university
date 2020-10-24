//Get the modal
var modal = document.getElementById("myModal");

var modal_container  = document.getElementById("modalContainer")
modal_container.style.display = "none";


window.onclick = function (event) {
  console.log(event.target)
  if(event.target.id == "myBtn") {
    modal_container.style.display = "flex"
  }
  else if (modal !== event.target && !modal.contains(event.target)) {
    modal_container.style.display = "none";
  }
}
