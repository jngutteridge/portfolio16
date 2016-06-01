<?php

	require_once('utils/error.php');
	require_once('utils/router.php');
	require_once('utils/templatedata.php');

	require_once('controllers/controller.php');
    require_once('controllers/contactcontroller.php');
    require_once('controllers/homepagecontroller.php');
    require_once('controllers/workcontroller.php');
    require_once('controllers/skillscontroller.php');

	require_once('models/model.php');
    require_once('models/contactmodel.php');
    require_once('models/homepagemodel.php');
    require_once('models/workmodel.php');
    require_once('models/skillsmodel.php');

	require_once('views/view.php');
    require_once('views/contactview.php');
	require_once('views/homepageview.php');
    require_once('views/notfoundview.php');
    require_once('views/workciteview.php');
    require_once('views/workredandsilverview.php');
    require_once('views/worksheltonmachinesview.php');
    require_once('views/workxxxmintsview.php');
    require_once('views/workbenchineryview.php');
    require_once('views/workargentobrassview.php');
    require_once('views/workcountfestchorusview.php');
    require_once('views/workview.php');
    require_once('views/skillsview.php');
