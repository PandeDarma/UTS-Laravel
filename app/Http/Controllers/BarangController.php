<?php

namespace App\Http\Controllers;
use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('admin')) return $next($request);
            abort(403,'anda bukan admin');
        });
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title="MAIKUM";
        $barang=Barang::paginate(5);
        return view('Layout.Stok',compact('title','barang'));

        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title="INPUT";
        return view('Layout.Input',compact('title'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $messages = [
            'required'=> 'Kolom : atribute harus lengkap'
        ];
        $validasi = $request->validate([
                'nama'=>'required',
                'harga'=>'required',
                'kategori'=> 'required'
        ],$messages);
        
        barang::create($validasi);
        return redirect('Barang')->with('succes','Data berhasil di update');
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
        //
        $tile='Input';
        $barang=Barang::find($id);
        return view('Layout.Input',compact('title','barang'));
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
        //
        $messages = [
            'required'=> 'Kolom : atribute harus lengkap'
        ];
        $validasi = $request->validate([
                'nama'=>'required',
                'harga'=>'required',
                'kategori'=> 'required'
        ],$messages);
        
        barang::where('id',$id)->update($validasi);
        return redirect('Barang')->with('succes','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        barang::where('id',$id)->delete();
        return redirect('Barang')->with('succes','Data berhasil di update');
    }
}
