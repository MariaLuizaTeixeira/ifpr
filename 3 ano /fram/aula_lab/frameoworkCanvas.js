const body = document.getElementsByTagName("body")[0];
const canvas = document.createElement("canvas");
body.appendChild(canvas);
const ctx = canvas.getContext("2d");
const arco = document.querySelector("circulo")

const circulo = {
  x: 100,
  y: 100,
  r: 50,
  cor: "orange",
  desenhar:function (raio) {
    ctx.beginPath();
    ctx.arc(thhis.x, this.y, raio, 0, Math.PI * 2);
    ctx.fillStyle = this.cor;
    ctx.closePath();
  }
};

if(arco) {
  let raio = arco.getAttribute("raio");
  circulo.desenhar(raio);
}
