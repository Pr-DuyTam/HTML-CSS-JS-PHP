const alien = document.querySelector('.alien');
document.body.addEventListener('mousemove',(e) =>
{
    alien.style.left = '$(e.clientX)px'
    alien.style.top = '$(e.clientY)px'
})