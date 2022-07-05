<?php

namespace  App\Controller;

class Impot 
{
    // public function __construct($qf, $price)
    // {
    //     $this->qf = $qf;
    //     $this->price = $price;
        
    // }
    //     // $this->tranche1 = $tranche1;
    //     // $this->tranche2 = $tranche2;
    //     // $this->tranche3 = $tranche3;

    private $bareme =[
        [10225,0],
        [26070,0.11],
        [7454, 0.3],
        [160336, 0.41],
        [160337,0.45],
    ];

    public function computeImpot()
    {
        $this->price / 1; // MONTANTE DA CALCOLARE

        // CASO Import INFERIORE A 0
        if ($this->price < 0) {
            throw new \LogicException('La TVA ne peut pas être négative.');
        }

        /// CASO NON IMPONIBILE
        if ($this->price < 10225) {
            throw new \LogicException('Non imposabile');
        }
    }

    public function calcul(int $netImposable, float $qf)
    {
        $net = $netImposable / $qf;

        // if($netImposable <= 10225) 
        if ($net <= $this->barame[0][0])
        {
            return 0;
        }
            elseif ($net <= this->barame[1][0])
            {
                $result=($net - $this->barame[0][0]) * 0.11;

            }elseif ($net <= 74545)
            {
                $result=((26070 - 10226) * 0.11) + ($net -26071) *0.3;
            }
            elseif ($net <= 160336)
            {
                $result=((26070 - 10226) * 0.11) + (74545 -26071) *0.3 + (($net - 74546) * 0.41);
            }
        
        return round($result, 0 ,PHP_ROUND_HALF_UP);
    }

    private function tranche1()
    {
        return 0;
    }

    private function tranche2()
    {
        return ("Hello");
    }

} 
