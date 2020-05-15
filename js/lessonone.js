function lessonOne() {
    //, 'ант', 'яп', 'фра', 'кор', 'исп', 'ить', 'лья', 'шве', 'жень', 'лянь', 'ветл', 'роч', 'ци', 'гли', 'тай', 'ань', 'хай', 'евн', 'ловн', 'лье', 'лий', 'вич', 'вна'
    const answers = ['ки', 'ру'];
    const inputParent = document.querySelector('.input1');
    const answer = document.querySelector('.input__inner');

    answer.addEventListener('keypress', function (e) {
        console.log(e)
        if(e.charCode === 13) {
            if (getChekAnswer(answer)) {
                
                div.innerHTML = '&#10004;';
                div.classList.add('circle-true');
                inputParent.append(div);
            } else if(!getChekAnswer(answer)) {
                const div = document.createElement('div');
                div.innerHTML = '&times;';
                div.classList.add('circle-false');
                inputParent.append(div);
            }
        }
    });

    function getChekAnswer(input) {
        const arr = input.value.split(', ');
        if(answers.length!==arr.length) {
            alert("Вы ещё не все слоги написали, подумайте ещё!");
        }else {
            let temp = "";
            for (let i = 0; i < answers.length; i++) {
                if(answers[i]===arr[i]){
                    temp+=i;
                }
            }
            if(answers.length===temp.length) {
                return true;
            } else {
                return false;
            }
        }
    }
}

lessonOne();