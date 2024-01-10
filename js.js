/*let sections = document.querySelectorAll('section');
let navlinks =document.querySelectorAll('header nav li');
window.onscroll =() =>{
    sections.forEach(sec =>{
        let top =window.scrollY;
        let offset= window.offsetTop;
        let height=sec.offsetHeight;
        let id = sec.getAttribute('id');
        if(top >= offset && top <offset + height){
            navlinks.forEach(links =>{
                links.classList.remove('active');
                document.querySelector('header nav li [href*=' + id +']').classList.add('active');
            }
                );
        };
    }
        );
};
let btn = document.getElementById('btn');
btn.addEventListener('click' ,  () => {


        window.scrollTo({
    top:0,
    behavior:"smooth"

}}
******************
document.addEventListener("DOMContentLoaded", function () {
    const produits = document.querySelectorAll(".produit");
    const listePanier = document.getElementById("liste-panier");
    const totalElement = document.getElementById("total");
    let panier = [];

    produits.forEach((produit) => {
        const boutonAjouter = produit.querySelector(".ajouter-panier");
        boutonAjouter.addEventListener("click", () => ajouterAuPanier(produit));
    });

    function ajouterAuPanier(produit) {
        const produitId = produit.dataset.id;
        const produitNom = produit.dataset.nom;
        const produitPrix = parseFloat(produit.dataset.prix);

        const panierItem = {
            id: produitId,
            nom: produitNom,
            prix: produitPrix
        };

        panier.push(panierItem);
        afficherPanier();
    }

    function afficherPanier() {
        listePanier.innerHTML = "";
        let total = 0;

        panier.forEach((item) => {
            const listItem = document.createElement("li");
            listItem.innerHTML = `<span>${item.nom}</span><span>$${item.prix.toFixed(2)}</span>`;
            listePanier.appendChild(listItem);
            total += item.prix;
        });

        totalElement.textContent = `Total : $${total.toFixed(2)}`;
    }
});
*******************
let openShopping=document.querySelector('.shopping');
let closeShopping=document.querySelector('.closeShopping');
let list=document.querySelector('.list');
let listCard=document.querySelector('.listCard');
let body =document.querySelector('body');
let total = document.querySelector('.total');
let quantity=document.querySelector('.quantity');
openShopping.addEventListener('click',()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click',()=>{
    body.classList.remove('active');
})
let products =[
    {
        id:1,
        name:'product name 1',
        image:'1.png',
        price:120000
    },
    {
        id:2,
        name:'product name 2',
        image:'2.png',
        price:120000
    },
    {
        id:3,
        name:'product name 3',
        image:'3.png',
        price:120000
    },
    {
        id:4,
        name:'product name 4',
        image:'4.png',
        price:120000;
    },
];
let listCards =[];
function initApp(){
    products.forEach
}*/
const slider = document.querySelector('.slider');

  function activate(e) {
    const items = document.querySelectorAll('.item');
    e.target.matches('.next') && slider.append(items[0])
    e.target.matches('.prev') && slider.prepend(items[items.length-1]);
  }
  
  document.addEventListener('click',activate,false);
  let btn = document.getElementById('btn');
btn.addEventListener('click' ,  () => {


        window.scrollTo({
    top:0,
    behavior:"smooth"

})}