<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Image;
use App\Models\Project;
use App\Models\Service;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index()
{
    $clients = Client::all();
    $banners = Banner::all();
    $about = About::first();
    return view('frontend.index',compact('clients','about','banners'));
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
public function showService($id)
{
    $info = Service::find($id);
    return view('frontend.show_service',compact('info'));
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

public function contacts()
{
    return view('frontend.contact');
}

public function contact_us(Request $request)
{
    $data=$request->all();
    Contact::create($data);
    return redirect()->back();
}

public function galleries()
{
    $images = Image::all();
    return view('frontend.gallary',compact('images'));
}


}
