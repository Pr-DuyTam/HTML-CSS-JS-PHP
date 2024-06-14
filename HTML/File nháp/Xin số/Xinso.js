const box1 =document.querySelector('.box1')
const box2 =document.querySelector('.box2')
const box3 =document.querySelector('.box3')
const box4 =document.querySelector('.box4')
const start =document.querySelector('.start');

start.addEventListener('click', () =>{
    box1.innerHTML = Math.floor(Math.random() * 10)
    box2.innerHTML = Math.floor(Math.random() * 10)
    box3.innerHTML = Math.floor(Math.random() * 10)
    box4.innerHTML = Math.floor(Math.random() * 10)
})