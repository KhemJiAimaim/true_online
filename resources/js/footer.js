
const cshow1 = document.getElementById('cshow1');
const conte1 = document.getElementById('content1')
const rolin1 = document.getElementById('rolin1');
const cshow2 = document.getElementById('cshow2');
const conte2 = document.getElementById('content2');
const rolin2 = document.getElementById('rolin2');
const cshow3 = document.getElementById('cshow3');
const conte3 = document.getElementById('content3');
const rolin3 = document.getElementById('rolin3');


cshow1.addEventListener('click', () => {
    console.log('yaaahoy')
    conte1.classList.toggle('hidden');
    conte1.classList.toggle('block');
    rolin1.classList.toggle('rotate-180')
    // if (conte1.classList.contains('block')) {
    //     flip.classList.add('rotate-180')
    // } else {
    //     flip.classList.remove('rotate-180')
    // }
})
cshow2.addEventListener('click', () => {
    console.log('yaaahoy')
    conte2.classList.toggle('hidden');
    conte2.classList.toggle('block');
    rolin2.classList.toggle('rotate-180')
})
cshow3.addEventListener('click', () => {
    console.log('yaaahoy')
    conte3.classList.toggle('hidden');
    conte3.classList.toggle('block');
    rolin3.classList.toggle('rotate-180')
})


