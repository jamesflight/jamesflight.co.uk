<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'bloglist', function()
{
	$files = File::files('../posts');
	$files = array_reverse($files);
	foreach($files as $file)
	{
		$posts[] = new Post($file);
	}
	return View::make('bloglist')->with('posts', $posts);
}));

Route::get('/posts/{title}', array('as' => 'post-single', function($title)
{
	$files = File::files('../posts');
	foreach($files as $file)
	{
		if (strpos(basename($file), $title))
		{

			$post = new Post($file);
			return View::make('post-single')->with('post', $post);
		}
	}
}));

Route::get('/about', function(){
	return View::make('about');
});