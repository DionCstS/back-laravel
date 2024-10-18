<?php

namespace App\Http\Controllers;
use App\Models\tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();


        return view('index', compact('tasks'));
    }
}
