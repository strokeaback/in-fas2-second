
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











