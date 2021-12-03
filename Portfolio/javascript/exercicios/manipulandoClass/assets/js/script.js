function preto() {
    document.querySelector('h1').classList.remove('verde')
    document.querySelector('h1').classList.remove('azul')
    document.querySelector('h1').classList.add('preto')
}
function verde() {
    document.querySelector('h1').classList.remove('preto')
    document.querySelector('h1').classList.remove('azul')
    document.querySelector('h1').classList.add('verde')
}
function azul() {
    document.querySelector('h1').classList.remove('verde')
    document.querySelector('h1').classList.remove('preto')
    document.querySelector('h1').classList.add('azul')
}

function changeButton() {
    if(document.querySelectorAll('h1')[1].classList.contains('preto')) {
        document.querySelectorAll('h1')[1].classList.remove('preto')
        document.querySelectorAll('h1')[1].classList.add('verde')
        document.querySelectorAll('button')[3].innerHTML = "Preto";
    } else {
        document.querySelectorAll('h1')[1].classList.remove('verde')
        document.querySelectorAll('h1')[1].classList.add('preto')
        document.querySelectorAll('button')[3].innerHTML = "Verde";
    }
}