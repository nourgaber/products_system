<?php

namespace App\Http\Controllers\API;

use App\Events\ComplexOperationsEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product = $this->productRepository->createProduct($request->name, $request->price);
        return response()->json($product);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->getProducts();
        return response()->json($products);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Product = $this->productRepository->getProductById($id);
        return response()->json($Product);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
      $Product = $this->productRepository->updateProductById($id, $request->all());
      return response()->json($Product);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productRepository->deleteProductById($id);
        $response = ['message' => 'Product deleted'];
        return response($response, 200);
    }

    public function complexOperations(Request $request, $id){

        // main operations that must be done before response
        $Product = $this->productRepository->getProductById($id);
     // operations needs to be done but not necessary for response
     event(new ComplexOperationsEvent());
    }

}
