<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css" />
<?php

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
$view['slots']->set('headerTitle', $view['translator']->trans('mautic.lead.leads'));

$pageButtons = [];
if ($permissions['lead:leads:create']) {
    $pageButtons[] = [
        'attr' => [
            'class'       => 'btn btn-default btn-nospin quickadd',
            'data-toggle' => 'ajaxmodal',
            'data-target' => '#MauticSharedModal',
            'href'        => $view['router']->path('mautic_contact_action', ['objectAction' => 'quickAdd']),
            'data-header' => $view['translator']->trans('mautic.lead.lead.menu.quickadd'),
        ],
        'iconClass' => 'fa fa-bolt',
        'btnText'   => 'mautic.lead.lead.menu.quickadd',
        'primary'   => true,
    ];

    $pageButtons[] = [
        'attr' => [
            'href' => $view['router']->path('mautic_contact_action', ['objectAction' => 'import']),
        ],
        'iconClass' => 'fa fa-upload',
        'btnText'   => 'mautic.lead.lead.import',
    ];
}

// Only show toggle buttons for accessibility
$extraHtml = <<<button
<div class="btn-group ml-5 sr-only ">
    <span data-toggle="tooltip" title="{$view['translator']->trans(
    'mautic.lead.tooltip.list'
)}" data-placement="left"><a id="table-view" href="{$view['router']->path('mautic_contact_index', ['page' => $page, 'view' => 'list'])}" data-toggle="ajax" class="btn btn-default"><i class="fa fa-fw fa-table"></i></span></a>
    <span data-toggle="tooltip" title="{$view['translator']->trans(
    'mautic.lead.tooltip.grid'
)}" data-placement="left"><a id="card-view" href="{$view['router']->path('mautic_contact_index', ['page' => $page, 'view' => 'grid'])}" data-toggle="ajax" class="btn btn-default"><i class="fa fa-fw fa-th-large"></i></span></a>
</div>
button;

$view['slots']->set(
    'actions',
    $view->render(
        'MauticCoreBundle:Helper:page_actions.html.php',
        [
            'templateButtons' => [
                'new' => $permissions['lead:leads:create'],
            ],
            'routeBase'     => 'contact',
            'langVar'       => 'lead.lead',
            'customButtons' => $pageButtons,
            'extraHtml'     => $extraHtml,
        ]
    )
);

$toolbarButtons = [
    [
        'attr' => [
            'class'       => 'hidden-xs btn btn-default btn-sm btn-nospin',
            'href'        => 'javascript: void(0)',
            'onclick'     => 'Mautic.toggleLiveLeadListUpdate();',
            'id'          => 'liveModeButton',
            'data-toggle' => false,
            'data-max-id' => $maxLeadId,
        ],
        'tooltip'   => $view['translator']->trans('mautic.lead.lead.live_update'),
        'iconClass' => 'fa fa-bolt',
    ],
];

if ($indexMode == 'list') {
    $toolbarButtons[] = [
        'attr' => [
            'class'          => 'hidden-xs btn btn-default btn-sm btn-nospin'.(($anonymousShowing) ? ' btn-primary' : ''),
            'href'           => 'javascript: void(0)',
            'onclick'        => 'Mautic.toggleAnonymousLeads();',
            'id'             => 'anonymousLeadButton',
            'data-anonymous' => $view['translator']->trans('mautic.lead.lead.searchcommand.isanonymous'),
        ],
        'tooltip'   => $view['translator']->trans('mautic.lead.lead.anonymous_leads'),
        'iconClass' => 'fa fa-user-secret',
    ];
}
?>

<div class="panel panel-default bdr-t-wdh-0 mb-0">
    <?php echo $view->render(
        'MauticCoreBundle:Helper:list_toolbar.html.php',
        [
            'searchValue'   => $searchValue,
            'searchHelp'    => 'mautic.lead.lead.help.searchcommands',
            'action'        => $currentRoute,
            'customButtons' => $toolbarButtons,
        ]
    ); ?>
    <div class="page-list">
        <?php $view['slots']->output('_content'); ?>
    </div>
</div>

<div id="map"></div>
<div id="images"></div>
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
