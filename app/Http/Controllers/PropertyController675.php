<?php

namespace App\Http\Controllers;

use App\Models\Property675;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController675 extends Controller
{
    public function index()
    {
        $properties_675 = Property675::paginate(10);
        return view('properties_675.index', compact('properties_675'));
    }

    public function create()
    {
        return view('properties_675.create');
    }

    public function store(Request $request_675)
    {
        $validated_675 = $request_675->validate([
            'title_675' => 'required|string|max:255',
            'description_675' => 'required|string',
            'price_675' => 'required|numeric|min:0',
            'location_675' => 'required|string|max:255',
            'type_675' => 'required|in:house,apartment,villa,office',
            'bedrooms_675' => 'required|integer|min:0',
            'bathrooms_675' => 'required|integer|min:0',
            'area_675' => 'required|integer|min:1',
            'status_675' => 'required|in:available,sold,rented',
            'image_675' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request_675->hasFile('image_675')) {
            $image_path_675 = $request_675->file('image_675')->store('properties', 'public');
            $validated_675['image_675'] = $image_path_675;
        }

        Property675::create($validated_675);

        return redirect()->route('properties_675.index')
                        ->with('success_675', 'Property berhasil ditambahkan!');
    }

    public function show(Property675 $property_675)
    {
        return view('properties_675.show', compact('property_675'));
    }

    public function edit(Property675 $property_675)
    {
        return view('properties_675.edit', compact('property_675'));
    }

    public function update(Request $request_675, Property675 $property_675)
    {
        $validated_675 = $request_675->validate([
            'title_675' => 'required|string|max:255',
            'description_675' => 'required|string',
            'price_675' => 'required|numeric|min:0',
            'location_675' => 'required|string|max:255',
            'type_675' => 'required|in:house,apartment,villa,office',
            'bedrooms_675' => 'required|integer|min:0',
            'bathrooms_675' => 'required|integer|min:0',
            'area_675' => 'required|integer|min:1',
            'status_675' => 'required|in:available,sold,rented',
            'image_675' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request_675->hasFile('image_675')) {
            // Hapus gambar lama jika ada
            if ($property_675->image_675) {
                Storage::disk('public')->delete($property_675->image_675);
            }
            $image_path_675 = $request_675->file('image_675')->store('properties', 'public');
            $validated_675['image_675'] = $image_path_675;
        }

        $property_675->update($validated_675);

        return redirect()->route('properties_675.index')
                        ->with('success_675', 'Property berhasil diupdate!');
    }

    public function destroy(Property675 $property_675)
    {
        // Hapus gambar jika ada
        if ($property_675->image_675) {
            Storage::disk('public')->delete($property_675->image_675);
        }

        $property_675->delete();

        return redirect()->route('properties_675.index')
                        ->with('success_675', 'Property berhasil dihapus!');
    }
}