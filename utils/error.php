<?php

	class Error {

		public static function fatalError($message) {

			echo '<b>Fatal Error:</b> ' . $message;
			exit;
		}

		public static function pageNotFound() {

			$view = new NotFoundView();
			$view->echoTemplate();
		}
	}