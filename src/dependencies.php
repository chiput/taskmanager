<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
/*$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};*/

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer']['template_path'];
    $templates = new App\Extension\League\Plates\Engine($settings);
    $templates->plates()->loadExtension(new App\Extension\League\Plates\UrlExtension($c->router, $c->request->getUri()));
    $templates->plates()->loadExtension(new App\Extension\League\Plates\SessionExtension($c->session));
    $templates->plates()->loadExtension(new App\Extension\League\Plates\FormValueExtension());
    return $templates;
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// database
$settings = $container->get('settings')['database'];
$capsule = new Illuminate\Database\Capsule\Manager;
$capsule->addConnection($settings);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($c) use ($capsule) {
    return $capsule;
};

// session
$container['session'] = function ($c) {
    $session_factory = new \Aura\Session\SessionFactory;
    $session = $session_factory->newInstance($_SESSION);
    $segment = $session->getSegment('App\Session');
    return $segment;
};

// hash
$container['hash'] = function ($c) {
    $hasher = new Illuminate\Hashing\BcryptHasher;
    return $hasher;
};

// validation
$container['validation'] = function ($c) {
    $validation = new Violin\Violin;
    return $validation;
};

// encrypt
$container['encrypter'] = function ($c) {
    $key = $c->get('settings')['encrypt']['key'];
    $encrypt = new Illuminate\Encryption\Encrypter($key, 'AES-256-CBC');
    return $encrypt;
};