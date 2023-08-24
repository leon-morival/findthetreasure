function showModal(message) {
  // Display the modal with the given message
  // You can use libraries like Bootstrap or your custom modal implementation
  alert(message); // Replace this with your modal code
}
// script.js
document.addEventListener("keydown", function (event) {
  let direction = null;
  console.log(event);
  switch (event.key) {
    case "ArrowUp":
      direction = 0;
      break;
    case "ArrowRight":
      direction = 1;
      break;
    case "ArrowDown":
      direction = 2;
      break;
    case "ArrowLeft":
      direction = 3;
      break;
  }

  if (direction !== null) {
    // Make an AJAX call to your controller using the direction
    window.location.href =
      "/findthetreaser/controllers/controller.php?direction=" + direction;
  }
});
