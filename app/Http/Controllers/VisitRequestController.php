<?php

namespace App\Http\Controllers;

use App\Models\VisitRequest;
use Illuminate\Http\Request;

class VisitRequestController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'preferred_date' => 'required|date|after_or_equal:today',
            'preferred_time' => 'required|string|in:09:00-11:00,11:00-13:00,13:00-15:00,15:00-17:00',
            'special_requests' => 'nullable|string',
        ]);

        // Create the visit request
        $visitRequest = VisitRequest::create($validatedData);

        // Return JSON response
        return response()->json([
            'success' => true,
            'message' => 'Visit request submitted successfully',
            'data' => $visitRequest
        ], 201);
    }
}