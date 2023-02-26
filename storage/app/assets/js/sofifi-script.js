const navLink = document.querySelectorAll('.nav-item') // NAVIGATION ON DASHBOARD
const navLanguage = document.querySelector('.nav-language') // NAVIGATION LANGUAGE
const dlanguage = document.querySelector('.dialog-choose-language') // DIALOG LANGUAGE
const langItem = document.querySelectorAll('.language-item') // LANGUAGE
const singleLink = document.querySelector('.nav-link') // GLOBAL NAV LINK
const btnOpenModal = document.querySelectorAll('.modal-button') // OPEN MODAL BTN


// NAVIGATION ON DASHBOARD
for (let index = 0; index < navLink.length; index++) {
  const link = navLink[index]
  hrefElementAddEvent(link)
}

// LANGUAGE ITEM
for (let index = 0; index < langItem.length; index++) {
  const lItem = langItem[index];
  hrefElementAddEvent(lItem);
}

// SHOW MENU
// for (let index = 0; index < navMenu.length; index++) {
//   const btnMenu = navMenu[index]
//   hrefElementAddEvent(btnMenu)
// }

// for (let index = 0; index < btnOpenModal.length; index++) {
//   const btnOption = btnOpenModal[index];
//   btnOption.addEventListener('click', function (e) {
//     const dataRef = e.target.getAttribute('data-href')
//     const modalRef = document.getElementById('modal-pass-' + dataRef)

//     if (modalRef !== null) {
//       modalRef.classList.add('is-open')
//       const btnClose = modalRef.getElementsByClassName('btn')
//       if (btnClose !== null) {
//         btnClose[0].addEventListener('click', function (e) {
//           modalRef.classList.remove('is-open')
//         })
//       }
//     }
//   })
// }

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

// PAGINATION
const btnInTbl = document.getElementById("t-buttons")
if (btnInTbl !== null) {
  // number of rows per page
  let n = 5,
    // number of rows of the table
    rowCount = btnInTbl.rows.length,
    // get the first cell's tag name (in the first row)
    firstRow = btnInTbl.rows[0].firstElementChild.tagName,
    // boolean var to check if table has a head row
    hasHead = (firstRow === "TH"),
    // an array to hold each row
    tr = [],
    // loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
    i, ii, j = (hasHead) ? 1 : 0,
    // holds the first row if it has a (<TH>) & nothing if (<TD>)
    th = (hasHead ? btnInTbl.rows[(0)].outerHTML : "");
  // count the number of pages
  let pageCount = Math.ceil(rowCount / n);
  // if we had one page only, then we have nothing to do ..
  if (pageCount > 1) {
    // assign each row outHTML (tag name & innerHTML) to the array
    for (i = j, ii = 0; i < rowCount; i++, ii++)
      tr[ii] = btnInTbl.rows[i].outerHTML;
    // create a div block to hold the buttons
    btnInTbl.insertAdjacentHTML("afterend", "<div id='pagination-nav-buttons' class='paginations'></div");
    // the first sort, default page is the first one
    sort(1);
  }

  // (p) is the selected page number. it will be generated when a user clicks a button
  function sort(p) {
    /* create (rows) a variable to hold the group of rows
    ** to be displayed on the selected page,
    ** (s) the start point .. the first row in each page, Do The Math
    */
    var rows = th, s = ((n * p) - n);
    for (i = s; i < (s + n) && i < tr.length; i++)
      rows += tr[i];

    // now the table has a processed group of rows ..
    btnInTbl.innerHTML = rows;
    // create the pagination buttons
    document.getElementById("pagination-nav-buttons").innerHTML = pageButtons(pageCount, p);
    // CSS Stuff
    document.getElementById("id" + p).setAttribute("class", "active");
    btnsAddEventAfterRendered();
  }


  // (pCount) : number of pages,(cur) : current page, the selected one ..
  function pageButtons(pCount, cur) {
    /* this variables will disable the "Prev" button on 1st page
      and "next" button on the last one */
    var prevDis = (cur == 1) ? "disabled" : "",
      nextDis = (cur == pCount) ? "disabled" : "",
      /* this (buttons) will hold every single button needed
      ** it will creates each button and sets the onclick attribute
      ** to the "sort" function with a special (p) number..
      */
      buttons = "<input type='button' class='pagination-nav-btn pagination-nav-prev' value='&lt;&lt;' onclick='sort(" + (cur - 1) + ")' " + prevDis + ">";
    for (i = 1; i <= pCount; i++)
      buttons += "<input type='button' id='id" + i + "'value='" + i + "' onclick='sort(" + i + ")'>";
    buttons += "<input type='button' class='pagination-nav-btn pagination-nav-next' value='&gt;&gt;' onclick='sort(" + (cur + 1) + ")' " + nextDis + ">";
    return buttons;
  }

}

