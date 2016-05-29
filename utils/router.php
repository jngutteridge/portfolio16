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

 				default:

 					/*if (substr($request, 0, 13)=='/destination/') {

 						$controller = new DestinationController();
 						$controller->init($request);
 					}
 					elseif (substr($request, 0, 15)=='/holiday-types/') {

 						$controller = new TypesController();
 						$controller->init($request);
 					}
 					elseif (substr($request, 0, 8)=='/hotels/') {

 						$controller = new HotelsController();
 						$controller->init($request);
 					}
 					else { */

 					Error::pageNotFound();
			}
		}
	}
