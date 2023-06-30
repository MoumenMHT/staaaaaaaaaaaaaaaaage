function showForm() {
  var overlay = document.getElementById("overlay");
  var myForm = document.getElementById("myForm");

  overlay.classList.add("visible");
  myForm.classList.add("visible");
}


var overlay = document.getElementById("overlay");
var myForm = document.getElementById("myForm");

overlay.addEventListener("click", function () {
  overlay.classList.remove("visible");
  myForm.classList.remove("visible");
});

window.addEventListener("click", function (event) {
  if (!myForm.contains(event.target) && !event.target.classList.contains("image-button")) {
      overlay.classList.remove("visible");
      myForm.classList.remove("visible");
  }
});


function showSessionSelect() {
  var voyageSelect = document.getElementById("voyageSelect");
  var sessionSelectContainer = document.getElementById("sessionSelectContainer");

  if (voyageSelect.value === "Turkey" || voyageSelect.value === "Spain" || voyageSelect.value === "Omra") {
    sessionSelectContainer.style.display = "block";
  } else {
    sessionSelectContainer.style.display = "none";
  }
}

// Check the initial value of "voyage" select on page load
window.addEventListener("DOMContentLoaded", function () {
  showSessionSelect();
});

