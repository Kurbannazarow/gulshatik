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


function init() {

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
            if (input.value === input.dataset.ispn || input.value === input.dataset.ispn + ' ') {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &#128504;';
                input.nextElementSibling.style.color = 'green';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
                countGonukme1 += 1;
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
            if (input.value === input.dataset.elena || input.value === input.dataset.elena + ' ') {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &#128504;';
                input.nextElementSibling.style.color = 'green';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
                countGonukme2 += 1;
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

    function lesson2Gonukme3() {
        const inputs = document.querySelectorAll('.shwed1');
        inputs.forEach(elem => {
            elem.addEventListener('keypress', function (event) {
                const self = this;
                if (event.code === 'Enter') {
                    getAnswer(self);
                }
            });
        });

        function getAnswer(input) {
            if (input.value === input.dataset.shwed || input.value === input.dataset.shwed + ' ') {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &#128504;';
                input.nextElementSibling.style.color = 'green';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
                countGonukme3 += 1;
            } else {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &times;';
                input.nextElementSibling.style.color = 'red';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
            }
            console.log(countGonukme3)
        }
    }
    lesson2Gonukme3()

    function lesson2Gonukme4() {
        const inputs = document.querySelectorAll('.piter1');
        inputs.forEach(elem => {
            elem.addEventListener('keypress', function (event) {
                const self = this;
                if (event.code === 'Enter') {
                    getAnswer(self);
                }
            });
        });

        function getAnswer(input) {
            if (input.value === input.dataset.piter || input.value === input.dataset.piter + ' ') {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &#128504;';
                input.nextElementSibling.style.color = 'green';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
                countGonukme4 += 1;
            } else {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &times;';
                input.nextElementSibling.style.color = 'red';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
            }
            console.log(countGonukme4)
        }
    }
    lesson2Gonukme4()

    function lesson2Gonukme5() {
        const lesson2_5 = document.querySelectorAll('.lesson2_5');

        lesson2_5.forEach(item => {
            const inputs = item.querySelectorAll('.sash');
            inputs.forEach(function (elem) {
                elem.addEventListener('change', function () {
                    if (this.checked) {
                        if (this.dataset.check === '1') {
                            this.nextElementSibling.innerHTML = '';
                            this.nextElementSibling.innerHTML = ' &#128504;';
                            this.nextElementSibling.style.color = 'green';
                            this.nextElementSibling.style.fontWeight = 'bold';
                            countGonukme5 += 1;
                            inputs.forEach(i => i.disabled = "true");
                        } else {
                            this.nextElementSibling.innerHTML = '';
                            this.nextElementSibling.innerHTML = '  &times;';
                            this.nextElementSibling.style.color = 'red';
                            this.nextElementSibling.style.fontWeight = 'bold';
                            inputs.forEach(i => i.disabled = "true");
                        }
                    }
                })
            })
        });

        function getAnswer(input) {}
    }
    lesson2Gonukme5()

    function lesson2Gonukme6() {
        const inputs = document.querySelectorAll('.bars__input');
        inputs.forEach(elem => {
            elem.addEventListener('keypress', function (event) {
                const self = this;
                if (event.code === 'Enter') {
                    getAnswer(self);
                }
            });
        });

        function getAnswer(input) {
            if (input.value === input.dataset.bars || input.value === input.dataset.bars + ' ') {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &#128504;';
                input.nextElementSibling.style.color = 'green';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
                countGonukme6 += 1;
            } else {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &times;';
                input.nextElementSibling.style.color = 'red';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
            }
            console.log(countGonukme6)
        }
    }
    lesson2Gonukme6()


    function lesson2Gonukme7() {
        const inputs = document.querySelectorAll('.kitay__input');
        inputs.forEach(elem => {
            elem.addEventListener('keypress', function (event) {
                const self = this;
                if (event.code === 'Enter') {
                    getAnswer(self);
                }
            });
        });

        function getAnswer(input) {
            if (input.value === input.dataset.kitay || input.value === input.dataset.kitay + ' ') {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &#128504;';
                input.nextElementSibling.style.color = 'green';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
                countGonukme7 += 1;
            } else {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &times;';
                input.nextElementSibling.style.color = 'red';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
            }
            console.log(countGonukme7)
        }
    }
    lesson2Gonukme7()

    function lesson2Gonukme8() {
        const inputs = document.querySelectorAll('.rim__input');
        inputs.forEach(elem => {
            elem.addEventListener('keypress', function (event) {
                const self = this;
                if (event.code === 'Enter') {
                    getAnswer(self);
                }
            });
        });

        function getAnswer(input) {
            if (input.value === input.dataset.rim || input.value === input.dataset.rim + ' ') {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &#128504;';
                input.nextElementSibling.style.color = 'green';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
                countGonukme8 += 1;
            } else {
                input.nextElementSibling.innerHTML = '';
                input.nextElementSibling.innerHTML = ' &times;';
                input.nextElementSibling.style.color = 'red';
                input.nextElementSibling.style.fontWeight = 'bold';
                input.disabled = true;
            }
            console.log(countGonukme8)
        }
    }
    lesson2Gonukme8()
}
init();

function total() {
    const btnItog = document.querySelector('.section1__itog1');
    const restart = document.querySelector('.section1__itog2');
    const perehod = document.querySelector('.section1__itog3');

    function summer() {
        lesson2DB.gonukme1 = countGonukme1;
        lesson2DB.gonukme2 = countGonukme2;
        lesson2DB.gonukme3 = countGonukme3;
        lesson2DB.gonukme4 = countGonukme4;
        lesson2DB.gonukme5 = countGonukme5;
        lesson2DB.gonukme6 = countGonukme6;
        lesson2DB.gonukme7 = countGonukme7;

        return lesson2DB.gonukme1 + lesson2DB.gonukme2 + lesson2DB.gonukme3 + lesson2DB.gonukme4 + lesson2DB.gonukme5 + lesson2DB.gonukme6 + lesson2DB.gonukme7;
    }

    perehod.addEventListener('click', function (e) {
        let sum = summer();
        if (sum < 65) {
            e.preventDefault();
        }
    });

    restart.addEventListener('click', function () {
        const ints = document.querySelectorAll('input');
        document.querySelector('.itogo2').innerHTML = 0;
        document.querySelector('.itogo1').innerHTML = 0;
        document.querySelector('.itogo3').innerHTML = 'Стоит повторить';
        ints.forEach(elem => {
            elem.checked = false;
            elem.disabled = false;
            elem.nextElementSibling.innerHTML = '';
        });
        countGonukme1 = 0;
        countGonukme2 = 0;
        countGonukme3 = 0;
        countGonukme4 = 0;
        countGonukme5 = 0;
        countGonukme6 = 0;
        countGonukme7 = 0;
    });

    btnItog.addEventListener('click', function () {
        const itg = document.querySelector('.itogo1')
        document.querySelector('.itogo2').innerHTML = getInputs();
        const level = document.querySelector('.itogo3');
        const summ = summer();
        itg.innerHTML = '';
        itg.innerHTML = summ;
        if (summ >= 0 && summ <= 55) {
            level.innerHTML = 'Стоит повторить';
            level.nextElementSibling.src = './img/prewoshod/bad.png';
        } else if (summ > 55 && summ <= 65) {
            level.innerHTML = 'Хорошая работа';
            level.nextElementSibling.src = './img/prewoshod/good.png';
        } else if (summ > 65) {
            level.innerHTML = 'Превосхдно';
            level.nextElementSibling.src = './img/prewoshod/prewoshod.png';
        }

        function getInputs() {
            const inputs = document.querySelectorAll('input');
            return (inputs.length - 12);
        }
    });
}

total();