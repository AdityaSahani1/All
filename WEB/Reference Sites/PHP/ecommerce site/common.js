function allowNumberOnly(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))
		return false;
	
	return true;
}
function allowAlphaNumerics(evt){
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57) && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122))
		return false;

	return true;
}

String.prototype.trim = function () {
	  return this.replace(/^\s*/, "").replace(/\s*$/, "");
}	