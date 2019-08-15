<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Micropost; // 追加
use App\User; // 追加

//綴り間違いで書き直し　FavoriteContorller
class FavoritesController extends Controller
{
    public function store(Request $request, $id)
    {
        //$user = \Auth::user()->id;
        //$micropost = Micropost::find($id);
        
        \Auth::user()->favorite($id);
        
        return back();
    }
    
    public function destroy($id)
    {
        //$user = \Auth::user()->id;
        //$micropost = Micropost::find($id);
        
        \Auth::user()->unfavorite($id);
        
        return back();
    }
}
