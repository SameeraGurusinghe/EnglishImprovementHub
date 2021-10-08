// select all elements
const start = document.getElementById("start");
const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const qImg = document.getElementById("qImg");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const counter = document.getElementById("counter");
const timeGauge = document.getElementById("timeGauge");
const progress = document.getElementById("progress");
const scoreDiv = document.getElementById("scoreContainer");

// create our questions
let questions = [
    {
        question : "A letter written in cursive script with a pen instead of being typed is",
        imgSrc : "img/i.jpg",
        choiceA : "penned.",
        choiceB : "scripted.",
        choiceC : "handwritten.",
        correct : "C"
    },{
        question : "If you're polishing what you've written, you're",
        imgSrc : "img/i.jpg",
        choiceA : "printing it.",
        choiceB : "perfecting it.",
        choiceC : "punctuating it .",
        correct : "B"
    },{
        question : "If someone writes a book about teaching languages, who are their target readers? ",
        imgSrc : "img/i.jpg",
        choiceA : "language teachers.",
        choiceB : "language learners.",
        choiceC : "language writers .",
        correct : "A"
    },{
        question : "If you're writing your resumé, you're writing a summary of your",
        imgSrc : "img/i.jpg",
        choiceA : "employment goals.",
        choiceB : "work and life skills.",
        choiceC : "education and work history.",
        correct : "C"
    },{
        question : "The target readers of a resumé or CV are those who _______ new staff.",
        imgSrc : "img/i.jpg",
        choiceA : "hire.",
        choiceB : "fire.",
        choiceC : "train.",
        correct : "A"
    },{
        question : "What are you looking for if you're proofreading a written document?",
        imgSrc : "img/i.jpg",
        choiceA : "mistakes and typos.",
        choiceB : "style and flow.",
        choiceC : "plagiarism .",
        correct : "A" 
    },{
        question : " If another writer has plagiarized something you've written, they've",
        imgSrc : "img/i.jpg",
        choiceA : "copied it.",
        choiceB : "dictated it.",
        choiceC : "improved it .",
        correct : "A" 
    },{
        question : "What do bloggers write?",
        imgSrc : "img/i.jpg",
        choiceA : "bad logs.",
        choiceB : "website codes.",
        choiceC : "online journals .",
        correct : "B" 
    },{
        question : "A writer's formal mention of the source of information or a quote they've used is called",
        imgSrc : "img/i.jpg",
        choiceA : "feedback.",
        choiceB : "a citation.",
        choiceC : "note-taking.",
        correct : "B" 
    },{
        question : "Dictation is an exercise that requires you to write down exactly what you",
        imgSrc : "img/i.jpg",
        choiceA : "say.",
        choiceB : "hear.",
        choiceC : "think.",
        correct : "B" 
    }
];

// create some variables

const lastQuestion = questions.length - 1;
let runningQuestion = 0;
let count = 0;
const questionTime = 10; // 10s
const gaugeWidth = 150; // 150px
const gaugeUnit = gaugeWidth / questionTime;
let TIMER;
let score = 0;

// render a question
function renderQuestion(){
    let q = questions[runningQuestion];
    
    question.innerHTML = "<p>"+ q.question +"</p>";
    qImg.innerHTML = "<img src="+ q.imgSrc +">";
    choiceA.innerHTML = q.choiceA;
    choiceB.innerHTML = q.choiceB;
    choiceC.innerHTML = q.choiceC;
}

start.addEventListener("click",startQuiz);

// start quiz
function startQuiz(){
    start.style.display = "none";
    renderQuestion();
    quiz.style.display = "block";
    renderProgress();
    renderCounter();
    TIMER = setInterval(renderCounter,1000); // 1000ms = 1s
}

// render progress
function renderProgress(){
    for(let qIndex = 0; qIndex <= lastQuestion; qIndex++){
        progress.innerHTML += "<div class='prog' id="+ qIndex +"></div>";
    }
}

// counter render

function renderCounter(){
    if(count <= questionTime){
        counter.innerHTML = count;
        timeGauge.style.width = count * gaugeUnit + "px";
        count++
    }else{
        count = 0;
        // change progress color to red
        answerIsWrong();
        if(runningQuestion < lastQuestion){
            runningQuestion++;
            renderQuestion();
        }else{
            // end the quiz and show the score
            clearInterval(TIMER);
            scoreRender();
        }
    }
}

// checkAnwer

function checkAnswer(answer){
    if( answer == questions[runningQuestion].correct){
        // answer is correct
        score++;
        // change progress color to green
        answerIsCorrect();
    }else{
        // answer is wrong
        // change progress color to red
        answerIsWrong();
    }
    count = 0;
    if(runningQuestion < lastQuestion){
        runningQuestion++;
        renderQuestion();
    }else{
        // end the quiz and show the score
        clearInterval(TIMER);
        scoreRender();
    }
}

// answer is correct
function answerIsCorrect(){
    document.getElementById(runningQuestion).style.backgroundColor = "#0f0";
}

// answer is Wrong
function answerIsWrong(){
    document.getElementById(runningQuestion).style.backgroundColor = "#f00";
}

// score render
function scoreRender(){
    scoreDiv.style.display = "block";
    
    // calculate the amount of question percent answered by the user
    const scorePerCent = Math.round(100 * score/questions.length);
    
    // choose the image based on the scorePerCent
    let img = (scorePerCent >= 80) ? "img/5.png" :
              (scorePerCent >= 60) ? "img/4.png" :
              (scorePerCent >= 40) ? "img/3.png" :
              (scorePerCent >= 20) ? "img/2.png" :
              "img/1.png";
    
    scoreDiv.innerHTML = "<img src="+ img +">";
    scoreDiv.innerHTML += "<p>"+ scorePerCent +"%</p>";
}





















