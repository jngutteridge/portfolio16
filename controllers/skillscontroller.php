<?php


	class SkillsController extends Controller {

		public function getModel($request) {

			$model = new SkillsModel();
			return $model;
		}
	}
