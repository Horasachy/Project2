<?php
class GalleryController{
	public function actionGallery(){
		$doc_spo = AdminElearning::inputDocumetsSpo();
		$row = AdminHeader::headerInfo();
		

		$this->page['title'] = 'Фотоальбом';
		require_once ROOT."/views/main/gallery.php";
		return true;
	}
}
?>