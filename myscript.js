

function showInputs() {
  var element = document.getElementsByClassName("hid");

 	for (var i = 0; i < element.length; i++) {
 		
 	

  	if(element[i].style.display === "block")
  	{
  		element[i].style.display = "none";
  	}

  	else
  	{
  		element[i].style.display = "block";
  	}
  }
}