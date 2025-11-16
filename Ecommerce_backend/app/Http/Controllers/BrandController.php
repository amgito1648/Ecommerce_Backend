<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::latest()->get(); // o paginate()
        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:brands,name',
            'description' => 'nullable|string',
            'logo' => 'nullable|image|max:2048', // si subes archivos
        ]);

        $data = $request->only(['name', 'description']);
        $data['slug'] = Str::slug($request->name);

        // Manejo de logo (opcional)
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('brands', 'public');
            $data['logo'] = $path;
        }

        Brand::create($data);

        return redirect()->route('admin.brands.index')->with('success', 'Brand creada correctamente');

    }

    public function edit($id)
{
    $brand = Brand::findOrFail($id);
    return view('admin.brands.edit', compact('brand'));
}

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        // Si guardas archivos, borrar logo del storage:
        if ($brand->logo && Storage::disk('public')->exists($brand->logo)) {
            Storage::disk('public')->delete($brand->logo);
        }

        $brand->delete();

        return redirect()->back()->with('success', 'Brand eliminada correctamente');
    }

    public function update(Request $request, $id)
{
    $brand = Brand::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255|unique:brands,name,' . $brand->id,
        'description' => 'nullable|string',
        'logo' => 'nullable|image|max:2048',
    ]);

    $brand->name = $request->name;
    $brand->description = $request->description;
    $brand->slug = Str::slug($request->name);

    // Si reemplaza el logo
    if ($request->hasFile('logo')) {

        // Borrar antiguo
        if ($brand->logo && Storage::disk('public')->exists($brand->logo)) {
            Storage::disk('public')->delete($brand->logo);
        }

        $path = $request->file('logo')->store('brands', 'public');
        $brand->logo = $path;
    }

    $brand->save();

    return redirect()->route('admin.brands.index')
            ->with('success', 'Brand actualizada correctamente');
}
}
