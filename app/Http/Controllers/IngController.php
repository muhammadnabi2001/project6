<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingridents;
use Illuminate\Http\Request;

class IngController extends Controller
{
    public function index()
    {
        $models = Ingridents::orderBy('id','asc')->paginate(5);
        return view('Ingrident.index',['models' => $models]);
    }
    public function create()
    {
        $datas = Ingridents::all();
        return view('Ingrident.add', ['models' => $datas]);
    }
    public function ing(Request $request)
    {
        $own = new Ingridents();
        $own->name = $request->name;
        $own->save();
        return redirect('/ing')->with('create', 'Created');
    }
    public function update(Request $request, Ingridents $user)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $user
              ->where('id', $request->id)
              ->update(['name' => $request->name]);
        return redirect('/ing')->with('update', 'Updated');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $destroy = Ingridents::findOrFail($id);
        $destroy->delete();
        return redirect('/ing')->with('delete', 'deleted');
    }
    public function search(Request $request)
    {
        $models = Ingridents::where('name','like','%' . $request->search . '%')->orderBy('id','asc')->paginate(5);
        return response()->json($models);
    }
}
