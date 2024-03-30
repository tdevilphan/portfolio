<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    public function homepage () {
        $projects = Project::select("*")->whereNotNull('video')->get();
        $categories = Category::select("*")->where('active', 1)->get();
        $testimonials = Testimonial::select("*")->get();
        return view('welcome', ['projects' => $projects, 'categories' => $categories, 'testimonials' => $testimonials]);
    }
}
