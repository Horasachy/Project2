function Insert(text, inputID){
	event.preventDefault();
	document.getElementById(inputID).value += text;
	return false;

}