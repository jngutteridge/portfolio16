<?php


	class TemplateData {

        static protected $title;

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

			if (self::$title) return self::$title;
            else return 'Jack Gutteridge, Web Developer / Portfolio';
		}

        public static function setTitle($title) {

            self::$title = $title;
        }

        public static function addTitle($title) {

            self::$title = $title . ' / Jack Gutteridge, Web Developer / Portfolio';
        }
	}
