<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::orderBy('order')->get();
        return view('pricings.index', compact('pricings'));
    }

    public function create()
    {
        return view('pricings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'period' => 'required|in:month,year,one-time',
            'description' => 'nullable|string',
            'features' => 'nullable|array',
            'is_featured' => 'boolean',
            'order' => 'integer'
        ]);

        Pricing::create($validated);

        return redirect()->route('pricings.index')
            ->with('success', 'Pricing plan created successfully.');
    }

    public function show(Pricing $pricing)
    {
        return view('pricings.show', compact('pricing'));
    }

    public function edit(Pricing $pricing)
    {
        return view('pricings.edit', compact('pricing'));
    }

    public function update(Request $request, Pricing $pricing)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'period' => 'required|in:month,year,one-time',
            'description' => 'nullable|string',
            'features' => 'nullable|array',
            'is_featured' => 'boolean',
            'order' => 'integer'
        ]);

        $pricing->update($validated);

        return redirect()->route('pricings.index')
            ->with('success', 'Pricing plan updated successfully.');
    }

    public function destroy(Pricing $pricing)
    {
        $pricing->delete();

        return redirect()->route('pricings.index')
            ->with('success', 'Pricing plan deleted successfully.');
    }
}
