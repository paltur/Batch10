<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class FavoritesController extends Controller
{
     public function __construct() {
        return $this->middleware('auth');
    }

    public function store(Question $question){
        $question->favotires()->attach(auth()->id());
        return back();
    }
    public function destroy(Question $question){
        $question->favotires()->detach(auth()->id());
        return back();
    }
}
