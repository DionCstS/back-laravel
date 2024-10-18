<?php

namespace App\Http\Controllers;
use App\Models\tasks;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        //Busca todas as tasks
        $tasks = Task::all();

        //Retorna uma view com a lista de tarefas 
        return view('index', compact('tasks'));
    }
}
