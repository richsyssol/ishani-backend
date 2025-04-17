<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\VisitRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VisitRequestController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'preferred_date' => 'required|date',
            'preferred_time' => 'required|string|max:255',
            'special_requests' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $visitRequest = VisitRequest::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Visit request submitted successfully',
            'data' => $visitRequest
        ], 201);
    }
}