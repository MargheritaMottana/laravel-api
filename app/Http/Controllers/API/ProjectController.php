<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// models
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {

        $projects = Project::get();

        return response()->json([
            'success' => true,
            'code' => 200,
            'message' => 'ok',
            'data' => [
                'projects' => $projects
            ],

        ]);
    }
}