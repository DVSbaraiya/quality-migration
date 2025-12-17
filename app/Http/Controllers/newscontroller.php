<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function news()
    {
        return view('pages.news');
    }

    public function show($slug)
    {
        $blogPath = resource_path('views/pages/blog');

        $blogs = collect(File::files($blogPath))
            ->map(function ($file) {
                // Get filename without .blade.php
                $filename = $file->getFilename();
                $slug = str_replace('.blade.php', '', $filename);

                return $slug;
            })
            ->sortDesc()
            ->take(5);

        if (!view()->exists("pages.blog.$slug")) {
            abort(404);
        }

        return view("pages.blog.$slug", compact('blogs'));
    }
}
    