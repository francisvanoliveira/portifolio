let navbarDiv = document.querySelector('.navbar');
window.addEventListener('scroll', () => {
    if(document.body.scrollTop > 40 || document.documentElement.scrollTop > 40){
        navbarDiv.classList.add('navbar-cng');
    } else {
        navbarDiv.classList.remove('navbar-cng');
    }
});


const navbarCollapseDiv = document.getElementById('navbar-collapse');
const navbarShowBtn = document.getElementById('navbar-show-btn');
const navbarCloseBtn = document.getElementById('navbar-close-btn');
// show navbar
navbarShowBtn.addEventListener('click', () => {
    navbarCollapseDiv.classList.add('navbar-collapse-rmw');
});

// hide side bar
navbarCloseBtn.addEventListener('click', () => {
    navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
});

document.addEventListener('click', (e) => {
    if(e.target.id != "navbar-collapse" && e.target.id != "navbar-show-btn" && e.target.parentElement.id != "navbar-show-btn"){
        navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
    }
});

// stop transition and animatino during window resizing
let resizeTimer;
window.addEventListener('resize', () => {
    document.body.classList.add("resize-animation-stopper");
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        document.body.classList.remove("resize-animation-stopper");
    }, 400);
});

//animação para o título da home

function typeWriter(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
      setTimeout(() => elemento.innerHTML += letra, 75 * i);
    });
  }

  const titulo = document.querySelector('h1');
  typeWriter(titulo);


  // Pagina Galeria image modal
  const allGalleryItem = document.querySelectorAll('.gallery-item');
  const imgModalDiv = document.getElementById('img-modal-box');
  const modalCloseBtn = document.getElementById('modal-close-btn');
  const nextBtn = document.getElementById('next-btn');
  const prevBtn = document.getElementById('prev-btn');
  let imgIndex = 0;

  allGalleryItem.forEach((galleryItem) => {
      galleryItem.addEventListener('click', () => {
          imgModalDiv.style.display = "block";
          let imgSrc = galleryItem.querySelector('img').src;
          imgIndex = parseInt(imgSrc.split("-")[1].substring(0, 1));
          showImageContent(imgIndex);
      })
  });

  // next click
  nextBtn.addEventListener('click', () => {
      imgIndex++;
      if(imgIndex > allGalleryItem.length){
          imgIndex = 1;
      }
      showImageContent(imgIndex);
  });

  // previous click
  prevBtn.addEventListener('click', () => {
      imgIndex--;
      if(imgIndex <= 0){
          imgIndex = allGalleryItem.length;
      }
      showImageContent(imgIndex);
  });

  function showImageContent(index){
      // imgModalDiv.querySelector('#img-modal img').src = `images/gallery-${index}.jpg`;
      imgModalDiv.querySelector('#img-modal img').src = `images/fotos/galeria_0${index}.jpg`;
  }

  modalCloseBtn.addEventListener('click', () => {
      imgModalDiv.style.display = "none";
  })