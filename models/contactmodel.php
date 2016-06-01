<?php


	class ContactModel extends Model {

		public function getView() {

            TemplateData::addTitle('Contact');
			return new ContactView();
		}
	}
