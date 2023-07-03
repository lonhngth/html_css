<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.list', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = Str::random(4) . $file->getClientOriginalName();
            $path = 'uploads/partners/';
            $file->move($path, $fileName);
        }

        $insert = [
            'name' => $request->name,
            'image' => $path . $fileName
        ];

        Partner::create($insert);
        return redirect()->route('admin.partner.index');
    }

    public function edit($id)
    {
        $partners = Partner::find($id);
        return view('admin.partners.edit', compact('partners'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);

        if ($request->hasFile('image')) {
            $file = $request->image;
            $fileName = Str::random(4) . $file->getClientOriginalName();
            $path = 'uploads/posts/';
            $file->move($path, $fileName);
            $partner->image = $path . $fileName;
        }

        $partner->name = $request->name;
        $partner->save();

        return redirect()->route('admin.partner.index')->with('message', 'Update successfully!');
    }

    public function delete($id)
    {
        Partner::find($id)->delete();
        return back()->with('message', 'Delete successfully!');
    }
}
