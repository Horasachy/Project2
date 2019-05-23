<?php
class AboutController{
	public function actionAbout(){
		$contactsRow = AdminAbout::viewContacts();
		$documentRow = AdminAbout::viewDocuments();
		$accordionRow = AdminAbout::viewAccordion();
		$row = AdminHeader::headerInfo();
		

		$this->page['title'] = 'О нас';
		require_once ROOT."/views/main/about.php";
		return true;
	}
}
?>