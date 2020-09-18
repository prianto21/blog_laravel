<?php

namespace App\Http\Controllers;
use App\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tags::paginate(10);
        return view('admin.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_tags'=>'required|max:20|min:3'
        ]);
        Tags::create([
            'nama_tags'=>$request->nama_tags,
            'slug_tags'=>Str::slug($request->nama_tags)
        ]);

        return redirect()->route('tag.index')->with('success','Tag berhasil ditambahkan');
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
        $tags=Tags::findOrFail($id);
        return view('admin.tag.edit',compact('tags'));
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
        $this->validate($request,[
            'nama_tags'=>'required|max:20|min:3',
        ]);
        $tags_data=[
            'nama_tags'=>$request->nama_tags,
            'slug_tags'=>Str::slug($request->nama_tags),
        ];
        Tags::whereid($id)->update($tags_data);
        return redirect()->route('tag.index')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tags=Tags::findOrFail($id);
        $tags->delete();
        return redirect()->back()->with('success','data berhasil dihapus');
    }
}
