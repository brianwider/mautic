<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css" />
<style>
    #map {
        width: 70%;
        height: 900px;
        margin: 0 auto;
    }
    .marker-cluster-small {
        background-color: rgba(181, 226, 140, 0.6);
        }
    .marker-cluster-small div {
        background-color: rgba(110, 204, 57, 0.6);
        }

    .marker-cluster-medium {
        background-color: rgba(241, 211, 87, 0.6);
        }
    .marker-cluster-medium div {
        background-color: rgba(240, 194, 12, 0.6);
        }

    .marker-cluster-large {
        background-color: rgba(253, 156, 115, 0.6);
        }
    .marker-cluster-large div {
        background-color: rgba(241, 128, 23, 0.6);
        }

    .marker-cluster {
        background-clip: padding-box;
        border-radius: 20px;
        }
    .marker-cluster div {
        width: 30px;
        height: 30px;
        margin-left: 5px;
        margin-top: 5px;

        text-align: center;
        border-radius: 15px;
        font: 12px "Helvetica Neue", Arial, Helvetica, sans-serif;
        }
    .marker-cluster span {
        line-height: 30px;
        }
</style>
<?php
if ($tmpl == 'index') {
    $view->extend('MauticLeadBundle:Lead:index.html.php');
}
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
$arr = array();
$i = 0;
// Don't allow more than 5 if the array is bigger than 5
$maxiterations = 50000;

// Tags
?>

<select name='segments'>
<?php
foreach ($lists as $row) {
    $id = $row['id'];
    $segment = $row['name'];
    echo '<option value="'.$id.'">'.$segment.'</option>';
}
?>
</select>

<select name='tags'>
<?php
foreach ($tags as $tag) {
    $id = $tag['value'];
    $tagName = $tag['label'];
    echo '<option value="'.$id.'">'.$tagName.'</option>';
}
?>
</select>

<ul class="list-group">
    <?php foreach ($items as $item): ?>
    <?php
        if ($i < $maxiterations) {
            $fields = $item->getFields();
            array_push($arr, array((float)$fields['core']['y']['value'], (float)$fields['core']['x']['value'], $fields['core']['lastname']['value']));
            $i++;
        } else {
            break;
        }
    ?>
    <?php endforeach; ?>
</ul>
<script type="text/javascript">
    var addressPoints = <?php echo json_encode($arr, JSON_PRETTY_PRINT); ?>;
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

    $( document ).ready(function() {

        var map = L.map('map', {
            fullscreenControl: true,
            fullscreenControlOptions: {
                position: 'topleft'
            }
        }).setView([-34.6132645954471, -58.4390455397312],12);
        //map.options.minZoom = 12;
        //map.options.maxZoom = 14;
        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18
        }).addTo(map);

        map.on('moveend', update);

        L.control.scale().addTo(map);

        var markers = L.geoJson(null, {
            onEachFeature: onEachFeature,
            pointToLayer: createClusterIcon
        }).addTo(map);

        var geoJsonLayer;
        var index;
        var data={filtro:"M"};
        map.spin(true);

        $.ajax({
        dataType: "json",
        url: "geojson.php",
        data: data,
        method: "post",
        success: function(data) {
            index = supercluster({
                log: true,
                radius: 60,
                extent: 256,
                maxZoom: 17
            }).load(data.features);

            update();
            map.spin(false);
        }
        }).error(function(e) {
            console.log("error:"+ e);
        });

        function onEachFeature(feature, layer) {
            var popupContent = "<p>"+feature.properties.apellido+"</p>";

            if (feature.properties && feature.properties.popupContent) {
                popupContent += feature.properties.popupContent;
            }

            layer.bindPopup(popupContent);
        }

        function update() {
            /*var bounds = map.getBounds();
            var objetos = index.getClusters([bounds.getWest(), bounds.getSouth(), bounds.getEast(), bounds.getNorth()], map.getZoom())
            markers.clearLayers();
            markers.addData(objetos);*/

            index.points.forEach(function(element) {
                marker = new L.marker([parseFloat(element.geometry.coordinates[0]), parseFloat(element.geometry.coordinates[1])])
                    .bindPopup("asd")
                    .addTo(map);
            });
        }

        function createClusterIcon(feature, latlng) {
            if (typeof feature.properties.cluster === "undefined"){
                return L.marker(latlng);
            }
            var count = feature.properties.point_count;
            var size =
                count < 100 ? 'small' :
                count < 1000 ? 'medium' : 'large';
            var icon = L.divIcon({
                html: '<div><span>' + feature.properties.point_count_abbreviated + '</span></div>',
                className: 'marker-cluster marker-cluster-' + size,
                iconSize: L.point(40, 40)
            });
            return L.marker(latlng, {icon: icon});
        }
    });
</script>
