const navLink = document.querySelectorAll('.nav-item') // NAVIGATION ON DASHBOARD
const navLanguage = document.querySelector('.nav-language') // NAVIGATION LANGUAGE
const navToDashboard = document.querySelector('.to-dashboard') // NAVIGATION TO DASHBOARD
const navToBack = document.querySelector('.to-back') // NAVIGATION TO BACK
const navMenu = document.querySelectorAll('.menu') // NAVIGATION MENU
const dlanguage = document.querySelector('.dialog-choose-language') // DIALOG LANGUAGE
const langItem = document.querySelectorAll('.language-item') // LANGUAGE
const singleLink = document.querySelector('.nav-link') // GLOBAL NAV LINK
const btnOpenModal = document.querySelectorAll('.option-btn') // OPEN MODAL BTN


// NAVIGATION ON DASHBOARD
for (let index = 0; index < navLink.length; index++) {
  const link = navLink[index]
  hrefElementAddEvent(link)
}

// LANGUAGE ITEM
for (let index = 0; index < langItem.length; index++) {
  const lItem = langItem[index]
  hrefElementAddEvent(lItem)
}

// SHOW MENU
for (let index = 0; index < navMenu.length; index++) {
  const btnMenu = navMenu[index]
  hrefElementAddEvent(btnMenu)
}

for (let index = 0; index < btnOpenModal.length; index++) {
  const btnOption = btnOpenModal[index];
  btnOption.addEventListener('click', function (e) {
    const dataRef = e.target.getAttribute('data-href')
    const modalRef = document.getElementById('modal-pass-' + dataRef)

    if (modalRef !== null) {
      modalRef.classList.add('is-open')
      const btnClose = modalRef.getElementsByClassName('btn')
      if (btnClose !== null) {
        btnClose[0].addEventListener('click', function (e) {
          modalRef.classList.remove('is-open')
        })
      }
    }
  })
}

// SHOW DIALOG LANGUAGE 
if (navLanguage !== null) {
  navLanguage.addEventListener('click', function () {
    dlanguage.classList.add('dialog-open')
  })
}

// REMOVE DIALOG LANGUAGE
if (dlanguage !== null) {
  dlanguage.addEventListener('click', function (e) {
    if (e.target.classList[0] === 'choose-language') {
      dlanguage.classList.remove('dialog-open')
    }
  })
}

// NAV TO DASHBOARD
if (navToDashboard !== null) {
  hrefElementAddEvent(navToDashboard)
}

// NAV TO BACK
if (navToBack !== null) {
  hrefElementAddEvent(navToBack)
}

// GLOBAL LINK
if (singleLink !== null) {
  hrefElementAddEvent(singleLink)
}

function hrefElementAddEvent(el) {
  el.addEventListener('click', function (e) {
    const href = e.target.getAttribute('data-href')
    if (href !== null) {
      navToHref(href)
    }
  })
}


function navToHref(url) {
  window.location.href = url
}

