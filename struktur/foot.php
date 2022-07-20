<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<!-- Leaflet -->
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<script type="text/javascript">
    // Maps Dashboard
    //  Latitude, Longitude
    var map = L.map('gudang_maps').setView([-6.8980319, 107.6352862], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    //  Icon
    var gudangIcon = L.icon({
        iconUrl: '../img/gudang.png',
        iconSize:     [32, 32], // size of the icon
        popupAnchor:  [0, -15] // point from which the popup should open relative to the iconAnchor
    });
    
    L.marker([-6.8980319, 107.6352862], {icon: gudangIcon}).addTo(map)
        .bindPopup('<b>Gudang</b>');
</script>
<script type="text/javascript">
    // Maps Tambah Gudang
    var map = L.map('tambahgudang_maps').setView([-6.171505880059564, 106.82650155849288], 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
//  Icon
    var gudangIcon = L.icon({
        iconUrl: '../img/gudang.png',
        iconSize:     [32, 32], // size of the icon
        popupAnchor:  [0, -15] // point from which the popup should open relative to the iconAnchor
    });
    
//    L.marker([-6.8980319, 107.6352862], {icon: gudangIcon}).addTo(map).bindPopup('<b>Gudang</b>');
    // get coordinate
    map.on('click', function(e){
        var coord = e.latlng.toString().split(',');
        var lat = coord[0].split('(');
        var lng = coord[1].split(')');
        document.getElementById("longitude").value = lng[0];
        document.getElementById("latitude").value = lat[1];
        L.marker([lat[1], lng[0]], {icon: gudangIcon}).addTo(map).bindPopup('<b>Gudang</b>');
    });
</script>
</body>
</html>