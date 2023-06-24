<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Advt;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdvtUserController extends Controller
{
    public function show(Request $request) {
        return Advt::where('user_id', $request->id)->with('comments')->get();
    }

    public function edit(Request $request) {
        Advt::where('id', $request->id)->update([
            'header' => $request->header,
            'description' => $request->description,
            'point_meeting' => $request->point_meeting,
            'place' => $request->place,
        ]);
    }

    public function delete(Request $request) {
        Comment::where('advt_id', $request->id)->delete();
        Advt::where('id', $request->id)->delete();
    }
}
