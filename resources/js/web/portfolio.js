(() => {
  const menuLinks = document.getElementById('categoriesMenu')
  menuLinks.addEventListener('click', e => {
    e.preventDefault()

    if(!e.target.matches('a')){
      return
    }

    Array.from(document.getElementsByClassName('gridContainer')).forEach(item => {
      item.classList.add('hidden')
      item.classList.add('opacity-0')
    })

    document.getElementById(e.target.dataset.container).classList.remove('hidden')
    document.getElementById(e.target.dataset.container).classList.add('grid')
    
    requestAnimationFrame(() => {
      document.getElementById(e.target.dataset.container).classList.remove('opacity-0')
      document.getElementById(e.target.dataset.container).classList.add('opacity-100')              
    });      
  })
})();