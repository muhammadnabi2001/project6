<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meal;

class MealController extends Controller
{
    public function index()
    {
        $models = Meal::orderBy('id','asc')->paginate(5);
        return view('Meal.index',['models' => $models]);
    }
    public function create()
    {
        $datas = Meal::all();
        return view('Meal.add', ['models' => $datas]);
    }
    public function meal(Request $request)
    {
        $own = new Meal();
        $own->name = $request->name;
        $own->save();
        return redirect('/')->with('create', 'Created');
    }
    public function update(Request $request, Meal $user)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $user
              ->where('id', $request->id)
              ->update(['name' => $request->name]);
        return redirect('/')->with('update', 'Updated');
    }
    public function destroy(Request $request)
    {
        $id = $request->id;
        $destroy = Meal::findOrFail($id);
        $destroy->delete();
        return redirect('/')->with('delete', 'deleted');
    }
    public function search(Request $request)
    {
        $models = Meal::where('name','like','%' . $request->search . '%')->orderBy('id','asc')->paginate(5);
        return response()->json($models);
    }
}
