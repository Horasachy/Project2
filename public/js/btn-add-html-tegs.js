function storeCaret(element){
	if (typeof(document.selection) != 'undefined' && typeof(document.selection.createRange) != 'undefined')
		element.caretPos=document.selection.createRange().duplicate();
}

function insertText(element, text){
	event.preventDefault();
	if (!element)
		return;

	element.focus();
	if (typeof(element.caretPos) != 'undefined')
		element.caretPos.text = text;
	else if (typeof(element.selectionStart) != 'undefined')
	{
		var newPos = element.selectionEnd + text.length;
		element.value = element.value.substring(0, element.selectionStart) + text + element.value.substring(element.selectionEnd, element.value.length);
		element.setSelectionRange(newPos, newPos);
	}
	else
		element.value += text;
}

