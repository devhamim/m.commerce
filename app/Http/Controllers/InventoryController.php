<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Color;
use App\Models\Inventory;
use App\Models\size;
use Illuminate\Http\Request;
use Str;
use Image;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();
        $sizes = size::all();
        $inventorys = Inventory::all();
        $attributes = Attribute::all();
        return view('backend.product.attributelist',[
            'colors'=>$colors,
            'sizes'=>$sizes,
            'inventorys'=>$inventorys,
            'attributes'=>$attributes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = Color::all();
        $sizes = size::all();
        return view('backend.product.attribute',[
            'colors'=>$colors,
            'sizes'=>$sizes,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->all();
        $rules = [
            'title' => 'required|string|max:255',
            'sku' => 'required|string|max:255|unique:inventories',
            'brand' => 'nullable|string|max:255',
            'price.*' => 'required',
            'sell_price.*' => 'nullable',
            'quantity.*' => 'required',
            'color_id.*' => 'nullable',
            'size_id.*' => 'nullable',
            'weight.*' => 'nullable',
            'image.*' => 'required|image|max:2048',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['slug'] = Str::lower(str_replace(' ','-',$request->name )) ;

        $mainInventory = Inventory::create([
            'title' => $validatedData['title'],
            'sku' => $validatedData['sku'],
            'brand' => $validatedData['brand'] ?? null,
            'slug' => $validatedData['slug'],
        ]);

        foreach ($validatedData['price'] as $key => $price) {
            $inventory = new Attribute();
            $inventory->inventorie_id = $mainInventory->id;
            $inventory->price = $price;
            $inventory->sell_price = $validatedData['sell_price'][$key] ?? null;
            $inventory->quantity = $validatedData['quantity'][$key];
            $inventory->color_id = $validatedData['color_id'][$key] ?? null;
            $inventory->size_id = $validatedData['size_id'][$key] ?? null;
            $inventory->weight = $validatedData['weight'][$key] ?? null;

            $image = $validatedData['image'][$key];
            $extension = $image->getClientOriginalExtension();
            $fileName = Str::random(5) . rand(100000, 999999) . '.' . $extension;
            Image::make($image)->resize(600, 600)->save(public_path('uploads/product/'.$fileName));
            $inventory->image = $fileName;
            $inventory->save();
        }

        return back()->with('success', 'Attribute created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $inventory = Inventory::find($id);
        $attributes = Attribute::where('inventorie_id', $inventory->id)->get();

        foreach($attributes as $attribute){
            $filePath = public_path('uploads/product/'. $attribute->image);
                if(file_exists($filePath) && is_file($filePath)){
                    unlink($filePath);
                }

            $attribute->delete();
        }


        $inventory->delete();
        return back()->with('warning', 'Delete Successfully');
    }
}
