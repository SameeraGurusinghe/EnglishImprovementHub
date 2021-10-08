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
        question : "Her grandmother will arrive there ___ half-past seven in the morning.",
        imgSrc : "img/i.jpg",
        choiceA : "at",
        choiceB : "in",
        choiceC : "on",
        correct : "A"
    },{
        question : "I like to swim ___ the beach, not just in the pool.",
        imgSrc : "img/i.jpg",
        choiceA : "on",
        choiceB : "at",
        choiceC : "in",
        correct : "B"
    },{
        question : "Diamond was born ___ 7:37 A.M.",
        imgSrc : "img/i.jpg",
        choiceA : "in",
        choiceB : "at",
        choiceC : "on",
        correct : "B"
    },{
        question : "___ what day were you born?",
        imgSrc : "img/i.jpg",
        choiceA : "at",
        choiceB : "in",
        choiceC : "on",
        correct : "C"
    },{
        question : "Diamond was born ___ the 30th of July.",
        imgSrc : "img/i.jpg",
        choiceA : "at",
        choiceB : "in",
        choiceC : "on",
        correct : "C"
    },{
        question : "At eight o'clock in the morning, I am hard ___ work.",
        imgSrc : "img/i.jpg",
        choiceA : "at",
        choiceB : "in",
        choiceC : "on",
        correct : "A" 
    },{
        question : "The keys are ___ the kitchen counter.",
        imgSrc : "img/i.jpg",
        choiceA : "at",
        choiceB : "in",
        choiceC : "on",
        correct : "C" 
    },{
        question : "I am ___ bed by eleven o'clock in the evening.",
        imgSrc : "img/i.jpg",
        choiceA : "at",
        choiceB : "in",
        choiceC : "on",
        correct : "B" 
    },{
        question : "Diamond was born ___ a Monday.",
        imgSrc : "img/i.jpg",
        choiceA : "at",
        choiceB : "in",
        choiceC : "on",
        correct : "C" 
    },{
        question : "Did you grow up ___ Mexico or California?",
        imgSrc : "img/i.jpg",
        choiceA : "in",
        choiceB : "at",
        choiceC : "on",
        correct : "A" 
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





















