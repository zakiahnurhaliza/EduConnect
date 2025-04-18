const quizzes = {
    1: [
        "Apa ibu kota Indonesia?",
        "Siapa penemu lampu pijar?",
        "Apa nama planet terdekat dengan matahari?"
    ],
    2: [
        "Apa warna bendera Jepang?",
        "Siapa presiden pertama Indonesia?",
        "Apa nama gunung tertinggi di dunia?"
    ],
    3: [
        "Apa nama samudera terbesar di dunia?",
        "Siapa penulis 'Harry Potter'?",
        "Apa nama hewan tercepat di darat?"
    ]
};

let currentQuiz = [];
let currentQuestionIndex = 0;

function startQuiz(quizNumber) {
    currentQuiz = quizzes[quizNumber];
    currentQuestionIndex = 0;
    document.getElementById('quiz-title').innerText = `Kuis ${quizNumber}`;
    document.getElementById('quiz-container').style.display = 'block';
    document.getElementById('next-button').style.display = 'none';
    showQuestion();
}

function showQuestion() {
    if (currentQuestionIndex < currentQuiz.length) {
        document.getElementById('quiz-question').innerText = currentQuiz[currentQuestionIndex];
        document.getElementById('next-button').style.display = 'block';
    } else {
        document.getElementById('quiz-question').innerText = "Kuis selesai!";
        document.getElementById('next-button').style.display = 'none';
    }
}

function nextQuestion() {
    currentQuestionIndex++;
    showQuestion();
}