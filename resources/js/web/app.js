(() => {
  const menuMobileButton = document.getElementById('menuMobileButton')
  const hamburgerLines = document.getElementsByClassName('hamburgerLines')[0]
  const menuBg = document.getElementById('menuBg')
  menuMobileButton.addEventListener('click', e => {
    e.preventDefault()

    if(hamburgerLines.classList.contains('hamburgerLines--open')){
      menuBg.classList.remove('menuBg--open')
      hamburgerLines.classList.remove('hamburgerLines--open')
    }else{
      menuBg.classList.add('menuBg--open')
      hamburgerLines.classList.add('hamburgerLines--open') 
    }
  })
})();


