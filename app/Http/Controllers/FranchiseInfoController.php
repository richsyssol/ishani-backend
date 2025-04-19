<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FranchiseInfo;
use Illuminate\Http\Request;

class FranchiseInfoController extends Controller
{
    /**
     * Display the franchise information
     */
    public function show()
    {
        $franchiseInfo = FranchiseInfo::first();
        
        if (!$franchiseInfo) {
            return response()->json([
                'message' => 'Franchise information not found'
            ], 404);
        }

        return response()->json([
            'data' => [
                'benefits' => $franchiseInfo->benefits,
                'support' => $franchiseInfo->support,
                'expansion_cities' => $franchiseInfo->expansion_cities,
                'last_updated' => $franchiseInfo->updated_at->toDateTimeString()
            ]
        ]);
    }

}