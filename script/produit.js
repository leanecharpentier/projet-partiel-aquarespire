// Variables pour ajouter au panier
let btnAjouterPanier = document.getElementById('btn-ajouter-panier')
let modalFormAjouterPanier = document.getElementById('modal-ajouter-panier')
let btnValider = document.getElementById('btn-valider')

// Variables favoris
let iconCoeurVide = document.getElementById('icon-coeur-vide')
let iconCoeurPlein = document.getElementById('icon-coeur-plein')

btnAjouterPanier.addEventListener('click', function(){
    modalFormAjouterPanier.classList.add('active')
})

btnValider.addEventListener('click', function(){
    modalFormAjouterPanier.classList.remove('active')
})


iconCoeurVide.addEventListener('click', function(){
    iconCoeurVide.classList.add('hidden')
    iconCoeurPlein.classList.remove('hidden')
})

iconCoeurPlein.addEventListener('click', function(){
    iconCoeurVide.classList.remove('hidden')
    iconCoeurPlein.classList.add('hidden')
})