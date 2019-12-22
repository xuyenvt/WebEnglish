<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WelcomeController@CateStory');

Route::group(['prefix' => 'admin'], function(){
	//danh muc truyen
	Route::group(['prefix' => 'story'], function(){
		Route::get('list', ['as' => 'admin.story.list', 'uses' => 'CateStoryController@getList']);
		Route::get('add', ['as' => 'admin.story.getAdd', 'uses' => 'CateStoryController@getAdd']);
		Route::post('add', ['as' => 'admin.story.postAdd', 'uses' => 'CateStoryController@postAdd']);

		Route::get('delete/{id}', ['as' => 'admin.story.getDelete', 'uses' => 'CateStoryController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.story.getEdit', 'uses' => 'CateStoryController@getEdit']);
		Route::post('edit/{id}', ['as' => 'admin.story.postEdit', 'uses' => 'CateStoryController@postEdit']);
	});

	//truyen chi tiet
	Route::group(['prefix' => 'stories'], function(){
		Route::get('list', ['as' => 'admin.stories.list', 'uses' => 'StoriesController@getList']);
		Route::get('add', ['as' => 'admin.stories.getAdd', 'uses' => 'StoriesController@getAdd']);
		Route::post('add', ['as' => 'admin.stories.postAdd', 'uses' => 'StoriesController@postAdd']);

		Route::get('delete/{id}', ['as' => 'admin.stories.getDelete', 'uses' => 'StoriesController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.stories.getEdit', 'uses' => 'StoriesController@getEdit']);
		Route::post('edit/{id}', ['as' => 'admin.stories.postEdit', 'uses' => 'StoriesController@postEdit']);
	});

	//danh muc video

	Route::group(['prefix' => 'catevideo'], function(){
		Route::get('list', ['as' => 'admin.catevideo.list', 'uses' => 'CateVideoController@getList']);
		Route::get('add', ['as' => 'admin.catevideo.getAdd', 'uses' => 'CateVideoController@getAdd']);
		Route::post('add', ['as' => 'admin.catevideo.postAdd', 'uses' => 'CateVideoController@postAdd']);

		Route::get('delete/{id}', ['as' => 'admin.catevideo.getDelete', 'uses' => 'CateVideoController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.catevideo.getEdit', 'uses' => 'CateVideoController@getEdit']);
		Route::post('edit/{id}', ['as' => 'admin.catevideo.postEdit', 'uses' => 'CateVideoController@postEdit']);
	});

	//videos 

	Route::group(['prefix' => 'videos'], function(){
		Route::get('list', ['as' => 'admin.videos.list', 'uses' => 'VideoController@getList']);
		Route::get('add', ['as' => 'admin.videos.getAdd', 'uses' => 'VideoController@getAdd']);
		Route::post('add', ['as' => 'admin.videos.postAdd', 'uses' => 'VideoController@postAdd']);

		Route::get('delete/{id}', ['as' => 'admin.videos.getDelete', 'uses' => 'VideoController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.videos.getEdit', 'uses' => 'VideoController@getEdit']);
		Route::post('edit/{id}', ['as' => 'admin.videos.postEdit', 'uses' => 'VideoController@postEdit']);
	});


});



/*
Route::get('/hello', function(){
	return "xin chao cac ban";
});

Route::get('Eng/admin', function(){
	echo "<h1>WebSite tự học Tiếng Anh cho học sinh lớp 6<h1>";
});
*/
/*
//Truyền tham số-mõi lần truyền để trong nháy nhọn
Route::get('HoTen/{ten}', function($ten){
	echo "Tên của bạn là: ".$ten;
})->where(['ten' => '[a-zA-Z]+']);

//định danh cho route-sử dụng trong form hay là điều hướng trang
//cách1
Route::get('Route1', ['as' => 'MyRoute', function(){
	echo "Xin chào các bạn";
}]);

//cách 2

Route::get('Route2', function(){
	echo "Đây là route 2";
}) -> name('MyRoute2') ;

Route::get('GoiTen', function(){
	return redirect()->route('MyRoute');
});

//gọi controller
//tengoitren trình duyêt, ten file@tenfunction
Route::get('GoiController', 'MyController@XinChao');
Route::get('ThamSo/{ten}', 'MyController@KhoaHoc');

//URL
Route::get('thongtin', 'MyController@showinfo');

//Gui nhan du lieu voi request

Route::get('getForm', function(){
	return view('postForm');//view la file giao dien trong laravel
});

Route::post('postForm', ['as'=>'postForm', 'uses'=>'MyController@postForm']);
//de goi route trong hệ thống cần gọi route qua 1 định danh nào đó-->postForm là định danh

Route::get('callView', function(){
	$hoten = "Xuyến";
	return view('thongtin', compact('hoten'));//lấy tên của biến
});

//gọi controller trong router

//Route::get('testController', function());
Route::get('test', function(){
	return view('admin.story.list');
});*/