const SearchInput = document.querySelector('.searchbar');

SearchInput.addEventListener("input", (e) => {
    const value = e.target.value;
    if(document.getElementsByClassName('buttontext') != null)
        {
            var texts = document.getElementsByClassName('buttontext');
            var boxes = document.getElementsByClassName('box');
            
            for(let i = 0; i < texts.length; i++)
            {
                if(texts[i].innerHTML.search(value) === -1)
                {
                    boxes[i].style.display = 'none';
                }
                else
                {
                    boxes[i].style.display = 'block'; 
                }
            }
        }
});


