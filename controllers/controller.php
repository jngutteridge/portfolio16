<?php


	abstract class Controller {

		public function init($request) {

			$model = $this->getModel($request);
			$view = $model->getView();
			$view->echoTemplate($model);
		}

		abstract public function getModel($request);
	}