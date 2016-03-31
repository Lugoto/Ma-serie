
var muteBtn = document.getElementById('mute-btn');
var unmuteBtn = document.getElementById('unmute-btn');
muteBtn.addEventListener('click', muteUnmuteHandler, false);
unmuteBtn.addEventListener('click', muteUnmuteHandler, false);

daredevil.volume = 0.0;
unmuteBtn.style.visibility = 'visible';
muteBtn.style.visibility = 'hidden';


function muteUnmuteHandler(e) {
   if (daredevil.volume == 0.0) {
       // Si le son est désactivé, l'activer
       daredevil.volume = 1.0;
       // Afficher le bouton de désactivation du son et masquer le bouton de réactivation du son
       muteBtn.style.visibility = 'visible';
       unmuteBtn.style.visibility = 'hidden';
   } else {
       // Si le son est activé, le désactiver
       daredevil.volume = 0.0;
       // Afficher le bouton de réactivation du son et masquer le bouton de désactivation du son
       muteBtn.style.visibility = 'hidden';
       unmuteBtn.style.visibility = 'visible';
   }
}
