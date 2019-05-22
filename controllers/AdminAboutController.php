<?php
class AdminAboutController extends AdminNewsController{
	public function actionAbout(){
		$AdminNewsController = new AdminNewsController();
		$AdminNewsController->UpdateContactInfo();
		$row = AdminHeader::headerInfo();
		
		$this->page['title'] = 'О нас';
		require_once ROOT."/views/admin/about.php";
		return true;
	}
}
?>