<?php
/**
*
*
* Crud de Idea
*
* @author Geovane Brandão
*
*/

class IdeaCrud{
	private $pdoCrud;
	private $table = 'idea'

	public function __construct()
	{
		$this->pdoCrud = new PDOCrud;
	}

	public function saveIdea($id = null, $name, $titleIdea, $category, $email, $description){
		$pdo = array(
			':name' => $name,
			':titleIdea' => $titleIdea,
			':category' => $category,
			':email' => $email,
			':description' => $description

		);
		$colums = 'name, titleIdea, category, email, description';
		$values = ':name, :titleIdea, :category, :email, :description';

		return = $this->pdoCrud->insert($this->table, $colums, $values, $pdoCrud);
	}
}