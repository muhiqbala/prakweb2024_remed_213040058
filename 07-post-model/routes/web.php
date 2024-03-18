Route::get('/posts', [PostController::class, 'index']);

Route::get('post/{slug}', [PostController::class, 'show']);
