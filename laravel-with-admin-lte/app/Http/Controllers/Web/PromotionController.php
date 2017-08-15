<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Model\Promotion\Promotion;
use Illuminate\Support\Facades\DB;

class PromotionController extends Controller
{
    public function all()
    {
        $promotions = DB::table('promotions')->paginate(8);

        return view('web.promotion.index', compact('promotions'));
    }

    public function findPromotion($id)
    {
        $promotion = Promotion::findOrFail($id);

        return view('web.promotion.show', compact('promotion'));
    }
}
