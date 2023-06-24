<?php

namespace App\Http\Controllers;

use App\Models\Electe;
use Illuminate\Http\Request;

class ElecteController extends Controller
{
    public function index(Request $request) {
        return Electe::where('user_id', $request->user_id)->with('advt')->with('photos')->get();
    }

    public function store(Request $request) {
        $electe = new Electe();
        $electe->user_id = $request->user_id;
        $electe->advt_id = $request->advt_id;
        $electe->save();
    }

    public function delete(Request $request) {
        Electe::where('advt_id', $request->advt_id)->where('user_id',$request->user_id)->delete();
    }
}
