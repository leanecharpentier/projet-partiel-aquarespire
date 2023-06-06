// Variables pour le menu burger
let openBurger = document.getElementById('nav-burger')
let overlay = document.getElementById('overlay')
let btnBurger = document.getElementById('menu-burger')

// Variables pour le panier
let btnPanier = document.getElementById('panier')
let panier = document.getElementById('modal-panier')

// Variables pour les favoris
let btnFavoris = document.getElementById('favoris')
let favoris = document.getElementById('modal-favoris')


//Overlay
overlay.addEventListener('click', function(){
    openBurger.classList.remove('active')
    panier.classList.add('hidden')
    overlay.classList.remove('active')
})

// Apparition Menu burger
btnBurger.addEventListener('click', function(){
    openBurger.classList.add('active')
    overlay.classList.add('active')
})


// Apparition Panier
btnPanier.addEventListener('click', function(){
    panier.classList.remove('hidden')
    overlay.classList.add('active')
})

//Apparition Favoris
btnFavoris.addEventListener('mouseover', function(){
    favoris.classList.remove('hidden')
})

//Disparition Favoris
btnFavoris.addEventListener('mouseout', function(){
    favoris.classList.add('hidden')
})