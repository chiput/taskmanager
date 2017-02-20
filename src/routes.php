<?php
// Routes

/*$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});*/

$app->get('/', App\Controller\NameController::class)->setName('name-url');
/*$app->get('/tampil/[{nama}]', App\Controller\NameController::class.':saya')->setName('saya-url');*/
$app->group('/migrate', function() {
	$this->get('/', function($request, $response, $args) {
	$userMigration = new App\Migration\UserMigration();
	$userMigration->createTable();

	$BoardMigration = new App\Migration\BoardMigration();
	$BoardMigration->createTable();

	$ListMigration = new App\Migration\ListMigration();
	$ListMigration->createTable();

	$CardMigration = new App\Migration\CardMigration();
	$CardMigration->createTable();

	return $response;
	});
});

$app->group('/user', function() {
	$this->get('/', App\Controller\UserController::class)->setName('tampil-user');
	$this->get('/add', App\Controller\UserController::class.':form')->setName('form-user');
	$this->get('/update/{id}', App\Controller\UserController::class.':form')->setName('update-user');
	$this->post('/save', App\Controller\UserController::class.':save')->setName('save-user');
	$this->get('/delete/{id}', App\Controller\UserController::class.':delete')->setName('delete-user');

});

$app->group('/board', function() {
	$this->get('/', App\Controller\BoardController::class)->setName('tampil-board');
	$this->post('/save', App\Controller\BoardController::class.':save')->setName('save-board');
	// $this->get('/add', App\Controller\BoardController::class.':form')->setName('form-board');
	// $this->get('/update/{id}', App\Controller\BoardController::class.':form')->setName('update-board');
	$this->get('/list/{id}', App\Controller\ListController::class)->setName('list-board');
	$this->post('/save-list', App\Controller\ListController::class.':save')->setName('save-list');
	// $this->get('/delete/{id}', App\Controller\BoardController::class.':delete')->setName('delete-board');

	$this->get('/card/{id}', App\Controller\ListController::class)->setName('card-board');
	$this->post('/save-card', App\Controller\CardController::class.':save')->setName('save-card');
});


// // $app->group('/list', function() {
// 	$this->get('/', App\Controller\BoardController::class)->setName('tampil-list');
// 	// $this->get('/add', App\Controller\BoardController::class.':form')->setName('form-board');
// 	// $this->get('/update/{id}', App\Controller\BoardController::class.':form')->setName('update-board');
// 	$this->post('/save', App\Controller\BoardController::class.':save')->setName('save-list');
// 	// $this->get('/delete/{id}', App\Controller\BoardController::class.':delete')->setName('delete-board');

// });

// $app->group('/card', function() {
// 	$this->get('/', App\Controller\BoardController::class)->setName('tampil-card');
// 	// $this->get('/add', App\Controller\BoardController::class.':form')->setName('form-board');
// 	// $this->get('/update/{id}', App\Controller\BoardController::class.':form')->setName('update-board');
// 	$this->post('/save', App\Controller\BoardController::class.':save')->setName('save-card');

// 	// $this->get('/delete/{id}', App\Controller\BoardController::class.':delete')->setName('delete-board');

// // });




