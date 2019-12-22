
var btn  = document.querySelector('.modal-btn');
var modalbg = document.querySelector('.modal-bg');
var close = document.querySelector('.modal-close');

btn.addEventListener('click',function()
{
    modalbg.classList.add('bg-active');
});

close.addEventListener('click',function()
{
    modalbg.classList.remove('bg-active');
});