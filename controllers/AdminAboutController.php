<?php
class AdminAboutController extends AdminNewsController{
	public function actionAbout(){
		$AdminNewsController = new AdminNewsController();
		$AdminNewsController->UpdateContactInfo();
		if (isset($_POST['exit'])) {
			Session::logout();
		}
		Session::sessionExists();
		$row = AdminHeader::headerInfo();
		//обнавление контактов
		$this->UpdateContacts();	
		//вывод контактов
		$contactsRow = AdminAbout::viewContacts();
		//добавление доументов
		$this->AddDocuments();
		//удаление документа
		$this->removeDocument();
		//вывод документов
		$documentRow = AdminAbout::viewDocuments();
		//вывод акордиона
		$accordionRow = AdminAbout::viewAccordion();
		//добавление аккордиона
		$this->AddAccordion();
		//Удаление аккордиона
		$this->removeAccordion();
		$this->page['title'] = 'О нас';
		require_once ROOT."/views/admin/about.php";
		return true;
		
	}
	public function actionViewDocuments($id){
		$document = AdminAbout::viewDocument($id);
		header('Content-Type:'.$document['mime']);
		echo $document['data'];
		return true;
	}
		
	//Апдейт контанктной информации
	public function UpdateContacts(){
		if(!empty($_POST['addContacts'])){
			$addContacts = $_POST['addContacts'];
		}
		if(!empty($_POST['contacts'])){
			$contacts    = $_POST['contacts'];
		}
		if (isset($addContacts)) {
			if(AdminAbout::UpdateCont($contacts)){
				header("Location:/adminAbout");
			}
		}
		return true;
	}
	//добавление документа 
	public function AddDocuments(){
		if(!empty($_POST['addDocument'])){
			$addDocument  = $_POST['addDocument'];
		}
		if (!empty($_FILES['document']['name'])) {
			$name  = $_FILES['document']['name'];			
		}
		if (!empty($_FILES['document']['type'])) {
			$type  = $_FILES['document']['type'];
		}
		if (!empty($_FILES['document']['name'])) {
			$data  = file_get_contents($_FILES['document']['tmp_name']);
		}	
		if (isset($addDocument)) {
			if(AdminAbout::addDocuments($name, $type, $data)){
				header("Location:/adminAbout");
			}
		}
		return true;
	}
	// Удаление документа
	public function removeDocument(){
		if(!empty($_POST['removeDocument'])){
			$removeDocument  = $_POST['removeDocument'];
		}
		if(!empty($_POST['idDocuments'])){
			$id   	 = $_POST['idDocuments'];
		}
		if (isset($removeDocument)) {
			if(AdminAbout::removeDocuments($id)){
				header("Location:/adminAbout");
			}
		}
		return true;
	}

		//добавление акордиона 
	public function AddAccordion(){
		if(!empty($_POST['addAccordion'])){
			$addAccordion  = $_POST['addAccordion'];
		}
		if(!empty($_POST['accordion_title'])){
			$accordion_title    = $_POST['accordion_title'];
		}
		if(!empty($_POST['accordion_content'])){
			$accordion_content    = $_POST['accordion_content'];
		}
		if (isset($addAccordion)) {
			if(AdminAbout::addAccordion($accordion_title, $accordion_content)){
				header("Location:/adminAbout");
			}
		}
		return true;
	}
	//Удаление акордиона
	public function removeAccordion(){
		if(!empty($_POST['removeAccordion'])){
			$removeAccordion  = $_POST['removeAccordion'];
		}
		if(!empty($_POST['idAccordion'])){
			$id   	 = $_POST['idAccordion'];
		}
		if (isset($removeAccordion)) {
			if(AdminAbout::RemoveAccordion($id)){
				header("Location:/adminAbout");
			}
		}
		return true;
	}
}
?>