let container = document.querySelector('.container');
let desc = document.querySelector('.desc');

function Expand() {
    container.classList.toggle('expand');
    if (desc.style.display == 'block'){
        desc.style.display = 'none';
    }
    else {
        desc.style.display = 'block';
    }
}