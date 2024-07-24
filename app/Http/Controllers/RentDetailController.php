<?php

namespace App\Http\Controllers;
use App\Models\RentDetail;

use Illuminate\Http\Request;

class RentDetailController extends Controller
{
    public function view()
    {
        $ren = RentDetail::orderBy('id')->get();

        return view('detail.index',['rentds' => $ren]);
    }
}
