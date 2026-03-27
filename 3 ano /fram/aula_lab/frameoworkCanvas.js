const body = document.getElementsByTagName("body")[0];
const canvas = document.createElement("canvas");
body.appendChild(canvas);
const ctx = canvas.getContext("2d");

const circulo = {
  x: 100,
  y: 100,
  r: 50,
  desenhar:function () {
    ctx.beginPath();
    ctx.arc(thhis.x, this.y, this.r, 0, Math.PI * 2);
    ctx.fillStyle="orange";
    ctx.closePath();
  }
};

if(document.querySelector("circulo")) circulo.desenhar();
