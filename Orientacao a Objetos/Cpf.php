<?php

class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }

    public function validaCpf(string $cpf)
    {
        if(strlen($cpf) < 11){
            echo 'cof tem menos de 11 caracteres';
            exit();
        }
    }

    public function recuparaCpf(): string
    {
        return $this->cpf;
    }
}