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

function progressBar(val) {

    let hasExecuted1 = localStorage.getItem('hasExecuted1') === 'true';
    let hasExecuted2 = localStorage.getItem('hasExecuted2') === 'true';
    let hasExecuted3 = localStorage.getItem('hasExecuted3') === 'true';
    let hasExecuted4 = localStorage.getItem('hasExecuted4') === 'true';

    if (val == 1 && !hasExecuted1) {
        parent.document.getElementById('student-profile').style.color = "#808080";
        parent.document.getElementById('student-profile').style.fontSize = "14px";
        parent.document.getElementById('student-profile').style.fontWeight = "light";

        parent.document.getElementById('academic-info').style.color = "black";
        parent.document.getElementById('academic-info').style.borderColor = "#00004C";
        parent.document.getElementById('academic-info').style.fontWeight = "bold";
        parent.document.getElementById('academic-info').style.fontSize = "18px";

        localStorage.setItem('hasExecuted1', 'true');
    }

    if (val == 2 && !hasExecuted2) {
        parent.document.getElementById('academic-info').style.color = "#808080";
        parent.document.getElementById('academic-info').style.fontSize = "14px";
        parent.document.getElementById('academic-info').style.fontWeight = "light";

        parent.document.getElementById('parent-info').style.color = "black";
        parent.document.getElementById('parent-info').style.borderColor = "#00004C";
        parent.document.getElementById('parent-info').style.fontWeight = "bold";
        parent.document.getElementById('parent-info').style.fontSize = "18px";
        
        localStorage.setItem('hasExecuted2', 'true');
    }

    if (val == 3 && !hasExecuted3) {
        parent.document.getElementById('parent-info').style.color = "#808080";
        parent.document.getElementById('parent-info').style.fontSize = "14px";
        parent.document.getElementById('parent-info').style.fontWeight = "light";

        parent.document.getElementById('edu-bg').style.color = "black";
        parent.document.getElementById('edu-bg').style.borderColor = "#00004C";
        parent.document.getElementById('edu-bg').style.fontWeight = "bold";
        parent.document.getElementById('edu-bg').style.fontSize = "18px";

        localStorage.setItem('hasExecuted3', 'true');
    }

    if (val == 4 && !hasExecuted4) {
        parent.document.getElementById('edu-bg').style.color = "#808080";
        parent.document.getElementById('edu-bg').style.fontSize = "14px";
        parent.document.getElementById('edu-bg').style.fontWeight = "light";

        parent.document.getElementById('requirements').style.color = "black";
        parent.document.getElementById('requirements').style.borderColor = "#00004C";
        parent.document.getElementById('requirements').style.fontWeight = "bold";
        parent.document.getElementById('requirements').style.fontSize = "18px";

        localStorage.setItem('hasExecuted4', 'true');
    }
}

function loadProgressBarState() {

    let hasExecuted1 = localStorage.getItem('hasExecuted1') === 'true';
    let hasExecuted2 = localStorage.getItem('hasExecuted2') === 'true';
    let hasExecuted3 = localStorage.getItem('hasExecuted3') === 'true';
    let hasExecuted4 = localStorage.getItem('hasExecuted4') === 'true';

    if (hasExecuted1) {
        parent.document.getElementById('student-profile').style.color = "#808080";
        parent.document.getElementById('student-profile').style.fontSize = "14px";
        parent.document.getElementById('student-profile').style.fontWeight = "light";

        parent.document.getElementById('academic-info').style.color = "black";
        parent.document.getElementById('academic-info').style.borderColor = "#00004C";
        parent.document.getElementById('academic-info').style.fontWeight = "bold";
        parent.document.getElementById('academic-info').style.fontSize = "18px";
    }

    if (hasExecuted2) {
        parent.document.getElementById('academic-info').style.color = "#808080";
        parent.document.getElementById('academic-info').style.fontSize = "14px";
        parent.document.getElementById('academic-info').style.fontWeight = "light";

        parent.document.getElementById('parent-info').style.color = "black";
        parent.document.getElementById('parent-info').style.borderColor = "#00004C";
        parent.document.getElementById('parent-info').style.fontWeight = "bold";
        parent.document.getElementById('parent-info').style.fontSize = "18px";
    }

    if (hasExecuted3) {
        parent.document.getElementById('parent-info').style.color = "#808080";
        parent.document.getElementById('parent-info').style.fontSize = "14px";
        parent.document.getElementById('parent-info').style.fontWeight = "light";

        parent.document.getElementById('edu-bg').style.color = "black";
        parent.document.getElementById('edu-bg').style.borderColor = "#00004C";
        parent.document.getElementById('edu-bg').style.fontWeight = "bold";
        parent.document.getElementById('edu-bg').style.fontSize = "18px";
    }

    if (hasExecuted4) {
        parent.document.getElementById('edu-bg').style.color = "#808080";
        parent.document.getElementById('edu-bg').style.fontSize = "14px";
        parent.document.getElementById('edu-bg').style.fontWeight = "light";

        parent.document.getElementById('requirements').style.color = "black";
        parent.document.getElementById('requirements').style.borderColor = "#00004C";
        parent.document.getElementById('requirements').style.fontWeight = "bold";
        parent.document.getElementById('requirements').style.fontSize = "18px";
    }
}

window.onload = loadProgressBarState;

function resetProgressBar() {

    localStorage.removeItem('hasExecuted1');
    localStorage.removeItem('hasExecuted2');
    localStorage.removeItem('hasExecuted3');
    localStorage.removeItem('hasExecuted4');
}

document.getElementById('submit-button').addEventListener('click', function() {
    resetProgressBar();
});
