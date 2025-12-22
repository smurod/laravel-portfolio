<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.pages.index', compact('projects'));
    }

    public function create()
    {
        $statuses = Status::all();
        $categories = Category::all();
        return view('admin.pages.create', compact('statuses', 'categories'));
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tech_stack' => 'required|string',
            'link_type' => 'required|array|min:1',
            'link_type.*' => 'required|in:github,project,portfolio,demo',
            'link_url' => 'required|array|min:1',
            'link_url.*' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'status_id' => 'required|exists:statuses,id',
            'tags.*' => 'nullable',
            'category_id' => 'required|exists:categories,id',

        ],[
            'title.required' => 'Название проекта обязательно',
            'description.required' => 'Краткое описание обязательно',
            'tech_stack.required' => 'Стек технологий проекта обязательно',
            'status_id.required'=>'Статус проекта обязательно',
            'link_type.required' => 'Добавьте хотя бы одну ссылку',
            'link_type.*.in' => 'Неверный тип ссылки',
            'link_url.*.url' => 'Введите корректный URL адрес',
        ]);

        // Формируем массив ссылок - теперь правильно
        $tags = [];
        $links = [];
        $types = $request->link_type;
        $urls = $request->link_url;


        foreach ($types as $index => $type) {
            if (!empty($type) && !empty($urls[$index])) {
                // Если ключ уже существует, делаем массив
                if (isset($links[$type])) {
                    // Если это еще не массив, превращаем в массив
                    if (!is_array($links[$type])) {
                        $links[$type] = [$links[$type]];
                    }
                    // Добавляем новую ссылку
                    $links[$type][] = $urls[$index];
                } else {
                    // Первая ссылка этого типа
                    $links[$type] = $urls[$index];
                }
            }
        }

        // Добавляем ссылки в data
        $data['links'] = $links;
        $data['tags'] = $tags;
        if ($request->hasFile('image')){
            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = $path;
        }
        $data['user_id'] = Auth::id();
        Project::create($data);
        return redirect()->route('project.index')->with('success', 'Проект успешно добавлен');
    }

    public function show(Project $project)
    {
        return view('admin.pages.show', compact('project'));
    }



    public function edit(Project $project)
    {
        $statuses = Status::all();
        $categories = Category::all();
        return view('admin.pages.edit', compact('project','statuses', 'categories'));
    }



    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tech_stack' => 'required|string',
            'links' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'status_id' => 'required|exists:statuses,id',
            'tags' => 'nullable',
            'category_id' => 'required|exists:categories,id',
        ]);
        if($request->hasFile('image')){
            $path = $request->file('image')->store('projects', 'public');
            $data['image'] = $path;
        }

        $project->update($data);
        return redirect()->route('project.index');
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index');
    }

}
