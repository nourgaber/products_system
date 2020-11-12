<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CheckOutRequest;
use App\Repositories\CurrencyRepository;
use App\Repositories\OfferRepository;
use App\Repositories\ProductRepository;

class CartController extends Controller
{
    private $productRepository;
    private $offerRepository;
    private $currencyRepository;
    public function __construct(ProductRepository $productRepository, OfferRepository $offerRepository, CurrencyRepository $currencyRepository)
    {
        $this->productRepository = $productRepository;
        $this->offerRepository = $offerRepository;
        $this->currencyRepository = $currencyRepository;
    }


    }

