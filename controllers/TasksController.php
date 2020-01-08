<?php

namespace App\Controllers;

use App\Core\{App, view, redirect};
use App\Models\Task;

class TasksController {
	public function index() {
		$tasks = Task::mapFromDatabase(
			App::get('database')->selectAll('todos')
		);

		view('tasks', compact('tasks'));
	}

	public function new() {
		App::get('database')->insert('todos', [
			'description' => $_POST['description']
		]);

		redirect('tasks');
	}
}