if (btnOpenModal !== null) {
  btnsAddEventAfterRendered()
}

// END PAGINATION
function btnsAddEventAfterRendered() {
  const btnsOpenModal = document.querySelectorAll('.modal-button')
  for (let index = 0; index < btnsOpenModal.length; index++) {
    const btnMdl = btnsOpenModal[index];

    btnMdl.addEventListener('click', function (btnEvt) {
      const ref = btnEvt.target.getAttribute('data-href')
      const modalRef = document.getElementById('modal-' + ref)

      if (modalRef !== null) {
        modalRef.classList.add('is-open')
        const closeBtnMdl = modalRef.getElementsByClassName('with-btn-close')
        closeBtnMdl[0].addEventListener('click', function () {
          modalRef.classList.remove('is-open')
        })
      }
    })

  }
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

// 4 STEPS
const mpasSteps = document.getElementById("mpas-steps")

if (mpasSteps !== null) {
  // get the table element
  let $table = document.getElementById("mpas-steps"),
    // number of rows per page
    $n = 1,
    // number of rows of the table
    $rowCount = $table.rows.length,
    // get the first cell's tag name (in the first row)
    $firstRow = $table.rows[0].firstElementChild.tagName,
    // boolean var to check if table has a head row
    $hasHead = ($firstRow === "TH"),
    // an array to hold each row
    $tr = [],
    // loop counters, to start count from rows[1] (2nd row) if the first row has a head tag
    $i, $ii, $j = ($hasHead) ? 1 : 0,
    // holds the first row if it has a (<TH>) & nothing if (<TD>)
    $th = ($hasHead ? $table.rows[(0)].outerHTML : "");
  // count the number of pages
  let $pageCount = Math.ceil($rowCount / $n);
  // if we had one page only, then we have nothing to do ..
  if ($pageCount > 1) {
    // assign each row outHTML (tag name & innerHTML) to the array
    for ($i = $j, $ii = 0; $i < $rowCount; $i++, $ii++)
      $tr[$ii] = $table.rows[$i].outerHTML;
    // create a div block to hold the buttons
    $table.insertAdjacentHTML("afterend", "<div id='pagination-nav-buttons' class='paginations'></div");
    // the first sort, default page is the first one
    sort(1);
  }

  // ($p) is the selected page number. it will be generated when a user clicks a button
  function sort($p) {
    /* create ($rows) a variable to hold the group of rows
    ** to be displayed on the selected page,
    ** ($s) the start point .. the first row in each page, Do The Math
    */
    var $rows = $th, $s = (($n * $p) - $n);
    for ($i = $s; $i < ($s + $n) && $i < $tr.length; $i++)
      $rows += $tr[$i];

    // now the table has a processed group of rows ..
    $table.innerHTML = $rows;
    // create the pagination buttons
    document.getElementById("pagination-nav-buttons").innerHTML = pageButtons($pageCount, $p);
    // CSS Stuff
    document.getElementById("id" + $p).setAttribute("class", "active");

    renderImageStep();
  }


  // ($pCount) : number of pages,($cur) : current page, the selected one ..
  function pageButtons($pCount, $cur) {
    /* this variables will disable the "Prev" button on 1st page
       and "next" button on the last one */
    var $prevDis = ($cur == 1) ? "disabled" : "",
      $nextDis = ($cur == $pCount) ? "disabled" : "",
      /* this ($buttons) will hold every single button needed
      ** it will creates each button and sets the onclick attribute
      ** to the "sort" function with a special ($p) number..
      */
      $buttons = "<input type='button' class='pagination-nav-btn pagination-nav-prev' value='&lt;&lt;' onclick='sort(" + ($cur - 1) + ")' " + $prevDis + ">";
    for ($i = 1; $i <= $pCount; $i++)
      $buttons += "<input type='button' id='id" + $i + "'value='" + $i + "' onclick='sort(" + $i + ")' style='display:none'>";
    $buttons += "<input type='button' class='pagination-nav-btn pagination-nav-next' value='&gt;&gt;' onclick='sort(" + ($cur + 1) + ")' " + $nextDis + ">";
    return $buttons;
  }

  function renderImageStep() {
    $curStepImage = $table.rows[0].cells[1].childNodes[0].src;
    if ($curStepImage !== undefined) {
      $imageStepContainer = document.querySelector('.content-img');
      $imageStepContainer.innerHTML = `<img src= ${$curStepImage}>`;
    }
  }

}

