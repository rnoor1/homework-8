$router->get('/api/posts', 'PostController@getPosts');
$router->post('/api/posts', 'PostController@savePost');

