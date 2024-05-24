const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrapper.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrapper.classList.add('active-popup');
    removeActivity();
});

iconClose.addEventListener('click', ()=> {
    wrapper.classList.remove('active-popup');
    if(document.getElementById('container1') != null)
    {
        addActivity();
    }
    if(document.getElementsByClassName('buttontext') != null)
        {
            var elements = document.getElementsByClassName('buttontext');
            for(let i = 0; i < elements.length; i++)
            {
                elements[i].style.display = 'block';
            }
        }
        if(document.getElementsByClassName('containers') != null)
            {
                var elements = document.getElementsByClassName('containers');
                for(let i = 0; i < elements.length; i++)
                {
                    elements[i].style.display = 'block';
                }
            }
});

function removeActivity() 
{
    document.getElementById('container1').style.pointerEvents = "none";
    document.getElementById('container2').style.pointerEvents = "none";
    document.getElementById('container3').style.pointerEvents = "none";
    document.getElementById('container4').style.pointerEvents = "none";
    document.getElementById('container5').style.pointerEvents = "none";
    document.getElementById('container6').style.pointerEvents = "none";
}

function addActivity()
{
    document.getElementById('container1').style.pointerEvents = "auto";
    document.getElementById('container2').style.pointerEvents = "auto";
    document.getElementById('container3').style.pointerEvents = "auto";
    document.getElementById('container4').style.pointerEvents = "auto";
    document.getElementById('container5').style.pointerEvents = "auto";
    document.getElementById('container6').style.pointerEvents = "auto";
}

function show()
{
    wrapper.classList.add('active-popup');
    if(document.getElementById('container1') != null)
    {
        removeActivity();
    }
    if(document.getElementsByClassName('buttontext') != null)
    {
        var elements = document.getElementsByClassName('buttontext');
        for(let i = 0; i < elements.length; i++)
        {
            elements[i].style.display = 'none';
        }
    }
    if(document.getElementsByClassName('containers') != null)
        {
            var elements = document.getElementsByClassName('containers');
            for(let i = 0; i < elements.length; i++)
            {
                elements[i].style.display = 'none';
            }
        }
    content.classList.remove('active');
}