<?php


	class HomepageController extends Controller {

		public function getModel($request) {

			$model = new HomepageModel();
			return $model;
		}
	}
