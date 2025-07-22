<?php

namespace App\Http\Controllers;

use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index()
    {
        $activities  = Activity::with('causer')
            ->where('subject_type', 'App\Models\User')
            ->orderBy('created_at', 'desc')
            ->latest()
            ->paginate(20);

        return view('logs.index', compact('activities'));
    }

    public function show(Activity $activity)
    {
        // $activity = Activity::with(['causer', 'subject'])
        //     ->where('subject_type', 'App\Models\User')
        //     ->findOrFail($id);

        return view('logs.show', compact('activity'));
    }
}
