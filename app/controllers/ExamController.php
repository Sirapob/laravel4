<?php

class ExamController extends BaseController {
	
	// การสร้าง  Controller และเรียกใช้เบื้องต้น
	public function index()
	{
		return '"index" Method From "ExamController".';
	}
	
	// ใช้  Controller เรียก  View แสดงผล
	public function myView()
	{
		return View::make('exam.myView');
	}
	
	// ใช้  Controller เรียก  View แบบมีตัวแปรไปแสดงผลด้วย
	public function showVar()
	{
		return View::make('exam.showVar', array(
			'var' => '1234'
		));
	}
	
	// ใช้  Controller เรียก  View แบบมีตัวแปรไปแสดงผล  แบบ  Method
	public function showVarWithMethod()
	{
		return View::make('exam.showVarWithMethod')
			->with('var', 'abc_1234');
	}

}
?>