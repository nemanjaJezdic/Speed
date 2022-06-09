<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Models\ImageUpload;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class AdminProductsCon extends BaseCon
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    const limit=6;

    public function index()
    {
        $this->data['products'] = Products::paginate(self::limit);

        return view("admin.products.index", $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreProduct $request)
    {
        DB::beginTransaction();

        try
        {
            $image=ImageUpload::upload($request->image);

            Products::create([
                'name' => $request->name,
                'description' => $request->description,
                'image'=>$image,
                'price'=>$request->price,
                'is_active'=>$request->is_active
            ]);

            DB::commit();

            return redirect()->route('products.create')->with('success', 'Product added successfully!');
        }
        catch(Exception $e)
        {
            Log::error($e->getMessage());

            DB::rollBack();

            return redirect()->route('products.create')->with('errorMessage', 'A server error occurred!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['product'] = Products::find($id);

        return view('admin.products.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateProduct $request, $id)
    {
        $product = Products::find($id);

        DB::beginTransaction();

        try
        {
            $product->update($request->except('image'));

            if($request->has('image')) {
                $newImage = ImageUpload::upload($request->image);
                ImageUpload::delete($product, 'image');
                $product->image = $newImage;
                $product->save();
            }

            DB::commit();

            return redirect()->route('products.index')->with('success', 'Product updated successfully!');

        }
        catch(Exception $e) {
            Log::error($e->getMessage());

            DB::rollBack();

            // dd($e->getMessage());
            return redirect()->route('products.edit', $product->id)->with('errorMessage', 'A server error occurred!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try
        {
            $product = Products::find($id);


            $product->delete();

            File::delete(public_path().'/assets/images/'.$product->image);

            DB::commit();

            return redirect()->route('products.index')->with('success', 'Product deleted successfully!');

        }
        catch(Exception $e)
        {
            Log::error($e->getMessage());



            DB::rollBack();

            return redirect()->route('products.index')->with('errorMessage', 'Product can not be deleted, because it is contained in orders!');
        }
    }
}
