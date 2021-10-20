import { GUI } from "three/examples/jsm/libs/dat.gui.module";
// https://sbcode.net/threejs/dat-gui/

export function initGUI() {
  const gui = new GUI({ width: 300 });
  gui.close();
  gui.hide();
  return gui;
}

export const guiVariables = {
  baseColor: 0xffffff,
  lightColor: 0xffffff,
};
