const navLink = document.querySelectorAll('.nav-item') // NAVIGATION ON DASHBOARD
const navLanguage = document.querySelector('.nav-language') // NAVIGATION LANGUAGE
const dlanguage = document.querySelector('.dialog-choose-language') // DIALOG LANGUAGE
const langItem = document.querySelectorAll('.language-item') // LANGUAGE


// NAVIGATION ON DASHBOARD
for (let index = 0; index < navLink.length; index++) {
  const link = navLink[index];
  link.addEventListener('click', function (e) {
    const href = e.target.getAttribute('data-href')
    if (href !== null) {
      window.location.href = href
    }
  })
}

// LANGUAGE ITEM
for (let index = 0; index < langItem.length; index++) {
  const lItem = langItem[index];
  lItem.addEventListener('click', function (e) {
    const langCode = e.target.getAttribute('data-href')
    if (langCode !== null) {
      window.location.href = 'set-lang/' + langCode
    }
  })
}

// SHOW DIALOG LANGUAGE 
navLanguage.addEventListener('click', function () {
  dlanguage.classList.add('dialog-open')
})

// REMOVE DIALOG LANGUAGE
dlanguage.addEventListener('click', function (e) {
  if (e.target.classList[0] === 'choose-language') {
    dlanguage.classList.remove('dialog-open')
  }
})

