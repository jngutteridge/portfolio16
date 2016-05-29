<?php


	class TemplateData {

		public static function echoHeader() {

			echo '<!DOCTYPE html>';
			echo '<html>';

			require_once 'templates/headtemplate.php';

			echo '<body>';

			require_once 'templates/headertemplate.php';
		}

		public static function echoFooter() {

			require_once 'templates/footertemplate.php';

			echo '</body>';
			echo '</html>';
		}

		public static function getTitle() {

			return 'Title';
		}
	}
