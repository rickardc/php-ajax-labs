// file xhr.js
 function createRequest() {
    var xhr = false;  
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
        console.log("XMLHttpRequest");
    }
    else if (window.ActiveXObject) {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
        console.log("Microsoft.XMLHTTP");
    }
    return xhr;
} // end function createRequest()
