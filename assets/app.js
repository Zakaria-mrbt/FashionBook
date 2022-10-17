/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

// Import of tailwind elements
import 'tw-elements';


// js carrousel :
let defaultTransform_Accueil = 0;
// fonction du boutton suivant
function goNext_Accueil() {
    defaultTransform_Accueil = defaultTransform_Accueil - 182;
    var slider_accueil = document.getElementById("slider_Accueil");
    // permet de définir une taille maximal ou la fonction peut agir
    if (Math.abs(defaultTransform_Accueil) >= slider_accueil.scrollWidth / 1.9) defaultTransform_Accueil = 0;
    slider_accueil.style.transform = "translateX(" + defaultTransform_Accueil + "px)";
}
// ajout de l'evenement clique a la fonction du bouton suivant
next.addEventListener("click", goNext_Accueil);
// fonction du boutton precedent
function goPrev_Accueil() {
    var slider_accueil = document.getElementById("slider_Accueil");
    if (Math.abs(defaultTransform_Accueil) === 0) defaultTransform_Accueil = 0;
    else defaultTransform_Accueil = defaultTransform_Accueil + 182;
    slider_accueil.style.transform = "translateX(" + defaultTransform_Accueil + "px)";
}
// ajout de l'evenement clique a la fonction du bouton precedent
prev.addEventListener("click", goPrev_Accueil);

// js Carousell profil
let defaultTransform_Profil = 0;
// fonction du boutton suivant
function goNext_Profil() {
    // plus le chiffre est négatif + le carrousel deplaceras les elements vers la droite
    defaultTransform_Profil = defaultTransform_Profil - 1012;
    var slider_Profil = document.getElementById("slider_Profil");
    // permet de définir une taille maximal ou la fonction peut agir
    if (Math.abs(defaultTransform_Profil) >= slider_Profil.scrollWidth / 1.2) defaultTransform_Profil = 0;
    slider_Profil.style.transform = "translateX(" + defaultTransform_Profil + "px)";
}
// ajout de l'evenement clique a la fonction du bouton suivant
next.addEventListener("click", goNext_Profil);
// fonction du boutton precedent
function goPrev_Profil() {
    var slider_Profil = document.getElementById("slider_Profil");
    if (Math.abs(defaultTransform_Profil) === 0) defaultTransform_Profil = 0;
    // plus le chiffre est négatif + le carrousel deplaceras les elements vers la gauche
    else defaultTransform_Profil = defaultTransform_Profil + 1012;
    slider_Profil.style.transform = "translateX(" + defaultTransform_Profil + "px)";
}
// ajout de l'evenement clique a la fonction du bouton precedent
prev.addEventListener("click", goPrev_Profil); 