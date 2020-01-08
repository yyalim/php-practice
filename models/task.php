<?php

namespace App\Models;

class Task {
  public $description;
  public $completed = False;

  public function isComplete() {
    return $this->completed; 
  }

  public function complete() {
    $this->completed = True;
  }

	public static function mapFromDatabase($tasks) {
		return array_map(
			function ($task) {
				$t = new Task();
				$t->description = $task->description;
				$t->completed = $task->completed;
				return $t;
			}, $tasks
		);
	}
}

