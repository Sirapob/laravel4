<?php

/**
 * 
 */
class ExamFormController extends BaseController {
	
	public function myForm() {
		return View::make('exam_form.myform');
	}
	public function myLabel() {
		return View::make('exam_form.myLabel');
	}
}



?>