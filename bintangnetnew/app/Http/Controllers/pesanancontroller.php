<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class pesanancontroller extends Controller
{
    public function index()
    {
        $paket = Pesanan::orderBy('id')->paginate(5);
        return view('pesanan.index', ['paket' => $paket]);
        return view('pesanan.problem', ['paket' => $paket]);
        
    }
    // public function detail($id){
    //     $paket = Pesanan::detail('pesanans')->where('id',$id)->first();
    //     return view('pesanan.detail',['paket'=> $paket]);
    // }


    public function detail($id) 
    {
        // $category = DB::table('categories')->where('id',$id)->first();

        $paket = Pesanan::find($id)->first();

        return view('pesanan.detail', ['paket' => $paket]);
    }

    public function new()
    {
        return view('pesanan.create');
    }

    public function store(Request $request)
    {
        
        $paket = Pesanan::create($request->all());
          if ($paket){
            session::flash('status' , 'success');
            session::flash('massage' , 'menambahkan data berhasil' );
          };
        return redirect('/detailpesanan');
        // $data =[

        //     'nama'=> $request->nama,
        //     'nomor_telp'=> $request->nomor_telp,
        //     'alamat'=> $request->alamat,
        //     'peket_jar'=> $request->peket_jar,
        // ];
        // pesanan::create($data);
        
    }

  
    public function edit($id)
    {
        // dd($id);
        $paket = Pesanan::findOrFail($id);
        return view('pesanan.edit' , ['paket' => $paket]);
    }

 
    public function update(Request $request, $id)
    {
        // dd($request);
        $paket = Pesanan::findOrFail($id);
        $paket->update($request->all());
        if ($paket){
            session::flash('status' , 'success');
            session::flash('massage' , 'pengubah data berhasil');
        }
        return redirect('/pesanan');
    }

    public function delete($id)
    {
        $paket = Pesanan::findOrFail($id);
        return view('pesanan.delete', ['paket' => $paket]);
    // return 'hi';
    }

    public function destroy($id)
    {
        $paket = Pesanan::findOrFail($id);
        $paket->delete();

        if ($paket){
            Session::flash('status' , 'succes');
            session::flash('massage' , 'Penghapusan Data Berhasil' );
        }
        return redirect('/pesanan');
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $paket = pesanan::where('nama','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $paket = pesanan::all();
        }
        return view('pesanan.index', ['paket'=>$paket]);
    }
}

