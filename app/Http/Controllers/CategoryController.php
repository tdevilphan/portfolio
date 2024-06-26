<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use function PHPUnit\Framework\isEmpty;

class CategoryController extends BaseController
{
    public function getCategoryPage(Request $request) {
        $categorySlug = request()->route('slug');
        $category = Category::where('slug', $categorySlug)->first();
        if (!$category) return redirect()->route('not-found');
        $projects = Project::where('category_id', $category->id)->get();
        if ($projects->count() <= 0) return redirect()->route('not-found');
        return view('project', ['projects' => $projects, 'category' => $category]);
    }
}
