<?php
/**
*
*
* Controller de Idea
*
* @author Geovane Brandão
*
*/

/**
 * 
 */
class IdeaController extends Controller
{
	
	public function submitIdea()
	{
		$id 			= null;
		$name			= $_POST['name'];
		$titleIdea		= $_POST['titleidea'];
		$category		= $_POST['category'];
		$email			= $_POST['email'];
		$description	= $_POST['description'];

		$saveIdea = new IdeaCrud;
		$saveIdea = $saveIdea->saveIdea($id, $name, $titleIdea, $category, $email, $description);

		echo json_encode(array(
			'result' => $saveIdea
		));

	}
}
