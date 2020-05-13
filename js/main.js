function init() {
  let sum = 0;
  const questionAnswers = document.querySelectorAll(".question__answer1");
  const questionAnswersEnd = document.querySelectorAll(".question__answer-end");
  const itog = document.querySelector(".itog");
  const itog1 = itog.querySelector(".itog1");
  const itog2 = itog.querySelector(".itog2");
  const nagrada = document.querySelector(".nagrada");
  const forLesson = nagrada.querySelector(".for__lesson");

  questionAnswers.forEach((elem, index) => {
    elem.addEventListener("blur", function () {
      const self = this;
      const data = self.dataset.otwet1;
      getQuestionAnswer(data, self);
      itog1.textContent = sum;
      getNagrada(sum, forLesson);
    });
    elem.addEventListener("keypress", function kuk(e) {
      if (e.charCode === 13 || e.code === "Enter") {
        const self = this;
        const data = self.dataset.otwet1;
        getQuestionAnswer(data, self);
        itog1.textContent = sum;
        getNagrada(sum, forLesson);
      }
    });
  });

  questionAnswersEnd.forEach((elem, index) => {
    elem.addEventListener("blur", function () {
      const self = this;
      getQuestionAnswerEnd(self);
      itog1.textContent = sum;
      getNagrada(sum, forLesson);
    });
    elem.addEventListener("keypress", function kuk(e) {
      if (e.charCode === 13 || e.code === "Enter") {
        const self = this;
        getQuestionAnswerEnd(self);
        itog1.textContent = sum;
        getNagrada(sum, forLesson);
      }
    });
  });

  function getNagrada(itogi, domEl) {
    if (itogi >= 0 && itogi < 40) {
      domEl.textContent = "Стоит повторить";
    } else if (itogi >= 40 && itogi < 65) {
      domEl.textContent = "Хорошая работа";
    } else if (itogi >= 65 && itogi <= 100) {
      domEl.textContent = "Превосходно";
    }
  }

  function getQuestionAnswer(dataAtr, input) {
    const img = document.createElement("img");
    if (dataAtr === input.value || dataAtr + " " === input.value) {
      img.src = "./img/icons/true.png";
      img.alt = "Правильно!";
      sumPlus(input);
    } else {
      img.src = "./img/icons/false.png";
      img.alt = "Неправильно!";
      sum += 0;
      setAtr(input);
    }
    if (input.nextElementSibling === null) {
      input.after(img);
    } else {
      input.nextElementSibling.src = img.src;
    }
  }

  function getQuestionAnswerEnd(input) {
    if (
      input.value != "" &&
      input.value != " " &&
      input.value != "  " &&
      input.value != "   "
    ) {
      sumPlus(input);
    } else {
      sum += 0;
      setAtr(input);
    }
  }

  function sumPlus(elem) {
    if (elem.getAttribute("nonnum") === "0") {
      sum += 0;
    } else {
      setAtr(elem);
      sum += 6;
    }
  }

  function setAtr(e) {
    e.setAttribute("nonnum", "0");
  }

  return sum;
}
init();
