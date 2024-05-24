const content = document.querySelector('.menu-content');
const button = document.querySelector('.menu');
const div = document.querySelector('.menu-div');

button.addEventListener('click', ()=> {
    if (content.classList.contains('active'))
    {
        content.classList.remove('active');        
    }
    else
    {
        content.classList.add('active');
    }
});