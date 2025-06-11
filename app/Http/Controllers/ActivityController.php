<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use PHPUnit\Event\Code\Throwable;
use Throwable as GlobalThrowable;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('activities.index', ['activities' => Activity::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Log::info("Testing", $request->all());
        try{
            $validated = $request->validate([
                'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
                'user_id' => 'required|exists:users,id',
                'date' => 'required|date',
                'paid' => 'boolean',
                'notes' => 'required|string',
                'satisfaction' => 'nullable|integer|min:0|max:10'
            ]);

            Log::info("Data from the form", $validated);

            Activity::create($validated);
        }
        catch(GlobalThrowable $error){
            Log::error("Errores de validación:", [$error->getMessage()]);
        }

        return redirect()->route('activities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $activity = Activity::with('user')->findOrFail($id);
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = Activity::findOrFail($id);

        $validated = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'paid' => 'boolean',
            'notes' => 'required|string',
            'satisfaction' => 'nullable|integer|min:0|max:10'
        ]);

        $activity->update($validated);

        return redirect()->route('activities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();
        return redirect()->route('activities.index');
    }
}
