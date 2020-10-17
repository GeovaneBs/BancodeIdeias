<?php

/**
*
* Definição das rotas e seus respectivos controllers e actions
*
* @author Code Universe
*
**/

// rotas normais
$commonRoutes = array(
	'/'               => 'SiteController/index',
	'addIdea'         => 'SiteController/addIdea',
);

// rotas POST
$commonPost = array(
	'submitIdea' => 'IdeaController/submitIdea'
);

$commonRoutes = array_merge($commonRoutes, $commonPost);

return $commonRoutes;