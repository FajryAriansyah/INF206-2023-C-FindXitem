<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Requestes;
use App\Models\RequestVerif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Barang $barang)
    {

        $title = 'verifikasi';
        $sudahVerif = '';
        $ada = RequestVerif::where('barang_id', $barang->id)
            ->where('user_id', auth()->user()->id)->first();

        // dd($ada);
        if ($ada->count()) {
            $sudahVerif = 'sudah';

            if ($ada->status == 'accepted') {

                return redirect('verifikasi/'.$barang->id);

            } elseif ($ada->status == 'rejected') {

                $ada->delete();

                return view('verif.rejected', [
                    'title' => 'Rejected',
                ]);
            }
        } else {

            $sudahVerif = 'belum';
        }
        return view('verifikasi.verif', compact('title', 'barang', 'sudahVerif'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Barang $barang, Request $request)
    {
        $user = auth()->user();

        if ($request->file('image')) {
            $link = 'img/' . time() . '-' . $request->image->getClientOriginalName();
            $request->image->move('storage/img', $link);
            // $request['image'] = $link;
            // $request->file('image')->store('img');
        }

        DB::table('requests')->insert([
            'user_id' => $user->id,
            'status' => "pending",
            'barang_id' => $barang->id,
            'image' => $link,
        ]);

        return redirect('search/hasil/' . $barang->id . '/verif');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, Requestes $requestes)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
    }
}
