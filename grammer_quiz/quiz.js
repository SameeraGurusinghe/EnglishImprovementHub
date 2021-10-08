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
        question : "How often do you play tennis?",
        imgSrc : "img/i.jpg",
        choiceA : "On Tuesday.",
        choiceB : "For two hours.",
        choiceC : "Almost every day.",
        correct : "C"
    },{
        question : "Where do you usually eat lunch?",
        imgSrc : "img/i.jpg",
        choiceA : "In the cafeteria.",
        choiceB : "At 12:00.",
        choiceC : "With Jane.",
        correct : "A"
    },{
        question : "How long did you study last night?",
        imgSrc : "img/i.jpg",
        choiceA : "With Bob.",
        choiceB : "For three hours.",
        choiceC : "English.",
        correct : "B"
    },{
        question : "What kind of work do you do?",
        imgSrc : "img/i.jpg",
        choiceA : "I'm a piano teacher.",
        choiceB : "I work every day.",
        choiceC : "I worked for two hours.",
        correct : "A"
    },{
        question : "How many hours a day do you watch TV?",
        imgSrc : "img/i.jpg",
        choiceA : "On Tuesday.",
        choiceB : "In my living room.",
        choiceC : "About two hours.",
        correct : "C"
    },{
        question : "What is your busiest day of the week?",
        imgSrc : "img/i.jpg",
        choiceA : "In the morning.",
        choiceB : "Every day.",
        choiceC : "Tuesday.",
        correct : "C" 
    },{
        question : "What did you do yesterday?",
        imgSrc : "img/i.jpg",
        choiceA : "I am swimming.",
        choiceB : "I swam.",
        choiceC : "I will swim.",
        correct : "B" 
    },{
        question : "What are you doing?",
        imgSrc : "img/i.jpg",
        choiceA : "I'm eating.",
        choiceB : "I ate.",
        choiceC : "I have eaten.",
        correct : "A" 
    },{
        question : "What will you do this afternoon?",
        imgSrc : "img/i.jpg",
        choiceA : "I'll play soccer.",
        choiceB : "I play soccer.",
        choiceC : "I was playing soccer.",
        correct : "A" 
    },{
        question : "What were you doing last night at 7:00?",
        imgSrc : "img/i.jpg",
        choiceA : "I will be sleeping.",
        choiceB : "I was sleeping..",
        choiceC : "I sleep.",
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





















