<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * @param  $micropostId
     * @return \Illuminate\Http\Response
     */
    public function store($micropostId)
    {
        \Auth::user()->favorite($micropostId);
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
