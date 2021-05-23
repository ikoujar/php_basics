<?php

namespace App\Controllers;

use App\Core\Request;
use App\Database\QueryBuilder;

class TaskController
{

    public function index()
    {
        try {
            $completed = Request::get('completed');
            if($completed != null) {
                $tasks = QueryBuilder::get('tasks', ['completed', '=', $completed]);
            } else {
                $tasks = QueryBuilder::get('tasks');
            }
        } catch (\Exception $exception) {
            var_dump($exception);
        }
        exit;

        view('index', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        $description = Request::get('description');
        QueryBuilder::insert('tasks', [
            'description' => $description
        ]);
        back();
    }

    public function update()
    {
        $id = Request::get('id');
        $completed = Request::get('completed');
        if ($id && $completed != null) {
            QueryBuilder::update('tasks', $id, [
                'completed' => $completed
            ]);
        }
        back();
    }

    public function delete()
    {
        if ($id = Request::get('id')) {
            QueryBuilder::delete('tasks', $id);
        }
        back();
    }

}