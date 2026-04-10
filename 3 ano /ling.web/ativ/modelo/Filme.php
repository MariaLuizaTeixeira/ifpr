<?php

class Filme{
    private string $nome;
    private int $nota;
    private string $url_imagem;
    private string $genero;
    private int $decada;

    public function converterNumeroParaDecada(int $decada) {
        switch ($decada) {
            case 1:
                return "20";
            
            case 2:
                return "30";

            case 3:
                return "40";

            case 4:
                return "50";

            case 5:
                return "60";

            case 6:
                return "70";

            case 7:
                return "80";

            case 8:
                return "90";

            case 9:
                return "2000";

            case 10:
                return "2010";

            case 11:
                return "2020";
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function setNota(int $nota)
    {
        $this->nota = $nota;

        return $this;
    }

    public function getUrl_imagem()
    {
        return $this->url_imagem;
    }

    public function setUrl_imagem(string $url_imagem)
    {
        $this->url_imagem = $url_imagem;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero(string $genero)
    {
        $this->genero = $genero;

        return $this;
    }
 
    public function getDecada()
    {
        return $this->decada;
    }

    public function setDecada(int $decada)
    {
        $this->decada = $decada;

        return $this;
    }
}
