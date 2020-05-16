const DB = {};

function gonukme2() {
  let temp = [];
  const answers = [
    "ки",
    "ру",
    "ант",
    "яп",
    "ант",
    "яп",
    "фра",
    "кор",
    "исп",
    "ить",
    "лья",
    "шве",
    "жень",
    "лянь",
    "ветл",
    "роч",
    "ци",
    "гли",
    "тай",
    "ань",
    "хай",
    "евн",
    "ловн",
    "лье",
    "лий",
    "вич",
    "вна",
  ];
  const inputParent = document.querySelector(".input1");
  const answer = document.querySelector(".input__inner");

  answer.addEventListener("keypress", function (e) {
    if (e.code === "Enter") {
      const check = getChekAnswer(answer);
      if (check === "111") {
        inputParent.innerHTML = "";
        inputParent.innerHTML = "&#10004;";
        inputParent.classList.remove("circle-false");
        inputParent.classList.add("circle-true");
      } else if (check === "222") {
        inputParent.innerHTML = "";
        inputParent.innerHTML = "&times;";
        inputParent.classList.remove("circle-true");
        inputParent.classList.add("circle-false");
      } else if (check === "333") {
        inputParent.innerHTML = "";
        inputParent.classList.remove("circle-false");
        inputParent.classList.remove("circle-true");
      }
    }
  });

  function getChekAnswer(input) {
    const arr = input.value.split(", ");
    if (answers.length === arr.length) {
      temp.length = 0;
      for (let i = 0; i < answers.length; i++) {
        if (answers[i] === arr[i]) {
          temp.push(answers[i]);
        }
      }
      if (answers.length === temp.length) {
        return "111";
      } else {
        return "222";
      }
    } else {
      if (answers.length > arr.length) {
        alert("Вы ещё не все слоги написали, подумайте ещё!");
      } else if (answers.length < arr.length) {
        alert("Вы больше слоги написали , чем нужно было, подумайте ещё!");
      }
      return "333";
    }
  }

  return function () {
    return temp.length;
  };
}

function gonukme3() {
  let count;
  const plusMinus = document.querySelectorAll(".plus-minus");

  plusMinus.forEach((elem) => {
    elem.addEventListener("keypress", function name(e) {
      if (e.code === "Enter") {
        const self = this;
        getPlusMinus(self);
      }
    });
  });

  function getCountTrue() {
    const arr = document.querySelectorAll(".plus-x");
    const newArr = [];
    arr.forEach((elem) => {
      if (elem.textContent === "✔") {
        newArr.push(elem.textContent);
      }
    });
    count = newArr.length;
    return count;
  }

  function getPlusMinus(el) {
    if (el.value === "+") {
      if (
        el.previousElementSibling.dataset.man ===
        el.previousElementSibling.textContent
      ) {
        el.nextElementSibling.classList.remove("plus-false");
        el.nextElementSibling.classList.add("plus-true");
        el.nextElementSibling.innerHTML = "";
        el.nextElementSibling.innerHTML = "&#10004;";
        el.disabled = true;
      } else if (
        el.previousElementSibling.dataset.man !==
        el.previousElementSibling.textContent
      ) {
        el.nextElementSibling.classList.remove("plus-true");
        el.nextElementSibling.classList.add("plus-false");
        el.nextElementSibling.innerHTML = "";
        el.nextElementSibling.innerHTML = "&times;";
        el.disabled = true;
      }
    } else if (el.value === "-") {
      if (
        el.previousElementSibling.dataset.man !==
        el.previousElementSibling.textContent
      ) {
        el.nextElementSibling.classList.remove("plus-false");
        el.nextElementSibling.classList.add("plus-true");
        el.nextElementSibling.innerHTML = "";
        el.nextElementSibling.innerHTML = "&#10004;";
        el.disabled = true;
      } else if (
        el.previousElementSibling.dataset.man ===
        el.previousElementSibling.textContent
      ) {
        el.nextElementSibling.classList.remove("plus-true");
        el.nextElementSibling.classList.add("plus-false");
        el.nextElementSibling.innerHTML = "";
        el.nextElementSibling.innerHTML = "&times;";
        el.disabled = true;
      }
    }
  }

  return function () {
    return getCountTrue();
  };
}

function gonukme4() {
  const arr = [];
  const irochka = document.querySelectorAll(".irochka");
  irochka.forEach((elem) => {
    elem.addEventListener("keypress", function name(e) {
      const self = this;
      if (e.code === "Enter") {
        getAnswer(self);
      }
    });
  });

  function getAnswer(elem) {
    if (
      elem.dataset.irochka === elem.value ||
      elem.dataset.irochka + " " === elem.value
    ) {
      elem.style.borderWidth = "2px";
      elem.style.borderColor = "green";
      elem.disabled = true;
      arr.push(1);
    } else if (elem.value === " " || elem.value === "") {
      elem.style.borderWidth = "2px";
      elem.style.borderColor = "grey";
      elem.disabled = false;
    } else if (
      elem.dataset.irochka !== elem.value ||
      elem.dataset.irochka + " " !== elem.value
    ) {
      elem.style.borderWidth = "2px";
      elem.style.borderColor = "red";
      elem.disabled = true;
    }
  }

  return function () {
    return arr.reduce((sum, item) => sum + item, 0);
  };
}

function gonukme5() {
  const arr = [];
  const city = document.querySelectorAll(".city");
  city.forEach((elem) => {
    elem.addEventListener("keypress", function name(e) {
      const self = this;
      if (e.code === "Enter") {
        getAnswer(self);
      }
    });
  });

  function getAnswer(elem) {
    if (
      elem.dataset.city === elem.value ||
      elem.dataset.city + " " === elem.value
    ) {
      elem.style.borderWidth = "2px";
      elem.style.borderColor = "green";
      elem.disabled = true;
      arr.push(1);
    } else if (elem.value === " " || elem.value === "") {
      elem.style.borderWidth = "2px";
      elem.style.borderColor = "grey";
      elem.disabled = false;
    } else if (
      elem.dataset.city !== elem.value ||
      elem.dataset.city + " " !== elem.value
    ) {
      elem.style.borderWidth = "2px";
      elem.style.borderColor = "red";
      elem.disabled = true;
    }
  }

  return function () {
    return arr.reduce((sum, item) => sum + item, 0);
  };
}

function gonukme6() {
  let count = 0;
  const ynam = document.querySelectorAll(".ynam");
  ynam.forEach((elem) => {
    elem.addEventListener("blur", function name(e) {
      const self = this;
      getAnswer(self);
    });
  });

  function getAnswer(input) {
    if (input.value === "+") {
      count += 1;
      input.disabled = true;
    }
  }

  return function () {
    return count;
  };
}

const count2 = gonukme2();
const count3 = gonukme3();
const count4 = gonukme4();
const count5 = gonukme5();
const count6 = gonukme6();

function render(obj) {
  obj.exercise2 = count2();
  obj.exercise3 = count3();
  obj.exercise4 = count4();
  obj.exercise5 = count5();
  obj.exercise6 = count6();
}

const section1Itog1 = document.querySelector(".section1__itog1");
section1Itog1.addEventListener("click", function name(params) {
  render(DB);
});
