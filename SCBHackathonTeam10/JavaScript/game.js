let Display_Slide = document.querySelector('.question');
let Next_Slides = document.querySelector('.nextQuestion');
let answer_box = document.querySelector('.answers-box');
let Display_Score = document.querySelector('.score');
let Current_Question = 0;
let score = 0;
let Quiz_Box = document.querySelector('.box');
var Reset = document.createElement('button');
let finalSC = document.createElement('h1');
//questions
let questions = [{
    question: `Bella Started coding and she realised she wants the background of the web page as pink.She knows that colour can be added using CSS File but she doesnt know how to attach it her HTML file.
    Help Bella by telling her the right format to add CSS file into HTML file`,
    answers: [{
        value: '<link rel="stylesheet" href="./style.css">',
        correct: true
      },
      {
        value: '<link rel="./style.css" href="s">',
        correct: false
      },
      {
        value: '<link rel="Casscading stylesheet" href="./style.css">',
        correct: false
      },
      {
        value: 'None of Above',
        correct: false
      },
    ]

  },
  {
    question: `Now after succesfully adding the css file she moved to the body section of Html file and now she wants to print her name in big letters on the web page. 
    tell bella how can we do this`,

    answers: [{
        value: '<h2>BELLA</h2>',
        correct: false
      },
      {
        value: '<h1>BELLA<H1>',
        correct: true
      },
      {
        value: 'Nah,None is right',
        correct: false
      }
  ]

  },
  {
    question: 'After Writing her name she wants to underline.How that can be done?',
    answers: [{
        value: 'using <u> tag',
        correct: true
      },
      {
        value: 'using <underline> tag',
        correct: false
      },
      {
        value: 'using <p> tag',
        correct: false
      },
      {
        value:'using <a> tag',
        correct: false
      }
    ]

  },
    {
    question: `After this she wants to add her favourite animal name in medium size.She used h6 tag but it is too small and she got upset
    Cheer Bella by telling how can she do that `,
    answers: [{
        value: 'use <ul> tag',
        correct: false
      },
      {
        value: 'use <ol> tag',
        correct: false
      },
      {
        value: 'use <a> tag',
        correct: false
      },
      {
        value: 'Use <h4> tag',
        correct: true
      },
 ]
  },
  {
    question: `As her assingment said she has to add her favourite animals photo .She has her pet dog Betty's picture in her computer and she wants to add it in her web page
    how that can be done`,
    answers: [{
        value: 'use img tag and copy the address o the picture and add it in img tag',
        correct: true
      },
      {
        value: 'use href tag and mention the address of picture',
        correct: false
      }
 ]
  },
  {
    question: `Now Bella has reached at last stage of her assingment which is paragrapgh writing.Give her hints how can she do that`,

    answers: [{
        value: 'use <p></p> tag',
        correct: true
      },
      {
        value: 'use <h6></h6> tag',
        correct: false
      },
      {
        value: 'use <a></a> tag',
        correct: false
      },
      {
        value: 'none',
        correct: false
      },

    ]
  },
];
//function get Answers
function getAnswers(currentQuestion) {
   
  if (currentQuestion >= questions.length) {
    currentQuestion = 0;
    console.log(currentQuestion);
    Display_Slide.remove();
    finalSC.innerText = ` Thanks for Helping Bella in her assingment! 
    Your Scole is ${score}
    
    Correct Answers:-
    
    Q1.Bella Started coding and she realised she wants the background of the web page as pink.She knows that colour can be added using CSS File but she doesnt know how to attach it her HTML file.
    Help Bella by telling her the right format to add CSS file into HTML file
    Ans:<link rel="stylesheet" href="./style.css">
    
    Q2.Now after succesfully adding the css file she moved to the body section of Html file and now she wants to print her name in big letters on the web page.Tell bella how can we do this.
    Ans:<h1>BELLA<H1>

    Q3.After Writing her name she wants to underline.How that can be done?
    Ans:using <u> tag

    Q4.After this she wants to add her favourite animal name in medium size.She used h6 tag but it is too small and she got upset Cheer
    Bella by telling how can she do that?
    Ans:Use <h4> tag

    Q5.Now Bella has reached at last stage of her assingment which is paragrapgh writing.Give her hints how can she do that.
    Ans:use <p></p> tag


    Code of Above Story:
    <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1><u>BELLA</u></h1>
    <h3>Betty</h3>
    <img src="" alt>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, 
      velit autem qui similique rem consequatur odit
      quis, ea, dolorem libero accusantium quo iure omnis obcaecati quasi.
      Praesentium, consequatur. Nobis, tempora?</p>
    <footer>
      <p>This is a footer</p>
    </footer>
  </body>
</html>


    `;
    finalSC.classList.add('question');
    Quiz_Box.append(finalSC);
    Next_Slides.remove();
    answer_box.remove();
    Display_Score.remove();

    Reset.innerText = 'One more time?'
    Reset.classList.add('resetBtn');
    document.querySelector('.box').append(Reset)
}
  removeLastQuestion();
  Display_Slide.innerText = questions[currentQuestion].question;
  questions[currentQuestion].answers.forEach((answer) => {
      const btn = document.createElement('button');
      btn.classList.add('answer')
      if (answer.correct) {
        btn.classList.add('true');
      }
      btn.innerText = answer.value;
      answer_box.appendChild(btn);
      btn.onclick = checkCorrectAnswer;
} ) }
//fucntion remove Last Question
function removeLastQuestion() {
  while (answer_box.firstChild) {
    answer_box.removeChild(answer_box.lastChild);
  }
}
//cheking corect Anaswer
function checkCorrectAnswer(e) {
let ans = document.querySelectorAll('.answer');
if (e.target.matches('.answer')) {
    ans.forEach((ans) => ans.classList.remove('orange'))
    this.classList.add('orange');
} 
  if (e.target.matches('.true')) {
    document.querySelector(".nextQuestion").addEventListener('click', function(){
      Swal.fire("Right answer"," " ,"success");
    });
    score += 1;
} else{
  document.querySelector(".nextQuestion").addEventListener('click', function(){
    Swal.fire("Wrong Answer","You can Find right answers in the Result Tab" ,"error");});
  if(score<=0) {
    score=0;
  }
  else
    score -= 1;
  }
  
}
//nextQuestion btn
Next_Slides.addEventListener('click', () => {
  console.log(score)
  Next_Slides.innerText = 'Next Question'
  getAnswers(Current_Question);
  Current_Question += 1;
});
Reset.addEventListener('click', () => {
score=0;
Current_Question=0;
  finalSC.remove();
  Reset.remove();
    Display_Score.style.display = 'flex'
  Display_Score.innerText = score;
  Quiz_Box.append(Display_Slide);
  Quiz_Box.append(answer_box);
  Quiz_Box.append(Next_Slides);
});