div = document.getElementById("div");
function A() {
  if (div.style.display === "none") {
    div.style.display = "block";
    console.log(div.style.display);
  } else {
    div.style.display = "none";
    console.log(div.style.display);
  }
}
