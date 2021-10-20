// Stlye import
import "../styles/__main.scss";
import toggleFullScreen from "./functions";

document
  .getElementById("fullscreen-toggler")
  .addEventListener("click", toggleFullScreen);

document.addEventListener("fullscreenchange", () => {
  document.getElementById("fullscreen-toggler").classList.toggle("fs");
});
