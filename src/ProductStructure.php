<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $products = ProductStructure::products;

        $newA = [];
        foreach ($products as $value) {
            $value = explode('-', $value, 2);
            $color = $value[0];
            $size = $value[1];

            /*----------------------------------------------------------------
                1. VERIFICA SE EXISTE UMA COR COMO KEY NO ARRAY PRINCIPAL
            CASO NÃO EXISTA CRIA UMA KEY.
                2. CASO JÁ EXISTA É VERIFICADO SE JÁ EXISTE O TAMANHO NO ARRAY
            CASO EXISTA É INCREMENTADO 1, CASO CONTRARIO GERA UM NOVO.
            ----------------------------------------------------------------*/

            if (!array_key_exists($color, $newA)) {
                $newA[$color] = [$size => 1];
            } else {
                if (!array_key_exists($size, $newA[$color])) {
                    $newA[$color][$size] = 1;
                } else {
                    $newA[$color][$size]++;
                }
            }
        }

        return $newA;
    }
}
