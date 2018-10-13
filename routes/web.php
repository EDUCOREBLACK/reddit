<?php


route::get('/posts','PostsController@index');
route::get('/posts/{id}','PostsController@show');