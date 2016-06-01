<?php


	class SkillsModel extends Model {

		public function getView() {

            TemplateData::addTitle('Skills');
			return new SkillsView();
		}
	}
