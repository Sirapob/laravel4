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

Route::get('/', function()
{
	return View::make('hello ');
});

Route::get('/hello', function()
{
	return 'testprite';
});

// Routing

// แบบ  GET
Route::get('/testGet', function()
{
	return 'Test Get Route. !';
});

// แบบ  POST
Route::post('/testPost', function()
{
	return 'Test Post Route. !';
});

Route::get('/loadForm', function()
{
	return View::make('testForm');
});

// แบบ  Any
Route::any('/anyRoute', function()
{
	return 'For Any Route. !';
});

// Route Parameters

// แบบ  ปกติ
Route::get('myId/{id}', function($id)
{
	return 'id = '.$id;
});

// แบบมี  parameter default null
Route::get('myName/{name?}', function($name = null)
{
	return 'name = '.$name;
});

// แบบระบุข้อมูลให้  parameter default
Route::get('myName2/{name2?}', function($name2 = 'Tong')
{
	return 'name2 = '.$name2;
});

// แบบใช้งาน  regular expression
Route::get('myName3/{name3}', function($name3)
{
	return 'name3 = '.$name3.' from regular expression route.';
})
->where ('name3', '[A-Za-z]+');

Route::get('myId3/{id3}', function($id3)
{
	return 'id3 = '.$id3.' from regular expression route.';
})
->where ('id3', '[0-9]+');

// แบบใช้งาน  regular expression แบบ  array
Route::get('myId-Name/{id}/{name}', function($id, $name)
{
	return 'id = '.$id.' and name = '.$name.' use array regix.';
})
->where (array('id' => '[0-9]+', 'name' => '[A-Za-z]+'));

// Route Prefixing
Route::group(array('prefix' => 'admin'), function()
{
	Route::get('user', function()
	{
		return 'From admin/user.';
	});
	/*Route::get('admin', function()
	{
		return 'From admin/admin.';
	});*/
});

// View

// การแสดงผลเบื้องต้น
Route::get('/testView', function()
{
	return 'test view';
});

// การแสดงผลโดยเรียกไฟล์ใน  View
Route::get('/testView2', function()
{
	return View::make('testView');
});

// การส่งตัวแปรไปที่  Views ด้วยการส่ง  Parameter
Route::get('/passVar', function()
{
	return View::make('passVar', array(
		'name' => 'Artit'
	));
});

// การส่งตัวแปรไปที่  Views ด้วยการส่ง  Method
Route::get('/passVarByMethod', function()
{
	return View::make('passVarByMethod')
		->with('name', 'Artir Rouydee');
});

// Controller

// การสร้าง  Controller และเรียกใช้เบื้องต้น
Route::get('/exam/index', 'ExamController@index');

// ใช้  Controller เรียก  View แสดงผล
Route::get('/exam/myView', 'ExamController@myView');

// ใช้  Controller เรียก  View แบบมีตัวแปรไปแสดงผลด้วย
Route::get('/exam/showVar', 'ExamController@showVar');

// ใช้  Controller เรียก  View แบบมีตัวแปรไปแสดงผล  แบบ  Method
Route::get('/exam/showVarWithMethod', 'ExamController@showVarWithMethod');

// การใช้งาน  Redirect to
Route::get('goToDisplay', 'ExamRedirectController@goToDisplay');

Route::get('display', 'ExamRedirectController@display');

// การใช้งาน  Redirect to แบบมี  Flash Message
Route::get('setText', 'ExamRedirectController@setText');

Route::get('getText', 'ExamRedirectController@getText');

// การดักจับ  กรณีไม่มี  Method ที่เรียกใช้
Route::get('Okay', 'HomeController@okay');

// Template

// การเรียกใช้  Template
Route::get('myTemplate', 'MyTemplateController@index');

// ตัวอย่างการเรียกใช้  ตัวแปรใน  Template
Route::get('myVar', 'MyTemplateController@myVar');

// ตัวอย่างการใช้เงื่อนไขใน  Template
Route::get('myCondition', 'MyTemplateController@myCondition');

// ตัวอย่างการใช้งาน  For ใน  Template
Route::get('myLoop', 'MyTemplateController@myLoop');

// ตัวอย่างการใช้งาน  Include ใน  Template
Route::get('myInclude', 'MyTemplateController@myInclude');

// ตัวอย่างการใช้งาน  Comment ใน  Template
Route::get('myComment', 'MyTemplateController@myComment');
