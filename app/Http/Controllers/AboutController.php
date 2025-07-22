<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('about.index', compact('about'));
    }

    public function edit()
    {
        $about = About::firstOrNew();
        return view('about.edit', compact('about'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'mission' => 'nullable|string|max:255',
            'vision' => 'nullable|string|max:255',
            'values' => 'nullable|array',
            'values.*' => 'string|max:255'
        ]);

        $about = About::firstOrNew();

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($about->image) {
                Storage::delete($about->image);
            }
            $validated['image'] = $request->file('image')->store('about', 'public');
        }

        $about->fill($validated);
        $about->save();

        return redirect()->route('about.index')->with('success', 'About page updated successfully');
    }
}
