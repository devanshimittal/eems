<?php
class LoginDao {
	function __construct($db) {
		$this->pdo = $db;
	}
	public function isEmployeeUser ( $email_id, $password){
		$query = "  SELECT
					U.user_id AS id,
					U.name AS Name,
					U.email_id AS Email,
					FROM firm as U
					WHERE 1=1
					AND U.email_id='" . $email_id . "'
					AND U.password='" . $password . "'
		$stmt = $this->pdo->prepare ( $query );
		$stmt->execute ();
		$result = $stmt->fetch ( PDO::FETCH_OBJ );
		if (! empty ( $result )) {
			return $result;
		} else {
			return false;
		}
	}
}