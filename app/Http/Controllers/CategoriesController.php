<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        return view('template.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('template.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_categories' => 'required|min:1',
        ]);

        $categories = Categories::create([
            'name_categories' => $request -> name_categories,
            'slug' => Str::slug($request -> name_categories)
        ]);

            Alert::success('Success', 'Category Added Successfully');
            //return redirect()->route('categories.index')->with(['success' => 'Data Saved Successfully']);
            return redirect()->route('categories.index');

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
        $categories = Categories::find($id);

        return view('template.categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name_categories);
        
        $categories = Categories::findOrFail($id);
        $categories -> update($data);

        //return redirect() -> route('categories.index');
        Alert::info('Updated', 'Category Updated Successfully');
        //return redirect()->route('categories.index')->with(['success' => 'Data Updated Successfully']);
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Categories::find($id);

        $categories->delete();

        Alert::warning('Deleted', 'Category Deleted Successfully');
        //return redirect()->route('categories.index')->with(['success' => 'Data Deleted Successfully']);
        return redirect()->route('categories.index');
    }
}
