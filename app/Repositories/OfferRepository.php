<?php

namespace App\Repositories;

use App\Models\Offer;


class OfferRepository
{
  


    /**
     * @param array $offerIds
     *
     * @return mixed
     */
    public function getOffersByProductsIds(array $productsIds)
    {
        $offers = Offer::whereIn('discount_product_id', $productsIds)->get();
        return $offers;
    }

    

}