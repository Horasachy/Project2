<?php
class AdminElearningController{
	public function actionElearning(){	
		$AdminNewsController = new AdminNewsController();
		$AdminNewsController->UpdateContactInfo();
		$this->AddDocumentsSpo();
		$this->removeDocumentSpo();
		Session::sessionExists();
		$row = AdminHeader::headerInfo();
		$doc_spo = AdminElearning::inputDocumetsSpo();

		if (isset($_POST['exit'])) {
			Session::logout();
		}

		$this->page['title'] = 'Электронное образование';
		require_once ROOT."/views/admin/elearning.php";
		return true;
	}

	public function actionViewDocumentsSpo($id){
		$document = AdminElearning::viewDocumentSpo($id);
		header('Content-Type:'.$document['mime']);
		echo $document['data'];
		return true;
	}
	// Удаление документа
	public function removeDocumentSpo(){
		if(!empty($_POST['removeDocumentSpo'])){
			$removeDocumentSpo  = $_POST['removeDocumentSpo'];
		}
		if(!empty($_POST['idDocumentsSpo'])){
			$id   	 = $_POST['idDocumentsSpo'];
		}
		if (isset($removeDocumentSpo)) {
			if(AdminElearning::removeDocumentSpo($id)){
				header("Location:/elearning.php");
			}
		}
		return true;
	}

		//добавление документа 
	public function AddDocumentsSpo(){
		if(!empty($_POST['submit'])){
			$submit  = $_POST['submit'];
		}
		if (!empty($_FILES['documentSpo']['name'])) {
			$name  = $_FILES['documentSpo']['name'];	
		}
		if (!empty($_FILES['documentSpo']['type'])) {
			$type  = $_FILES['documentSpo']['type'];
		}
		if (!empty($_FILES['documentSpo']['name'])) {
			$data  = file_get_contents($_FILES['documentSpo']['tmp_name']);
		}	
		if (!empty($_POST['documentNameSpo'])) {
			$documentNameSpo  = $_POST['documentNameSpo'];
		}	
		if (isset($submit)){
			if(AdminElearning::addDocumentSpo($name, $type, $data, $documentNameSpo)){
				header("Location:/adminElearning");
			}
		}
		return true;
	}		
}
?>