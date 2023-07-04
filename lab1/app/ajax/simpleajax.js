// file simpleajax.js

// get XMLHttpRequest object or ActiveXObject(for IE5, IE6)
var xhr = createRequest();

// function to get data from 
function getData(dataSource, divID, aName, aPwd)  {
    if(xhr) {

		// get reference to the div
	    var place = document.getElementById(divID);

		// open php file with name and password as parameters
	    var url = dataSource+"?namefield="+aName+"&pwdfield="+aPwd;

		// use xhr object to send GET request to php server
	    xhr.open("GET", url, false);

		// onreadystatechange event handler for when php server responds
	    xhr.onreadystatechange = function() {
		    //alert(xhr.readyState);

			// if response is ready
			if (xhr.readyState == 4 && xhr.status == 200) {

				// put php response in div
			place.innerHTML = xhr.responseText;
		    } 
			// end if
	    } // end anonymous call-back function
	    xhr.send(null);
	} // end if
} // end function getData()