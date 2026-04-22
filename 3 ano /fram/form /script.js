const form = document.getElementsByTagName("form")[0];
let x = 1;

function novoCampo(){
    let label = document.createElement("label");
    label.innerText = "Rótulo";

    let input = document.createElement("input");
    input.setAttribute("type", "text");
    input.setAttribute("name", "rotulo" + x);

    let label1 = document.createElement("label");
    label1.innerText = " Tipo ";

    let select = document.createElement("select");
    select.setAttribute("name", "tipo" + x);

    let vet = {
        text: "Texto",
        number: "Número",
        date: "Data",
        select: "Opções (Select)",
        textarea: "Área de texto"
    };
    for(let chave in vet){
        let opt = document.createElement("option");
        opt.value = chave;
        opt.innerText = vet[chave];
        select.appendChild(opt);
    }

    let label2 = document.createElement("label");
    label2.innerText = " Opções (separar por vírgula): ";

    let inputOpcoes = document.createElement("input");
    inputOpcoes.setAttribute("type", "text");
    inputOpcoes.setAttribute("name", "opcoes" + x);
    inputOpcoes.setAttribute("placeholder", "ex: Sim,Não,Talvez");

    x++;

    let br = document.createElement("br");
    form.appendChild(label);
    form.appendChild(input);
    form.appendChild(label1);
    form.appendChild(select);
    form.appendChild(label2);
    form.appendChild(inputOpcoes);
    form.appendChild(br);
}

function visualizarForm(){
    const iframe = document.getElementById("preview");
    let doc = iframe.contentDocument || iframe.contentWindow.document;
    let html = "<form>";

    for(let i = 0; i < x; i++){
        let rotulo = document.getElementsByName("rotulo" + i)[0].value;
        let tipo   = document.getElementsByName("tipo" + i)[0].value;

        html += "<label>" + rotulo + "</label> ";

        if(tipo === "select"){
            let texto  = document.getElementsByName("opcoes" + i)[0].value;
            let opcoes = texto.split(",");
            html += "<select>";
            for(let op of opcoes){
                html += "<option>" + op.trim() + "</option>";
            }
            html += "</select><br>";

        } else if(tipo === "textarea"){
            html += "<textarea name='" + rotulo + "'></textarea><br>";

        } else {
            html += "<input type='" + tipo + "' name='" + rotulo + "'><br>";
        }
    }

    html += "</form>";
    doc.open();
    doc.write(html);
    doc.close();
}
