function hideShowInputBox(val) {

    if(val=='hide') {
        document.getElementById('inputBox').style.display='none';
    } else if(val=='show') {
        document.getElementById('inputBox').style.display = 'block';
    } 

    if(val=='showESC') {
        document.getElementById('inputBoxESC').style.display = 'block';
    } 

    if(val=='showScholar') {
        document.getElementById('inputBoxScholar').style.display = 'block';
    }

}