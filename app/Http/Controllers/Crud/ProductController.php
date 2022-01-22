<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try {

            $products = Product::query();

            // search based on title & description
            if($search = $request->search){
                $products->whereRaw("title LIKE '%". $search . "%'")->orWhereRaw("description LIKE '%". $search . "%'");
            }

            // limit per page with pagination
            $limit = $request->limit;
            if(!isset($limit)) $limit = 20;//if limit not setted then defalut limt will be 20 for pagination

            $products = $products->paginate($limit);

            return $this->returnWithSuccess('All products',$products);

        } catch (\Exception $ex) {
            return $this->returnWithError('Opps, operation failed! ',$ex->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $product = Product::create($request->all());
            return $this->returnWithSuccess('Product created',$product, 201);

        } catch (\Exception $ex) {
            return $this->returnWithError('Opps, operation failed! ',$ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        try {
            return $this->returnWithSuccess('Single product data retrived by product_id',$product);
        } catch (\Exception $ex) {
            return $this->returnWithError('Opps, operation failed! ',$ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        try {
            $product->update($request->all());
            return $this->returnWithSuccess('Product updated',$product);

        } catch (\Exception $ex) {
            return $this->returnWithError('Opps, operation failed! ',$ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try{
            $product->delete();
            return $this->returnWithSuccess('Product deleted',null);
        }catch(\Exception $ex){
            return $this->returnWithError('Opps, operation failed !', $ex->getMessage());
        }
    }
}
