<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MoodRecord;
use Illuminate\Http\JsonResponse;

class MoodRecordController extends Controller
{
    public function index(): JsonResponse
    {
        $moodRecords = MoodRecord::orderBy('recorded_at', 'desc')->get();
        return response()->json($moodRecords);
    }
}
