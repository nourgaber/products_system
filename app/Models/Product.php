<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    
     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cart()
    {
        return $this->belongsToMany('App\Models\CartProduct');
    }

      /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cartProduct()
    {
        return $this->belongsToMany('App\Models\CartProduct', 'product_id');
    }
  
     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function offer()
    {
        return $this->hasOne('App\Models\Offer', 'discount_product_id');
    }
}

