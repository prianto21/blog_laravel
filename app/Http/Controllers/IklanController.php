<?php

namespace App\Http\Controllers;
use App\Iklan;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $iklan=Iklan::paginate(10);
        return view('admin.iklan.index',compact('iklan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.iklan.create');
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
            'nama_costumer'=>'required|min:3|max:100',
            'jenis_iklan'=>'required',
            'biaya'=>'required|numeric',
          ]);
          Iklan::create([
            'nama_custumer'=>$request->nama_costumer  ,
            'jenis_iklan'=>$request->jenis_iklan,
            'biaya'=>$request->biaya,
          ]);
            return redirect()->route('iklan.index')->with('success','User berhasil ditambahkan');
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
        $iklan=Iklan::findOrfail($id);
        return view('admin.iklan.edit',compact('iklan'));
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
            'nama_custumer'=>'required|min:3|max:100',
            'jenis_iklan'=>'required',
            'biaya'=>'required|numeric',
        ]);
        $data_iklan=[
            'nama_custumer' => $request->nama_custumer,
            'jenis_iklan'=>$request->jenis_iklan,
            'biaya'=> $request->biaya,
        ];

        Iklan::whereid($id)->update($data_iklan);
        return redirect()->route('iklan.index')->with('success','data berhasil di edit');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $iklan=Iklan::findorfail($id);
        $iklan->delete();
        return redirect()->route('iklan.index')->with('succes','data iklan berhasil di edit');
    }
}
