<?php


	class WorkModel extends Model {

		public function getView() {

            $view = null;
            $request = $_SERVER['REQUEST_URI'];
            $requests = array_filter(explode('/', $request));

            if (count($requests) == 1) {

                TemplateData::addTitle('Work');
                $view = new WorkView();
            }
            elseif (count($requests) > 2) {

                $view = new NotFoundView();
            }
            else {

                switch ($requests[2]) {

                    case 'cite':

                        $view = new WorkCiteView();
                        TemplateData::addTitle('Cite Case Study');
                        break;

                    case 'redandsilver':

                        $view = new WorkRedandsilverView();
                        TemplateData::addTitle('Red &amp; Silver Case Study');
                        break;

                    case 'sheltonmachines':

                        $view = new WorkSheltonmachinesView();
                        TemplateData::addTitle('Shelton Vision Case Study');
                        break;

                    case 'xxxmints':

                        $view = new WorkXxxmintsView();
                        TemplateData::addTitle('XXX Mints Case Study');
                        break;

                    case 'benchinery':

                        $view = new WorkBenchineryView();
                        TemplateData::addTitle('Ben Chinery Case Study');
                        break;

                    case 'argentobrass':

                        $view = new WorkArgentobrassView();
                        TemplateData::addTitle('Argento Brass Case Study');
                        break;

                    case 'countfestchorus':

                        $view = new WorkCountfestchorusView();
                        TemplateData::addTitle('Countesthorpe Festival Chorus Case Study');
                        break;

                    default:

                        $view = new NotFoundView();
                }
            }

			return $view;
		}
	}
