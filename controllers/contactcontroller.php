<?php


	class ContactController extends Controller {

		public function getModel($request) {

			$model = new ContactModel();
			return $model;
		}
	}
