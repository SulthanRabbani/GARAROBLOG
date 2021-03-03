<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SulthanController extends Controller
{
    private function books($id)
    {
        return "Titisan dewi"." ".$id;
    }
    public function add()
    {
        //
    }
    public function get(Request $request, $id)
    {
        $bukuYangDidapat = $this->books($id);
        return view('buku')
            ->with('judulBuku', $bukuYangDidapat)
            ->with('tahunBuku','Tahun Buku 2021');
    }
    public function update()
    {
        //
    }
    public function delete()
    {
        //
    }
}
