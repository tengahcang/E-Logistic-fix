<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Detail_paket;
use App\Models\Detail_peminjamans;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DetailPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('detailpeminjaman.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $latestId=$_GET['id'];
        $paket = Paket::all();
        $detailpakets = Detail_paket::all();
        $barangsWithoutDetailPakets = Barang::whereDoesntHave('detailpaket')->get();
        return view('detailpeminjaman.create',[
            'id'=>$latestId,
            'pakets'=>$paket,
            'detailpakets'=>$detailpakets,
            'barangs'=>$barangsWithoutDetailPakets
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->paket == 'satuan'){
            $barang = New Detail_peminjamans();
            $barang->barang_id = $request->barang;
            $barang->peminjaman_id = $request->dataid;
            $barang->jumlah = $request->qty;
            $barang->status = 'waiting';
            $barang->save();
            Alert::success('Added Successfully', 'Laporan Data Added Successfully.');
            return redirect()->route('detailpeminjaman.show',['detailpeminjaman'=>$request->dataid]);
        }else{
            $detailpakets = DB::table('detail_pakets')
                            ->select('*')
                            ->get();
            foreach ($detailpakets as $detailpaket){
                if ($detailpaket->paket_id == $request->paket){
                    $barang = New Detail_peminjamans();
                    $barang->barang_id = $detailpaket->barang_id;
                    $barang->peminjaman_id = $request->dataid;
                    $barang->jumlah = $detailpaket->qty;
                    $barang->status = 'waiting';
                    $barang->save();
                }
            }
            Alert::success('Added Successfully', 'Laporan Data Added Successfully.');
            return redirect()->route('detailpeminjaman.show',['detailpeminjaman'=>$request->dataid]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Detail_peminjamans::where('peminjaman_id',$id)->get();
        return view('detailpeminjaman.show',[
            'datas'=>$data,
            'id'=>$id
        ]);
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
        $employee = Detail_peminjamans::find($id);
            $employee->status = $request->statusalat;
            $employee->save();
            Alert::success('Changed Successfully', 'status alat Data Changed Successfully.');
            return redirect()->route('pinjam.edit',['pinjam'=>$employee->peminjaman_id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function getData(Request $request)
    {
        $data = Detail_peminjamans::with(['barang','peminjaman', 'peminjaman.user' ]);

        if ($request->ajax()) {
            return datatables()->of($data)
                ->addIndexColumn()
                // ->addColumn('actions', function($employee) {
                //     return view('employee.actions', compact('employee'));
                // })
                ->toJson();
            }
    }
}
