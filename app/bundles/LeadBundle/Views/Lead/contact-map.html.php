<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css" />
<?php
ini_set('memory_limit', '-1');
/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$view->extend('MauticCoreBundle:Default:content.html.php');
$view['slots']->set('mauticContent', 'lead');
$view['slots']->set('headerTitle', "Mapa de contactos");
print_r($items);
?>
<script type="text/javascript">
    //var addressPoints = <?php echo json_encode($items, JSON_PRETTY_PRINT); ?>;
</script>


<div class="panel panel-default bdr-t-wdh-0 mb-0">
    <div id="map"></div>
    <div id="images"></div>
</div>
    <script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.js"></script>
    <script src="http://sintef-9012.github.io/PruneCluster/dist/PruneCluster.js"></script>
<script src="http://63.141.233.213/prueba2/demo4/leaflet-markercluster.js"></script>
<script src="http://63.141.233.213/prueba2/demo4/leaflet-image.js"></script>


<script type="text/javascript">

    var latlng = L.latLng([-34.6132645954471, -58.4390455397312]);

    var map = L.map('map').setView(latlng, 12);
    L.tileLayer('http://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}', {
        attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
        subdomains: 'abcd',
        minZoom: 0,
        maxZoom: 20
    }).addTo(map);

   var drawnItems = new L.FeatureGroup();
    map.addLayer(drawnItems);

    var drawControl = new L.Control.Draw({
        edit: {
            featureGroup: drawnItems
        }
    });
    map.addControl(drawControl);

    map.on('draw:created', function (e) {
        var type = e.layerType,
            layer = e.layer;
        drawnItems.addLayer(layer);
    });



    var markers = L.markerClusterGroup();

//      var leafletView = new PruneClusterForLeaflet();
//
//      for (var i = 0, l = addressPoints.length; i < l; ++i) {
//          leafletView.RegisterMarker(new PruneCluster.Marker(addressPoints[i][0], addressPoints[i][1], {title: addressPoints[i][2]}));
//      }
//      leafletView.PrepareLeafletMarker = function (marker, data) {
//          if (marker.getPopup()) {
//              marker.setPopupContent(data.title);
//          } else {
//              marker.bindPopup(data.title);
//          }
//      };
//
//      map.addLayer(leafletView);
    for (var i = 0; i < addressPoints.length; i++) {
        var a = addressPoints[i];
        var title = a[2];
        var marker = L.marker(new L.LatLng(a[0], a[1]), { title: title });
        marker.bindPopup(title);
        markers.addLayer(marker);
    }

    map.addLayer(markers);

    leafletImage(map, function(err, canvas) {
        // now you have canvas
        // example thing to do with that canvas:
        var img = document.createElement('img');
        var dimensions = map.getSize();
        img.width = dimensions.x;
        img.height = dimensions.y;
        img.src = canvas.toDataURL();
        document.getElementById('images').innerHTML = '';
        document.getElementById('images').appendChild(img);
    });


    map.on('draw:created', function (e) {
        var type = e.layerType,
            layer = e.layer;

        if (type === 'polygon') {
            // structure the geojson object
            var geojson = {};
            geojson['type'] = 'Feature';
            geojson['geometry'] = {};
            geojson['geometry']['type'] = "Polygon";

            // export the coordinates from the layer
            coordinates = [];
            latlngs = layer.getLatLngs();
            for (var i = 0; i < latlngs.length; i++) {
                coordinates.push([latlngs[i].lng, latlngs[i].lat])
            }

            // push the coordinates to the json geometry
            geojson['geometry']['coordinates'] = [coordinates];

            // Finally, show the poly as a geojson object in the console
            console.log(JSON.stringify(geojson));

        }

        drawnItems.addLayer(layer);
    });
</script>
