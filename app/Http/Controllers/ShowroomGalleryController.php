<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\JsonResponse;

class ShowroomGalleryController extends Controller
{
    public function __invoke(): JsonResponse
    {
        return response()->json(
            cache()->remember('gallery_items', now()->addHours(12), function () {
                return Gallery::where('is_active', true)
                    ->orderBy('order')
                    ->get(['id', 'title', 'src', 'alt', 'order']);
            })
        );
    }
}