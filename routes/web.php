<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Find Authors
$router->get('/authors', ['uses' => 'AuthorController@showAllAuthors']);
$router->get('/authors/{author_id}', ['uses' => 'AuthorController@showOneAuthor']);

// Author CRUD
$router->post('/authors', ['uses' => 'AuthorController@createAuthor']);
$router->put('/authors/{author_id}', ['uses' => 'AuthorController@updateAuthor']);
$router->delete('/authors/{author_id}', ['uses' => 'AuthorController@deleteAuthor']);

// Find Books
$router->get('/books', ['uses' => 'AuthorController@showAllBooks']);

$router->get('/authors/{author_id}/books', ['uses' => 'AuthorController@showAllBooksFromAuthor']);

$router->get('/authors/{author_id}/books/{book_id}', ['uses' => 'AuthorController@showOneBook']);

// Book CRUD
$router->post('/authors/{author_id}/books', ['uses' => 'AuthorController@createBook']);
$router->put('/authors/{author_id}/books/{book_id}', ['uses' => 'AuthorController@updateBook']);
$router->delete('/authors/{author_id}/books/{book_id}', ['uses' => 'AuthorController@deleteBook']);
//Comments CRUD
$router->post('/books/{book_id}/comments', ['uses' => 'AuthorController@createComment']);


//Find Comments
$router->get('comments',  ['uses' => 'AuthorController@showAllComments']);
$router->get('/books/{book_id}/comments/{comment_id}', ['uses' => 'AuthorController@showAllCommentsFromBook']);



