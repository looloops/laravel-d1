<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Logica per salvare la nuova attività nel database
    }

    public function singleTask($id)
    {
        return view('singleTask');
    }

    public function edit($id)
    {
        return view('edit');
    }

}
