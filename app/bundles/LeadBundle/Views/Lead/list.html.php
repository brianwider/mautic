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

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if ($tmpl == 'index') {
    $view->extend('MauticLeadBundle:Lead:index.html.php');
}

$customButtons = [];
if ($permissions['lead:leads:editown'] || $permissions['lead:leads:editother']) {
    $customButtons = [
        [
            'attr' => [
                'class'       => 'btn btn-default btn-sm btn-nospin',
                'data-toggle' => 'ajaxmodal',
                'data-target' => '#MauticSharedModal',
                'href'        => $view['router']->path('mautic_contact_action', ['objectAction' => 'batchLists']),
                'data-header' => $view['translator']->trans('mautic.lead.batch.lists'),
            ],
            'btnText'   => $view['translator']->trans('mautic.lead.batch.lists'),
            'iconClass' => 'fa fa-pie-chart',
        ],
        [
            'attr' => [
                'class'       => 'btn btn-default btn-sm btn-nospin',
                'data-toggle' => 'ajaxmodal',
                'data-target' => '#MauticSharedModal',
                'href'        => $view['router']->path('mautic_contact_action', ['objectAction' => 'batchStages']),
                'data-header' => $view['translator']->trans('mautic.lead.batch.stages'),
            ],
            'btnText'   => $view['translator']->trans('mautic.lead.batch.stages'),
            'iconClass' => 'fa fa-tachometer',
        ],
        [
            'attr' => [
                'class'       => 'btn btn-default btn-sm btn-nospin',
                'data-toggle' => 'ajaxmodal',
                'data-target' => '#MauticSharedModal',
                'href'        => $view['router']->path('mautic_contact_action', ['objectAction' => 'batchCampaigns']),
                'data-header' => $view['translator']->trans('mautic.lead.batch.campaigns'),
            ],
            'btnText'   => $view['translator']->trans('mautic.lead.batch.campaigns'),
            'iconClass' => 'fa fa-clock-o',
        ],
        [
            'attr' => [
                'class'       => 'hidden-xs btn btn-default btn-sm btn-nospin',
                'data-toggle' => 'ajaxmodal',
                'data-target' => '#MauticSharedModal',
                'href'        => $view['router']->path('mautic_contact_action', ['objectAction' => 'batchDnc']),
                'data-header' => $view['translator']->trans('mautic.lead.batch.dnc'),
            ],
            'btnText'   => $view['translator']->trans('mautic.lead.batch.dnc'),
            'iconClass' => 'fa fa-ban text-danger',
        ],
    ];
}
?>

<?php if (count($items)): ?>
<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered" id="leadTable">
        <thead>
            <tr>
                <?php
                echo $view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'checkall'        => 'true',
                    'target'          => '#leadTable',
                    'templateButtons' => [
                        'delete' => $permissions['lead:leads:deleteown'] || $permissions['lead:leads:deleteother'],
                    ],
                    'customButtons' => $customButtons,
                    'langVar'       => 'lead.lead',
                    'routeBase'     => 'contact',
                ]);

                echo $view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'lead',
                    'orderBy'    => 'l.lastname, l.firstname, l.company, l.email',
                    'text'       => 'mautic.core.name',
                    'class'      => 'col-lead-name',
                ]);

                echo $view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'lead',
                    'orderBy'    => 'l.email',
                    'text'       => 'mautic.core.type.email',
                    'class'      => 'col-lead-email visible-md visible-lg',
                ]);

                echo $view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'lead',
                    'orderBy'    => 'l.city, l.state',
                    'text'       => 'mautic.lead.lead.thead.location',
                    'class'      => 'col-lead-location visible-md visible-lg',
                ]);
                echo $view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'lead',
                    'orderBy'    => 'l.stage_id',
                    'text'       => 'mautic.lead.stage.label',
                    'class'      => 'col-lead-stage',
                ]);
                echo $view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'lead',
                    'orderBy'    => 'l.points',
                    'text'       => 'mautic.lead.points',
                    'class'      => 'visible-md visible-lg col-lead-points',
                ]);

                echo $view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'lead',
                    'orderBy'    => 'l.last_active',
                    'text'       => 'mautic.lead.lastactive',
                    'class'      => 'col-lead-lastactive visible-md visible-lg',
                    'default'    => true,
                ]);

                echo $view->render('MauticCoreBundle:Helper:tableheader.html.php', [
                    'sessionVar' => 'lead',
                    'orderBy'    => 'l.id',
                    'text'       => 'mautic.core.id',
                    'class'      => 'col-lead-id visible-md visible-lg',
                ]);
                ?>
            </tr>
        </thead>
        <tbody>
        <?php echo $view->render('MauticLeadBundle:Lead:list_rows.html.php', [
            'items'         => $items,
            'tags'          => $tags,
            'security'      => $security,
            'currentList'   => $currentList,
            'permissions'   => $permissions,
            'noContactList' => $noContactList,
        ]); ?>
        </tbody>
    </table>
</div>
<div class="panel-footer">
    <?php
	echo $totalItems;
	echo $view->render('MauticCoreBundle:Helper:pagination.html.php', [
        'totalItems' => $totalItems,
        'page'       => $page,
        'limit'      => $limit,
        'menuLinkId' => 'mautic_contact_index',
        'baseUrl'    => $view['router']->path('mautic_contact_index'),
        'tmpl'       => $indexMode,
        'sessionVar' => 'lead',
    ]);?>
</div>
<?php else: ?>
<?php echo $view->render('MauticCoreBundle:Helper:noresults.html.php'); ?>
<?php endif; ?>
<div id="map"></div>
<div id="images"></div>
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
	<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/0.4.2/leaflet.draw.css"></script>
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
