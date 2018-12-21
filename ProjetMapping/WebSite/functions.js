var marker;
var map;      // global variable
var latlng = new google.maps.LatLng(39.305, -76.617);
var monstorage = localStorage;
var StringINNER=""
var x =document.getElementById("Historique")

for (let index = 0; index < monstorage.length; index++) {
	const element = monstorage.getItem(index);
	if (element == null) {
		continue
	}
	StringINNER +="<br>Votre Position"+index+element;	
}
x.innerHTML = StringINNER;


// assigning to global variable:
map = new google.maps.Map(document.getElementById("map"),
	{
		center: latlng,
		zoom: 12,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	});

function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(suivre, showError);
	} else {
		x.innerHTML = "Geolocation is not supported by this browser.";
	}
}



function suivre(position) {
	var StringINNER=""
	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;
	latlng = new google.maps.LatLng(latitude, longitude);
	marker = new google.maps.Marker({
		position: latlng,
		map: map,
		title: "Vous êtes ici"
	});
	map.panTo(latlng);
	monstorage.setItem(monstorage.getItem("iter"),latlng);
	for (let index = 0; index < monstorage.length; index++) {
		const element = monstorage.getItem(index);
		if (element == null) {
			continue
		}
		StringINNER +="<br>Votre Position"+index+element;	
	}
	x.innerHTML= StringINNER;
	newiter=parseInt(monstorage.getItem("iter"))+1;
	monstorage.setItem("iter",newiter);
	console.log(monstorage.getItem("iter"))
};


function showError(error) {
	switch (error.code) {
		case error.PERMISSION_DENIED:
			x.innerHTML = "User denied the request for Geolocation."
			break;
		case error.POSITION_UNAVAILABLE:
			x.innerHTML = "Location information is unavailable."
			break;
		case error.TIMEOUT:
			x.innerHTML = "The request to get user location timed out."
			break;
		case error.UNKNOWN_ERROR:
			x.innerHTML = "An unknown error occurred."
			break;
	}
}

function clearstorage() {
	monstorage.clear();
	monstorage.setItem("iter",0)
	alert('storage Clear')
}
