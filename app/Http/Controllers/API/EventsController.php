<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventsController extends Controller
{
    public function index(): \Illuminate\Http\JsonResponse
    {
        $events = Event::with('category:id,name')->latest()->get();
        
        return response()->json($events);
    }
}
