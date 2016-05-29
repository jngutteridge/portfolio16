<?php

	abstract class View {

		protected $template;

		public function __construct() {

			$this->template = substr(strtolower(get_class($this)), 0, -4) . 'template';
		}

		public function echoTemplate($model = false) {

            TemplateData::echoHeader();
			require_once 'templates/' . $this->template . '.php';
            TemplateData::echoFooter();
		}
	}
