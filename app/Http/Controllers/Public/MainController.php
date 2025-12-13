<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $projects = Project::inRandomOrder()->paginate(6);
        return view('public.home', compact('projects'));
    }


    public function projectList(Request $request)
    {
        $query = Project::with('category');
        $categories = Category::all();
        if ($request->filled('category_id')) {
            $query->whereIn('category_id',  $request->category_id);
        }
        $projects = $query->paginate(9)->withQueryString();
        return view('public.pages.project-list', compact('projects', 'categories'));
    }


    public function projectListAll()
    {
        $projects = Project::paginate(9);
        return view('public.pages.project_list_all', compact('projects'));
    }

    public function projectDetails($id)
    {
        $project = Project::findOrFail($id);
        return view('public.pages.project_details', compact('project'));
    }

    public function aboutUs()
    {
        $users = User::all();
        return view('public.pages.about', compact('users'));
    }

    public function developers()
    {
        $users = User::paginate(6);
        return view('public.pages.developers', compact('users'));
    }

    public function contact()
    {
        return view('public.pages.contact');
    }


}
