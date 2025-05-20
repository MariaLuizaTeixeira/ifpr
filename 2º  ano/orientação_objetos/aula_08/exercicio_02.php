<?php

class Livro {
    private $genero;
    private $autor;
    private $titulo;
    private $nPaginas;

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getNPaginas()
    {
        return $this->nPaginas;
    }

    public function setNPaginas($nPaginas)
    {
        $this->nPaginas = $nPaginas;

        return $this;
    }
}

$livro1 = new Livro();
$livro1->setTitulo(readline("Insira o título do livro:\n"));
$livro1->setAutor(readline("Insira o autor do livro:\n"));
$livro1->setGenero(readline("Insira o genero do livro:\n"));
$livro1->setNPaginas(readline("Insira o número de páginas do livro:\n"));

$livro2 = new Livro();
$livro2->setTitulo(readline("Insira o título do livro:\n"));
$livro2->setAutor(readline("Insira o autor do livro:\n"));
$livro2->setGenero(readline("Insira o genero do livro:\n"));
$livro2->setNPaginas(readline("Insira o número de páginas do livro:\n"));

$livro3 = new Livro();
$livro3->setTitulo(readline("Insira o título do livro:\n"));
$livro3->setAutor(readline("Insira o autor do livro:\n"));
$livro3->setGenero(readline("Insira o genero do livro:\n"));
$livro3->setNPaginas(readline("Insira o número de páginas do livro:\n"));

if ($livro1->getNPaginas() > $livro2->getNPaginas()) {
    if ($livro1->getNPaginas() >) {
        # code...
    }
}
