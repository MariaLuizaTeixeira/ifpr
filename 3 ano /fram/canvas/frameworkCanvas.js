const body = document.getElementsByTagName("body")[0];
const canvas = document.createElement("canvas");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
body.appendChild(canvas);
const ctx = canvas.getContext("2d");
const arco = document.getElementsByTagName("arco");
const retangulo = document.getElementsByTagName("retangulo");

const objArco = {
    x: null, y: null, raio: null, rad: null, cor: null,
    velocidade: 10,
    desenhar: function () {
        for (let a of arco) {
            this.raio = a.getAttribute("raio") || a.setAttribute("raio", 50);
            this.x = parseInt(a.getAttribute("posX")) || a.setAttribute("posX", 100);
            this.y = parseInt(a.getAttribute("posY")) || a.setAttribute("posY", 100);
            this.cor = a.getAttribute("cor") || a.setAttribute("cor", "blue");
            grau = parseInt(a.getAttribute("graus") || a.setAttribute("graus", 360));
            this.rad = grau * (Math.PI / 180);

            ctx.beginPath();
            ctx.arc(this.x, this.y, this.raio, 0, this.rad, true);
            ctx.fillStyle = this.cor;
            ctx.fill();
            ctx.closePath();
            let moverArco = a.getAttribute("mover");
            if (moverArco) {
                this.mover(a, moverArco);
            }
        }
    },
    mover: function (a, moverArco) {
        if (moverArco === "acima") this.y -= this.velocidade;
        if (moverArco === "abaixo") this.y += this.velocidade;
        if (moverArco === "esquerda") this.x -= this.velocidade;
        if (moverArco === "direita") this.x += this.velocidade;
        a.setAttribute("posX", this.x);
        a.setAttribute("posY", this.y);
        let altura = canvas.height;
        let largura = canvas.width;
        if (this.y > altura) {
            a.setAttribute("posY", this.raio);
        }
        if (this.y <= 0) {
            a.setAttribute("PosY", altura);
        }
        if (this.x > largura) {
            a.setAttribute("posX", this.raio);
        }
        if (this.x <= 0) {
            a.setAttribute("posX", largura);
        }
    },
    moverComTeclado: function (el) {
        for (let a of arco) {
            if (a.getAttribute("interacao")) {
                if (el.key === "ArrowUp") {
                    this.y -= this.velocidade;
                }
                if (el.key === "ArrowDown") {
                    this.y += this.velocidade;
                }
                if (el.key === "ArrowLeft") {
                    this.x -= this.velocidade;
                }
                if (el.key === "ArrowRight") {
                    this.x += this.velocidade;
                }
                a.setAttribute("posX", this.x);
                a.setAttribute("posY", this.y);
            }
        }
    }
};

const objRetangulo = {
    x: null, y: null, largura: null, altura: null, cor: null,
    velocidade: 10,
    desenhar: function () {
        for (let r of retangulo) {
            this.x = parseInt(r.getAttribute("posX")) || r.setAttribute("posX", 100);
            this.y = parseInt(r.getAttribute("posY")) || r.setAttribute("posY", 100);
            this.largura = parseInt(r.getAttribute("largura")) || r.setAttribute("largura", 50);
            this.altura = parseInt(r.getAttribute("altura")) || r.setAttribute("altura", 50);
            this.cor = r.getAttribute("cor") || r.setAttribute("cor", "red");

            ctx.beginPath();
            ctx.rect(this.x - this.largura / 2, this.y - this.altura / 2, this.largura, this.altura);
            ctx.fillStyle = this.cor;
            ctx.fill();
            ctx.closePath();

            let moverRet = r.getAttribute("mover");
            if (moverRet) {
                this.mover(r, moverRet);
            }
        }
    },
    mover: function (r, moverRet) {
        if (moverRet === "acima") this.y -= this.velocidade;
        if (moverRet === "abaixo") this.y += this.velocidade;
        if (moverRet === "esquerda") this.x -= this.velocidade;
        if (moverRet === "direita") this.x += this.velocidade;
        r.setAttribute("posX", this.x);
        r.setAttribute("posY", this.y);
        if (this.y > canvas.height) r.setAttribute("posY", 0);
        if (this.y < 0) r.setAttribute("posY", canvas.height);
        if (this.x > canvas.width) r.setAttribute("posX", 0);
        if (this.x < 0) r.setAttribute("posX", canvas.width);
    }
};

