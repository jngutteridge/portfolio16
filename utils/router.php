<?php


	class Router {

		protected $request;

		public static function doRouting() {

			$request = $_SERVER['REQUEST_URI'];

			if (substr($request, -1) != '/') {

				header("HTTP/1.1 301 Moved Permanently");
				header("Location: http://" . $_SERVER['HTTP_HOST'] . $request . "/");
				exit;
			}

			switch ($request) {

                case '/':
                    $controller = new HomepageController();
                    $controller->init($request);
                    break;

                case '/work/':
                    $controller = new WorkController();
                    $controller->init($request);
                    break;

                case '/skills/':
                    $controller = new SkillsController();
                    $controller->init($request);
                    break;

                case '/contact/':
                    $controller = new ContactController();
                    $controller->init($request);
                    break;

 				default:

 					if (substr($request, 0, 6)=='/work/') {

 						$controller = new WorkController();
 						$controller->init($request);
 					}
 					else {

 					    Error::pageNotFound();
                    }
			}
		}
	}
