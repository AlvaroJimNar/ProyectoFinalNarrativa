(function(){
	'use strict';
	document.addEventListener('DOMContentLoaded', function(){


		/* Map */
		try{
			showMap();
		}
		catch(e)
		{
			console.warn('map not loaded');
		}

        function showMap(){
            var map = L.map('mymap').setView([37.487678, -5.943097], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([37.487678, -5.943097]).addTo(map)
                .bindPopup('Royalty, Inc')
                .openPopup()
                .bindTooltip('Royalty');
        }
    });
})();