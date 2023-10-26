<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('template.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();

        return view('template.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:1',
        ]);

            $data = $request->all();
            $data['slug'] = Str::slug($request -> title);
            $data['user_id'] = Auth::id();
            $data['news_image'] = $request -> file('news_image') -> store('news');
            $data['views'] = 0;

            News::create($data);
            Alert::success('Success', 'News Added Successfully');
            return redirect()->route('news.index');

            /*return redirect()->route('news.index')->with(['success' => 'Data Saved Successfully']);*/
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
        $news = News::find($id);
        $categories = Categories::all();


        return view('template.news.edit', [
            'news' => $news,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        /*$this->validate($request, [
            'title' => 'required|min:1',
        ]);*/

            if(empty($request->file('news_image'))){
                $news = News::find($id);
                $news -> update([
                    'title' => $request->title,
                    'body' => $request->body,
                    'slug' => Str::slug($request -> title),
                    'categoris_id' => $request->categories_id,
                    'user_id' => Auth::id(),
                    'is_active' => $request->is_active,
                    //$data['news_image'] = $request -> file('news_image') -> store('news');
                    'views' => 0,
                ]);
                Alert::info('Updated', 'News Updated Successfully');
                return redirect()->route('news.index');
                /*return redirect()->route('news.index')->with(['success' => 'Data Updated Successfully']);*/
            }
            else{
                $news = News::find($id);
                Storage::delete($news->news_image);    
                $news -> update([
                    'title' => $request->title,
                    'body' => $request->body,
                    'slug' => Str::slug($request -> title),
                    'categoris_id' => $request->categories_id,
                    'user_id' => Auth::id(),
                    'is_active' => $request->is_active,
                    'news_image' => $request -> file('news_image') -> store('news'),
                    'views' => 0,
                ]);
                Alert::info('Updated', 'News Updated Successfully');
                return redirect()->route('news.index');
                //return redirect()->route('news.index')->with(['success' => 'Data Updated Successfully']);
            }

            //News::create($data);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);

        Storage::delete($news->news_image); 

        $news->delete();

        Alert::warning('Deleted', 'News Deleted Successfully');
        /*return redirect()->route('news.index')->with(['success' => 'Data Deleted Successfully']);*/
        return redirect()->route('news.index');
    }
}
