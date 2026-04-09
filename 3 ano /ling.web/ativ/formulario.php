<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Form. Filmes</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="icon"
      href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlv7o_BxUERqUSZkxD0n4HacIFe8mnJAHU5w&s"
    />
  </head>
  <body>
    <div
      class="container d-flex justify-content-center align-items-start vh-100 pt-5"
    >
      <div class="w-100 border rounder p-4" style="max-width: 500px">
        <h1 class="mb-3 text-center">Formulário de filmes</h1>

        <form action="card.php" method="POST">
          <div class="mb-3">
            <label>Nome do filme</label>
            <input name="nome" type="text" />
          </div>

          <div class="mb-3">
            <label class="form-label">Nota</label>
            <select name="nota">
              <option selected>Selecione a nota do filme (1 a 5)</option>
              <option value="1">★</option>
              <option value="2">★★</option>
              <option value="3">★★★</option>
              <option value="4">★★★★</option>
              <option value="5">★★★★★</option>
            </select>
          </div>

          <div class="mb-3">
            <label>URL da imagem</label>
            <div class="input-group">
              <input name="url" type="text"/>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Gênero</label>
            <select name="genero">
              <option selected>Selecione o gênero do filme</option>
              <option value="terror">Terror</option>
              <option value="comedia">Comédia</option>
              <option value="acao">Ação</option>
              <option value="romance">Romance</option>
              <option value="drama">Drama</option>
              <option value="fic.cientifica">Ficção Científica</option>
              <option value="infantil">Infantil</option>
              <option value="doc">Documentário</option>
            </select>
          </div>

          <div>
            <label>Década do filme</label>
            <input type="range" name="decada" min="1" max="11" step="1" />

            <div class="d-flex justify-content-between">
              <span>20s</span>
              <span>30s</span>
              <span>40s</span>
              <span>50s</span>
              <span>60s</span>
              <span>70s</span>
              <span>80s</span>
              <span>90s</span>
              <span>2000s</span>
              <span>2010s</span>
              <span>2020s</span>
            </div>
          </div>

          <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
