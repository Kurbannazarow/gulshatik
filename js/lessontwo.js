const lesson2DB = {
    gonukme1: 0,
    gonukme2: 0,
    gonukme3: 0,
    gonukme4: 0,
    gonukme5: 0,
    gonukme6: 0,
    gonukme7: 0,
    gonukme8: 0,
};
let countGonukme1 = 0;
let countGonukme2 = 0;
let countGonukme3 = 0;
let countGonukme4 = 0;
let countGonukme5 = 0;
let countGonukme6 = 0;
let countGonukme7 = 0;
let countGonukme8 = 0;

function lesson2Gonukme1() {
    const inputs = document.querySelectorAll('.ispan');
    inputs.forEach(elem => {
        elem.addEventListener('keypress', function (event) {
            const self = this;
            if (event.code === 'Enter') {
                getAnswer(self);
            }
        });
    });

    function getAnswer(input) {
        if(input.value === input.dataset.ispn || input.value === input.dataset.ispn + ' ') {
            input.nextElementSibling.innerHTML = '';
            input.nextElementSibling.innerHTML = ' &#128504;';
            input.nextElementSibling.style.color = 'green';
            input.nextElementSibling.style.fontWeight = 'bold';
            input.disabled = true;
            countGonukme1+=1;
        } else {
            input.nextElementSibling.innerHTML = '';
            input.nextElementSibling.innerHTML = ' &times;';
            input.nextElementSibling.style.color = 'red';
            input.nextElementSibling.style.fontWeight = 'bold';
            input.disabled = true;
        }
    }
}
lesson2Gonukme1()

function lesson2Gonukme2() {
    const inputs = document.querySelectorAll('.elena1');
    inputs.forEach(elem => {
        elem.addEventListener('keypress', function (event) {
            const self = this;
            if (event.code === 'Enter') {
                getAnswer(self);
            }
        });
    });

    function getAnswer(input) {
        if(input.value === input.dataset.elena || input.value === input.dataset.elena + ' ') {
            input.nextElementSibling.innerHTML = '';
            input.nextElementSibling.innerHTML = ' &#128504;';
            input.nextElementSibling.style.color = 'green';
            input.nextElementSibling.style.fontWeight = 'bold';
            input.disabled = true;
            countGonukme2+=1;
        } else {
            input.nextElementSibling.innerHTML = '';
            input.nextElementSibling.innerHTML = ' &times;';
            input.nextElementSibling.style.color = 'red';
            input.nextElementSibling.style.fontWeight = 'bold';
            input.disabled = true;
        }
        console.log(countGonukme2)
    }
}
lesson2Gonukme2()