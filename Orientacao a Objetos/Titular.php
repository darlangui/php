<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    private function validaNome(string $nomeTitular){
        if(strlen($nomeTitular) < 5){
            echo 'nome precisa ter pelo menos 5 caracteres';
            exit();
        }
    }

    public function recupraNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuparaCpf();
    }
}