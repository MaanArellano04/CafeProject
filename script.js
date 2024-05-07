window.onload = function () {
    var inputs = document.querySelectorAll(".info-input");
    inputs.forEach(function (input) {
      input.style.animation = "slideInFromLeft 0.5s ease-out";
    });
  };