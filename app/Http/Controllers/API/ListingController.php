<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\listing;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() : JsonResponse {
        $listings = listing::withCount('transaction')->orderBy('transaction_count', 'desc');

        return response()->json([
            'success' => true,
            'message' => 'Get all listings',
            'data' => $listings
        ]);
    }
}