<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User\BlogModel;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
            'blog' => BlogModel::where('user_id', auth()->user()->id)->get()
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'kategori' => 'required',
            'tag' => 'required',
            'penulis' => 'required',
            'gambar' => 'required'
        ]);
        // return dd($validatedData);

        $validatedData['user_id'] = auth()->user()->id;
        BlogModel::create($validatedData);

        return redirect('/admin')->with('success', 'Your post has been added!');
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = BlogModel::find($id);
        return view('admin.edit', [
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = BlogModel::find($id);

        $rules = [
            'judul' => 'required',
            'konten' => 'required',
            'kategori' => 'required',
            'tag' => 'required',
            'penulis' => 'required',
            'gambar' => 'required'
        ];
        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        BlogModel::where('id', $blog->id)->update($validatedData);
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlogModel::destroy($id);
        return redirect('/admin')->with('success', 'Your post has been successfully deleted');
    }
}
