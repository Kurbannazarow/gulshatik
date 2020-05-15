function lessonOne() {
    let temp = [];
    const answers = ['ки', 'ру', 'ант', 'яп', 'ант', 'яп', 'фра', 'кор', 'исп', 'ить', 'лья', 'шве', 'жень', 'лянь', 'ветл', 'роч', 'ци', 'гли', 'тай', 'ань', 'хай', 'евн', 'ловн', 'лье', 'лий', 'вич', 'вна'];
    const inputParent = document.querySelector('.input1');
    const answer = document.querySelector('.input__inner');

    answer.addEventListener('keypress', function (e) {
        console.log(e)
        if (e.code === "Enter") {
            const check = getChekAnswer(answer);
            if (check === '111') {
                inputParent.innerHTML = '';
                inputParent.innerHTML = '&#10004;';
                inputParent.classList.remove('circle-false');
                inputParent.classList.add('circle-true');
            } else if (check === '222') {
                inputParent.innerHTML = '';
                inputParent.innerHTML = '&times;';
                inputParent.classList.remove('circle-true');
                inputParent.classList.add('circle-false');
            } else if (check === '333') {
                inputParent.innerHTML = '';
            }
        }
    });

    function getChekAnswer(input) {
        const arr = input.value.split(', ');
        console.log(arr)
        if (answers.length === arr.length) {
            temp.length = 0;
            for (let i = 0; i < answers.length; i++) {
                if (answers[i] === arr[i]) {
                    temp.push(answers[i]);
                }
            }
            if (answers.length === temp.length) {
                return '111';
            } else {
                return '222';
            }
        } else {
            if (answers.length > arr.length) {
                alert("Вы ещё не все слоги написали, подумайте ещё!");
            } else if (answers.length < arr.length) {
                alert("Вы больше слоги написали , чем нужно было, подумайте ещё!");
            }
            return '333';
        }
    }

    return function () {
        return temp;
    }
}

const count = lessonOne();

const section1Itog1 = document.querySelector('.section1__itog1');
section1Itog1.addEventListener('click', function name(params) {

    alert(count().length);
})