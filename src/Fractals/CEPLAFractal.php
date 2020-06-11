<?php

namespace Atiladanvi\CepRepository\Fractals;

use Atiladanvi\CepRepository\Contracts\FractalContract;

class CEPLAFractal extends FractalAbstract implements FractalContract
{
    public function transform($address): array
    {
        return [
            'cep' => $address->cep,
            'estado' => $address->uf,
            'municipio' => $address->cidade,
            'bairro' => $address->bairro,
            'logradouro' => $address->logradouro,
        ];

    }
}
