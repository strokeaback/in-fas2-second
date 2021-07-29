"use strict"

document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('callbacks');
  form.addEventListener('submit', formSend);

  async function formSend(e) {
    e.preventDefault();

    let error = formValidate(form);

    let formData = new FormData(form);
    formData.append('image', formImage.files[0]);

    if (error === 0) {
      form.classList.add('_sending');
      let response = await fetch('post.php', {
        method: 'POST',
        body: formData
      });
      if (response.ok) {
        let result = await response.json();
        alert(result.message);
        formPreview.innerHTML = '';
        form.reset();
        form.classList.remove('_sending');
      } else {
        alert("Ошибка");
        form.classList.remove('_sending');
      }
    } else {
      alert('Заполните обязательные поля');
    }

  }


  function formValidate(form) {
    let error = 0;
    let formReq = document.querySelectorAll('._req');

    for (let index = 0; index < formReq.length; index++) {
      const input = formReq[index];
      formRemoveError(input);

      if (input.classList.contains('_email')) {
        if (emailTest(input)) {
          formAddError(input);
          error++;
        }
      } else if (input.getAttribute("type") === "checkbox" && input.checked === false) {
        formAddError(input);
        error++;
      } else {
        if (input.value === '') {
          formAddError(input);
          error++;
        }
      }
    }
    return error;
  }
  function formAddError(input) {
    input.parentElement.classList.add('_error');
    input.classList.add('_error');
  }
  function formRemoveError(input) {
    input.parentElement.classList.remove('_error');
    input.classList.remove('_error');
  }
  //Функция теста email
  function emailTest(input) {
    return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
  }

//Получаем инпут file в переменную
  const formImage = document.getElementById('input__file');
//Получаем див для превью в переменную
  const formPreview = document.getElementById('formPreview');

  formImage.addEventListener('change', () => {
    uploadFile(formImage.files[0]);
  });

  function uploadFile(file) {
    // провераяем тип файла
    if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)) {
      alert('Разрешены только изображения.');
      formImage.value = '';
      return;
    }
    // проверим размер файла (<2 Мб)
    if (file.size > 2 * 1024 * 1024) {
      alert('Файл должен быть менее 2 МБ.');
      return;
    }

    var reader = new FileReader();
    reader.onload = function (e) {
      formPreview.innerHTML = `<img src="${e.target.result}" alt="Фото">`;
    };
    reader.onerror = function (e) {
      alert('Ошибка');
    };
    reader.readAsDataURL(file);
  }

});


// //Получаем инпут file в переменную
// const formImage = document.getElementById('input__file');
// //Получаем див для превью в переменную
// const formPreview = document.getElementById('formPreview');
//
// //Слушаем изменения в инпуте file
// formImage.addEventListener('change', () => {
//   uploadFile(formImage.files[0]);
// });
//
// function uploadFile(file) {
//   // провераяем тип файла
//   if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)) {
//     alert('Разрешены только изображения.');
//     formImage.value = '';
//     return;
//   }
//   // проверим размер файла (<2 Мб)
//   if (file.size > 2 * 1024 * 1024) {
//     alert('Файл должен быть менее 2 МБ.');
//     return;
//   }
//
//   var reader = new FileReader();
//   reader.onload = function (e) {
//     formPreview.innerHTML = `<img src="${e.target.result}" alt="Фото">`;
//   };
//   reader.onerror = function (e) {
//     alert('Ошибка');
//   };
//   reader.readAsDataURL(file);
// }
//
function funcOpenCatalog() {
    let openCatalog = document.querySelector('.catalog');
    openCatalog.classList.toggle('open-catalog')
}

document.querySelector('#btn-catalog').onclick = funcOpenCatalog
document.querySelector('.catalog__shadow-bg').onclick = funcOpenCatalog


function funcOpenServicesCalc() {
    let openServicesCalc = document.querySelector('.services-calc');
    openServicesCalc.classList.toggle('open-services-calc')
}

document.querySelector('#btn-services').onclick = funcOpenServicesCalc












let inp = document.querySelectorAll('.calc__input-row .input-row__elem');

for(let i = 0; i < inp.length; i++){
  inp[i].addEventListener('click', function(){
    for(let u = 0; u < inp.length; u++){
      inp[u].classList.remove('input-row__elem-active');
    }
    this.classList.add('input-row__elem-active');
  });
}

let inp2 = document.querySelectorAll('.calc__input-row .input-row__elem-2');

for(let i = 0; i < inp2.length; i++){
  inp2[i].addEventListener('click', function(){
    for(let u = 0; u < inp2.length; u++){
      inp2[u].classList.remove('input-row__elem-2-active');
    }
    this.classList.add('input-row__elem-2-active');
  });
}











list.addEventListener("mouseover", handleMouseover);
const lis = list.querySelectorAll("li");
lis[0].style.background = "#f0f0f0"
lis[0].style.borderRadius = "5px"

function handleMouseover(e) {
  const target = e.target;
  if (target.tagName === "LI") {
    lis.forEach((li) => (li.style.background = ""));
    target.style.background = "#f0f0f0";
    target.style.borderRadius = "5px";
  }
}











