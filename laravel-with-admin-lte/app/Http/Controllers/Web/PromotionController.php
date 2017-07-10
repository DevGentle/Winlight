<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Model\Promotion\Promotion;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function all()
    {
        $promotions = Promotion::all();

        $promotions->sortByDesc('created_at');

//        $promotions = DB::table('promotions')->paginate(10);

        return view('web.promotion.index', compact('promotions'));
    }

    public function findPromotion($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('web.promotion.show', compact('promotion'));
    }
}
