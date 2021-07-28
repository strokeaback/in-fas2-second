
button.onclick = function (){
  var className = informer.className;
  if( className.indexOf(' expanded') == -1 ){
      className += ' expanded';
  }
  else {
      className = className.replace(' expanded', '');
  }
  informer.className = className;
  return false;
};

button2.onclick = function (){
  var className = informer2.className;
  if( className.indexOf(' expanded2') == -1 ){
      className += ' expanded2';
  }
  else {
      className = className.replace(' expanded2', '');
  }
  informer2.className = className;
  return false;
};

$(function(){
    $('.small-image-list').on('click', function (event) {
        console.log(event.target);
        for (var i = 0; i < $('.small-image-item').length; i++) {
            if ($('.small-image-item img').eq(i).is(event.target)) {
                var clickImage = $('.small-image-item').eq(i).find('img').attr('src');
                $('.image-preview').find('img').attr('src', clickImage);
                $('.image-preview').zoom();
            } else {
                continue;
            }
        }
    });
})


let inputs = document.querySelectorAll('.input__file');
Array.prototype.forEach.call(inputs, function (input) {
    let label = input.nextElementSibling,
    labelVal = label.querySelector('.input__file-button-text').innerText;

    input.addEventListener('change', function (e) {
    let countFiles = '';
    if (this.files && this.files.length >= 1)
        countFiles = this.files.length;

    if (countFiles)
        label.querySelector('.input__file-button-text').innerText = 'Выбрано файлов: ' + countFiles;
    else
        label.querySelector('.input__file-button-text').innerText = labelVal;
    });
});


form.onclick = function(){
    let form = document.querySelector('.feedback-form');
    form.style.display = "flex";
    form.style.zIndex = "1000";
    form.style.opacity = "1";
}

form2.onclick = function(){
    let form = document.querySelector('.feedback-form');
    form.style.display = "flex";
    form.style.zIndex = "1000";
    form.style.opacity = "1";
}

closeForm.onclick = function(){
    let form = document.querySelector('.feedback-form');
    form.style.display = "none";
    form.style.zIndex = "-10";
    form.style.opacity = "0";
    feedbackFinish.style.display = "none";
}

button_contacts.onclick = function(){
    let form = document.querySelector('form');
    let feedFormWrap = document.querySelector('.feedback-form__wrap');
    let feedbackFinish = document.querySelector('.feedback-finish');
    let inpMail = document.querySelector('#form_email').value
    let inpNumber = document.querySelector('#form_number').value
    
    if (inpMail == "" && inpNumber == ""){
        document.querySelector('#form_email').style.border = "1px solid #cf2c2f"
        document.querySelector('#form_number').style.border = "1px solid #cf2c2f"
    } else if (inpMail == "") {
        document.querySelector('#form_email').style.border = "1px solid #cf2c2f"
    } else if (inpNumber == "") {
        document.querySelector('#form_number').style.border = "1px solid #cf2c2f"
    } else {
        feedFormWrap.style.height = "200px"
        form.style.display = "none";
        form.style.zIndex = "-10";
        form.style.opacity = "0";
        feedbackFinish.style.display = "block";
    }
}

closeFormFinish.onclick = function(){
    let feedForm = document.querySelector('.feedback-form');
    feedForm.style.display = "none";
    feedForm.style.zIndex = "-10";
    feedForm.style.opacity = "0";
}
