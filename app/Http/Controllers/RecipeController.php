<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Recipe;
// use App\Models\Type;

class RecipeController extends Controller
{

    // public function list()
    // {
    //     return view('recipe.list', [
    //         'recipe' => Recipe::where(function ($query) {
    //             $query->where('user_id', '=', auth()->user()->id);})
    //     ]);
    // }
    public function list()
    {
        return view('recipe.list', [
            'recipes' => Recipe::all()
        ]);
    }

    public function addForm()
    {
        return view('recipe.add', [
            // 'types' => Type::all(),
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
           'title' => 'required',
           'url'=>'required',
           'content'=>'required'
        ]);

        $recipes = new Recipe();
        $recipes->title = $attributes['title'];
        $recipes->url = $attributes['url'];
        $recipes->content = $attributes['content'];
        $recipes->user_id =  auth()->user()->id;
        $recipes->save();

        return redirect('/recipe/list')
            ->with('message', 'Recipe has been added!');
    }

    public function editForm(int $recipes)
    {
        $test =Recipe::find($recipes);

        return view('recipe.edit', [
            'recipe' => $test
           
        ]);
    }

    public function edit(int $rec)
    {
        $recipes =Recipe::find($rec);
        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
            'content' => 'required',
            
        ]);

        $recipes->title = $attributes['title'];
        $recipes->url = $attributes['url'];
        $recipes->content = $attributes['content'];
        $recipes->user_id =  auth()->user()->id;
        $recipes->save();

        return redirect('/recipe/list')
            ->with('message', 'Recipes has been edited!');
    }

    public function delete(int $rec)
    {
        $recipes =Recipe::find($rec);
        $recipes->delete();
        
        return redirect('/recipe/list')
            ->with('message', 'Recipes has been deleted!');        
    }

    public function imageForm(Recipe $recipes)
    {
        return view('recipe.image', [
            'recipe' => $recipes,
        ]);
    }

    public function image(Recipe $recipes)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($recipes->image);
        
        $path = request()->file('image')->store('recipes');

        $recipes->image = $path;
        $recipes->save();
        
        return redirect('/console/recipes/list')
            ->with('message', 'Project image has been edited!');
    }

     public function yoga()
    {
        return view('recipe.yoga') ;
           
        
    }
}