canvas.addEventListener("click", function (e) {
    let todasFormas = document.querySelectorAll("arco, retangulo");
    for (let forma of todasFormas) {
        if (forma.getAttribute("seguir-clique") !== null) {
            forma._clicX = e.clientX;
            forma._clicY = e.clientY;
        }
    }
});

function moverParaClique() {
    let todasFormas = document.querySelectorAll("arco, retangulo");
    for (let forma of todasFormas) {
        if (forma.getAttribute("seguir-clique") === null) continue;
        if (!forma._clicX) continue;

        let x = parseInt(forma.getAttribute("posX"));
        let y = parseInt(forma.getAttribute("posY"));
        let dx = forma._clicX - x;
        let dy = forma._clicY - y;
        let dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < 5) continue;

        let vel = 5;
        forma.setAttribute("posX", x + (dx / dist) * vel);
        forma.setAttribute("posY", y + (dy / dist) * vel);
    }
}

function calcularDistancia(a, b) {
    let ax = parseInt(a.getAttribute("posX"));
    let ay = parseInt(a.getAttribute("posY"));
    let bx = parseInt(b.getAttribute("posX"));
    let by = parseInt(b.getAttribute("posY"));
    return Math.sqrt((ax - bx) ** 2 + (ay - by) ** 2);
}

function raioForma(el) {
    if (el.tagName.toLowerCase() === "arco") {
        return parseInt(el.getAttribute("raio")) || 20;
    }
    let larg = parseInt(el.getAttribute("largura")) || 40;
    let alt = parseInt(el.getAttribute("altura")) || 40;
    return Math.sqrt((larg / 2) ** 2 + (alt / 2) ** 2);
}

function corAleatoria() {
    return "hsl(" + Math.floor(Math.random() * 360) + ", 80%, 55%)";
}

function inverterDirecao(el) {
    let mover = el.getAttribute("mover");
    if (mover === "acima") el.setAttribute("mover", "abaixo");
    else if (mover === "abaixo") el.setAttribute("mover", "acima");
    else if (mover === "esquerda") el.setAttribute("mover", "direita");
    else if (mover === "direita") el.setAttribute("mover", "esquerda");
}

function colisao() {
    let vetor = document.querySelectorAll("arco, retangulo");
    for (let i = 0; i < vetor.length; i++) {
        for (let j = i + 1; j < vetor.length; j++) {
            let a = vetor[i];
            let b = vetor[j];
            let dist = calcularDistancia(a, b);
            if (dist < raioForma(a) + raioForma(b)) {
                let compA = a.getAttribute("comportamento");
                let compB = b.getAttribute("comportamento");

                if (compA === "destroi" || compB === "destroi") {
                    a.setAttribute("destruido", "true");
                    b.setAttribute("destruido", "true");
                } else if (compA === "mudaCor" || compB === "mudaCor") {
                    a.setAttribute("cor", corAleatoria());
                    b.setAttribute("cor", corAleatoria());
                }

                inverterDirecao(a);
                inverterDirecao(b);
            }
        }
    }
}

function desenharFormas() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let a of document.querySelectorAll("arco, retangulo")) {
        if (a.getAttribute("destruido") === "true") {
            a.style.display = "none";
            a.setAttribute("posX", -9999);
        }
    }

    if (arco) objArco.desenhar();
    if (retangulo) objRetangulo.desenhar();
    moverParaClique();
    colisao();
    requestAnimationFrame(desenharFormas);
}

document.addEventListener("keydown", function (e) {
    objArco.moverComTeclado(e);
})
desenharFormas();
