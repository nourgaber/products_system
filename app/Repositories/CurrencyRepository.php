<?php

namespace App\Repositories;

use App\Models\Currency;


class CurrencyRepository
{
  


    /**
     * @param array $offerIds
     *
     * @return mixed
     */
    public function getCurrencysByid($curencyId)
    {
       return Currency::find($curencyId);
    }

    

}