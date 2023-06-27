
const test = document.querySelector('#test')

function openModal() {
    document.getElementById('overlay').style.display = 'flex';
    document.getElementById('modal').style.display = 'block';
    console.log('ok')
}

function closeModal() {
    document.getElementById('overlay').style.display = 'none';
    document.getElementById('modal').style.display = 'none';
}

test.addEventListener('click',openModal)

