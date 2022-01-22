<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($category_id)
    {
        try {
            $category_product = Product::where('category_id',$category_id)
            ->paginate(20);
            
            return $this->returnWithSuccess('List all products inside category with number of products as total',$category_product);

        } catch (\Exception $ex) {
            return $this->returnWithError('Opps, operation failed! ',$ex->getMessage());
        }
    }
}
