<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
    public function recuperaCpf(): Cpf
    {
        return $this->cpf->recuparaCpf();
    }

    protected function validaNome(string $nomeTitular){
        if(strlen($nomeTitular) < 5){
            echo 'nome precisa ter pelo menos 5 caracteres';
            exit();
        }
    }



}