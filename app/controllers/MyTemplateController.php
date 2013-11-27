<?php

class MyTemplateController extends BaseController {
	
	// การเรียกใช้  Template
	public function index()
	{
		return View::make('my_template.index');
	}
	
	// ตัวอย่างการเรียกใช้  ตัวแปรใน  Template
	public function myVar()
	{
		return View::make('my_template.myVar')
			->with('var', 'Hello This is my Var.');
	}
	
	// ตัวอย่างการใช้เงื่อนไขใน  Template
	public function myCondition()
	{
		return View::make('my_template.myCondition');
	}
	
	// ตัวอย่างการใช้งาน  For ใน  Template
	public function myLoop()
	{
		return View::make('my_template.myLoop');
	}
	
	// ตัวอย่างการใช้งาน  Include ใน  Template
	public function myInclude()
	{
		return View::make('my_template.myInclude');
	}
	
	// ตัวอย่างการใช้งาน  Comment ใน  Template myComment
	public function myComment()
	{
		return View::make('my_template.myComment');
	}

}