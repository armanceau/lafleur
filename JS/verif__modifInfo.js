let initialValues = {};


// Fonction appelée au chargement de la page pour stocker les valeurs initiales des champs
function storeInitialValues() {
  const form = document.getElementById("modif__infoPerso");
  const inputs = form.querySelectorAll("input, select, textarea");

  inputs.forEach(input => {
    initialValues[input.name] = input.value;
  });
}

// Fonction appelée lors de la soumission du formulaire pour vérifier les modifications
function checkFormChanges(event) {
  const form = event.target;
  const inputs = form.querySelectorAll("input, select, textarea");
  let hasChanges = false;

  inputs.forEach(input => {
    if (input.value !== initialValues[input.name]) {
      hasChanges = true;
    }
  });

  if (hasChanges) {
    // Le formulaire a été modifié, on peut empêcher son envoi
    // Ou afficher une confirmation à l'utilisateur
    // ...
  }else{
    alert('Aucune modification détectée, modifier vos informations afin de pouvoir envoyer le formulaire') ;
    event.preventDefault();
  }
}

const form = document.getElementById("modif__infoPerso");
form.addEventListener("submit", checkFormChanges);
window.addEventListener("load", storeInitialValues);
