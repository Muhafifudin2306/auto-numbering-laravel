<?php

namespace App\Http\Controllers;

use App\Models\Prefix;
use Illuminate\Http\Request;

class PrefixController extends Controller
{
    public function index()
    {
        $prefix = Prefix::select('*')->get();

        return view('prefix.dashboard', ['prefix'=>$prefix]);
    }

    public function add()
    {
        return view('prefix.add');
    }
    public function prefixadd(Request $request)
    {
        $prefix           = new Prefix;
        $prefix->prefix    = $request->prefix;

        // $post->save() digunakan untuk menyimpan data title dan content
        $prefix->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $prefix = Prefix::findOrFail($id);

        return view ('prefix.edit', compact('prefix'));
    }

    public function update(Request $request, $id)
{
    

    $prefix = Prefix::find($id);
    $prefix->prefix = $request->prefix;

    if($prefix->save()) {
        return redirect('/');
    } else {
        return redirect()->back()->with('message', 'Gagal memperbarui data');
    }
}

public function destroy($id)
    {
        $prefix = Prefix::findOrFail($id);
        $prefix->delete();

        return redirect ('/');
    }
}
