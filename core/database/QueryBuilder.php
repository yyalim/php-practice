<?php
class QueryBuilder {
	protected $pdo;

	public function __construct(PDO $pdo) {
		$this->pdo = $pdo;
	}

	public function selectAll($table) {
		$statement = $this
			->pdo
			->prepare("SELECT * FROM {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $data) {
		$query = sprintf(
			"INSERT INTO %s (%s) VALUES (%s)",
			$table,
			implode(',', array_keys($data)),
			":". implode(', :', array_keys($data))
		);

		var_dump($query);

		$statement = $this
			->pdo
			->prepare($query);

		$statement->execute($data);
		}
}

