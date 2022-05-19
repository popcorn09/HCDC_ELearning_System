// Start Quiz 
const questions = [
    {
        question: "What field does not influence by HCI?",
        correctAns: "COGNITIVE PSYCHOLOGY",
        answer: ""
    },
    {
        question: "An icon of a file folder, which users can drop files on in order to move them into the folder.",
        correctAns: "METAPHOR",
        answer: ""
    },
    {
        question: "You drag a folder to make a copy of its contents. An animation appears on screen, showing the files moving from one folder to another. This is an example of:",
        correctAns: "FEEDBACK",
        answer: ""
    },
    {
        question: "In virtual reality which of the senses cannot currently be portrayed?",
        correctAns: "SMELL",
        answer: ""
    },
    {
        question: "In HCI, it is not an interface style?",
        correctAns: "VOICE RECOGNITION",
        answer: ""
    }
];
let score = 0;

let questionIndex = 0;
let answer = document.getElementById("answer");

const nextButton = document.getElementById("nextQuestion");
const prevButton = document.getElementById("prevQuestion");
const submitButton = document.getElementById("submitTheTest");
const scoreInput = document.getElementById("score");
nextButton.onclick = nextquestion;
prevButton.onclick = prevquestion;
submitButton.onclick = submitTheTest;

document.getElementById("question").innerHTML = questions[questionIndex].question;

hideButton();

// Hides button when not needed
function hideButton() {
    if (prevButton.style.display != "none") {
        if (questionIndex == 0) {
            prevButton.style.display = "none";
        }
    } else if (prevButton.style.display == "none") {
        prevButton.style.display = "inline";
    }
    if (nextButton.style.display != "none") {
        if (questionIndex == questions.length - 1) {
            nextButton.style.display = "none";
        }
    }
    else if (nextButton.style.display == "none") {
        nextButton.style.display = "inline";
    }
}

function prevquestion() {
    if (questionIndex > 0) {
        saveInput('-');
        document.getElementById("question").innerHTML = questions[questionIndex].question;
    }
    hideButton();
}

function nextquestion() {
    if (questionIndex < questions.length - 1) {
        saveInput('+');
        document.getElementById("question").innerHTML = questions[questionIndex].question;
    }
    hideButton();
}

// Save input, change index and show previous input
function saveInput(unaryOperator) {
    questions[questionIndex].answer = answer.value;
    console.log(answer);
    if (unaryOperator == '+') {
        questionIndex++;
    } else if (unaryOperator == '-') {
        questionIndex--;
    } else {
        //None
    }
    if (unaryOperator == "+" || unaryOperator == "-") {
        answer.value = questions[questionIndex].answer;
    }
}


function submitTheTest() {
    questions[questionIndex].answer = answer.value;
    console.log(answer);
    showDialogBox();
    computeScore();
}
// End Quiz



// Start Custom Dialog Box
function dlgConfirm() {
    hideDialogBox();
}

function dlgCancel() {
    hideDialogBox();
}

function hideDialogBox() {
    let whitebg = document.getElementById("dark-background");
    let dlg = document.getElementById("dlgbox");
    whitebg.style.display = "none";
    dlg.style.display = "none";
}

function showDialogBox() {
    let whitebg = document.getElementById("dark-background");
    let dlg = document.getElementById("dlgbox");
    whitebg.style.display = "flex";
    dlg.style.display = "block";
}
// End Custom Dialog Box

// Score Compute
function computeScore() {
    questions.forEach(checkIfCorrect);
    scoreInput.value = score;
    // window.alert("Score: " + score);
    score = 0;
    resultSave();
}

function checkIfCorrect(question) {
    let correctAns = question.correctAns.toLowerCase().trim();
    let answer = question.answer.toLowerCase().trim();
    if (answer == correctAns) {
        score++;
    }
}
// End Score Compute