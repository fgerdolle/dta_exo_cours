// On initialise la latitude et la longitude de Paris (centre de la carte)
var lat = 45.4333;
var lon = 4.4;
var macarte = null;
// Fonction d'initialisation de la carte
function initMap() {
    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map('map').setView([lat, lon], 11);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);
	
	marker = L.marker([45.4466, 4.38499]);
	marker.bindPopup('<h4>Mediathèque de Carnot</h4><br><b>Adresse :</b> 3, bd. Augustin Thierry, 42000, Saint-Etienne<br><b>Téléphone :</b> 04 77 43 35 20<br><br><a href="comparateuressai2.php">Comparateur</a>').openPopup();
	marker.addTo(macarte);
	
	marker = L.marker([45.4362, 4.38176]);
	marker.bindPopup('<h4>Mediathèque Municipale de Tarentaize</h4><br><b>Adresse :</b> 20 - 24, rue Jo Gouttebarge, 42000, Saint-Etienne<br><b>Téléphone :</b> 04 77 43 09 77<br><br><a href="comparateuressai2.php">Comparateur</a>').openPopup();
	marker.addTo(macarte);
	
	marker = L.marker([45.4772, 4.50685]);
	marker.bindPopup('<h4>Mediathèque Municipale Louise Labé</h4><br><b>Adresse :</b> 54 Boulevard Waldeck Rousseau, 42400, Saint-Chamond<br><b>Téléphone :</b> 04 77 31 07 80<br><br><a href="comparateuressai2.php">Comparateur</a>').openPopup();
	marker.addTo(macarte);
}
window.onload = function(){
// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
initMap(); 
};