import { initThree } from "./_init";
import WEBGL from "./webGL-test";

// Check if webGL is available

window.addEventListener("load", () => {
  const canvas = document.querySelector("canvas.webgl");

  if (canvas != null) {
    if (WEBGL.isWebGLAvailable()) {
      // Success - webGL enabled
      console.log("Cool! Your browser supports webGL!:)");
      initThree();
    } else {
      const warning = WEBGL.getWebGLErrorMessage();
      console.log(warning);
    }
  }
});
