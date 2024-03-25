<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index()
{
    $clients = Client::all();
    $about = About::first();
    return view('frontend.index',compact('clients','about'));
}

public function about()
{
    return view('frontend.about');
}

public function services()
{
    $services = Service::all();
    return view('frontend.services',compact('services'));
}

public function projects()
{
    $projects = Project::all();
    return view('frontend.projects',compact('projects'));
}

public function showProject($id)
{
    $info = Project::find($id);
    return view('frontend.show_project',compact('info'));
}
}