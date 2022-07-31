<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * @param  $micropostId
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $micropostId)
    public function store(Request $request)
    {
        // \Auth::user()->favorite($micropostId);
        \Auth::user()->favorite($request->input('id'));
        return back();
    }

    /**
     * @param  $micropostId
     * @return \Illuminate\Http\Response
     */
    public function destroy($micropostId)
    {
        \Auth::user()->unfavorite($micropostId);
        return back();
    }
}
