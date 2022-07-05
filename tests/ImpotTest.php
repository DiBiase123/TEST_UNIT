<?php

namespace App\tests;

use App\Controller\Impot;
use PHPUnit\Framework\TestCase;

class ImpotTest extends TestCase
{
    public function test_compute_Impot()
    {
        $qf= 1;
        $netImposable= 32000;
        $impot = new Impot(); //Istancier l'object Product avec le 3 param

        $result = $impot->computeImpot();
        $impot->calcul($netImposable,$qf);

        $this->assertSame(3522, $result); // modificare 1 parametro per creare l'errore

        //1 para: valeur attendue (0,055 * 10)
        //2 para: $result qui contiene le resulat execute
    }



}