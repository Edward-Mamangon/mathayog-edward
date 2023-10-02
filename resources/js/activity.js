window.addEventListener('click', loadQuestions);

function loadQuestions() {
    fetch("/resources/js/question.json")
        .then(res => res.json())
        .then( data => {
            console.log(data);
        })
}

// import data from './question.json' assert { type: 'json' };
// console.log(data);
