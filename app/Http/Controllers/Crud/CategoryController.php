<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $category = Category::withCount('products')->get()->toArray();
            return $this->returnWithSuccess('List all categories and the numbers of products inside each categories. ',$category);

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

            $category = Category::create($request->all());
            return $this->returnWithSuccess('Category created',$category, 201);

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
    public function show(Category $category)
    {
        try {
            return $this->returnWithSuccess('Single category data retrived by category_id',$category);
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
    public function update(Request $request, Category $category)
    {   
        try{
            $category->update($request->all());
            return $this->returnWithSuccess('Category updated',$category);

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
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return $this->returnWithSuccess('Category deleted',null);
        } catch (\Exception $ex) {
            return $this->returnWithError('Opps, operation failed! ',$ex->getMessage());
        }
    }
}
