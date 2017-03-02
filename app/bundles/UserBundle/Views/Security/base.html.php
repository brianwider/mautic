<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php echo $view['slots']->get('pageTitle', 'Mautic'); ?></title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="<?php echo $view['assets']->getUrl('media/images/favicon.ico') ?>" />
    <link rel="apple-touch-icon" href="<?php echo $view['assets']->getUrl('media/images/apple-touch-icon.png') ?>" />
    <?php $view['assets']->outputSystemStylesheets(); ?>
    <?php echo $view->render('MauticCoreBundle:Default:script.html.php'); ?>
    <?php $view['assets']->outputHeadDeclarations(); ?>
</head>
<body>
<section id="main" role="main">
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4">
                <div class="panel" name="form-login">
                    <div class="panel-body">
                        <div class="mautic-logo img-circle mb-md text-center">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="-7 -24.9 595.3 841.9" style="enable-background:new -7 -24.9 595.3 841.9;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#CF9AAB;}
	.st1{fill:url(#XMLID_7_);}
	.st2{fill:url(#XMLID_18_);}
	.st3{fill:url(#XMLID_19_);}
	.st4{fill:url(#XMLID_22_);}
	.st5{fill:url(#XMLID_23_);}
	.st6{fill:url(#XMLID_24_);}
	.st7{fill:url(#XMLID_30_);}
	.st8{fill:url(#XMLID_31_);}
	.st9{fill:url(#XMLID_32_);}
	.st10{fill:url(#XMLID_35_);}
	.st11{fill:url(#XMLID_37_);}
	.st12{fill:url(#XMLID_39_);}
	.st13{fill:none;}
</style>
<polyline id="XMLID_36_" class="st0" points="285.7,297.2 277.2,304.2 266.1,310.3 259.3,310.6 260.4,320.3 264.5,337.4 273,348.6 
	282.2,353.6 291.3,355.1 302.9,353.9 310.9,349.6 316.9,338.2 321.1,325.2 320,312.1 319.5,308.4 294.7,296.9 "/>
<g id="XMLID_3_">
	<g id="XMLID_29_">
		<path id="XMLID_33_" d="M144,190.3c-5.3-22.6-8.4-46-9.6-69.1c-0.9-17.6-0.8-35.7,3.2-53c3.2-13.7,9.3-28.5,22.4-35.4
			c17-9,37.7-1.1,53.4,6.9c6.7,3.4,13.2,7.3,19.6,11.4c3.8,2.5,8.5,7.8,13.2,7c4.9-0.8,9.8-2.5,14.7-3.3c8.6-1.5,17.3-2.3,26-1.8
			c4.8,0.2,9.6,0.9,14.2,2.2c3.6,1,6.8,3.1,10.4,3.9c0.9,0.2,1.4,0.2,2.2,0.3c5.6,0.9,11.1,2,16.7,3.3c21.2,4.9,42,12.1,61.4,22.2
			c24,12.4,46.2,29.9,60.4,53.3c7.7,12.8,12.8,27,15.1,41.7c1.4,9.2-2.1,19-6.9,26.8s-11.8,13.6-19.9,17.8c-0.2,0.1-0.3,0.3-0.2,0.5
			c0,34.5-25.4,65.3-56.6,77.3c-20.5,7.9-42.9,9.4-64.6,8.2c-0.4,0-1.1,0-1,0.6c1.6,11.7-0.1,26.5-8.6,35.4
			c-7.1,7.4-21.9,11.3-30.9,4.7c-10.7-7.8-14.5-23.2-16.8-35.4c-0.3-1.4-2.8-2.4-4-2.2c-16.1,2.5-33.2,2.2-49.3-0.2
			c-29.1-4.3-57-18.3-67-47.8c-8.2-24.1-4.1-50.9,2.5-74.9c0.4-1.5-4.2-3.4-4.5-2.2c-10.5,37.6-12.8,83.6,22.3,109.2
			c22.4,16.3,51.8,20.7,78.9,20.1c6.8-0.2,13.7-0.5,20.5-1.6c-1.3-0.7-2.7-1.5-4-2.2c3.2,17.5,11.5,41.9,32.9,43.2
			c5,0.3,10.9-0.8,15.3-2.7c9.4-4,14.5-13.1,16.4-22.7c1.2-6.2,1.6-12.9,0.7-19.2c-0.3,0.2-0.7,0.4-1,0.6
			c41.4,2.2,87.8-6.8,110.7-45.1c5.9-9.8,9.8-20.8,11.6-32.1c0.4-2.5,0.1-6,0.9-8.4c0.6-1.6,0-0.8,2.5-2c5.9-2.9,11.1-7.9,15-13
			c5.4-7.1,8.8-15.6,9.8-24.4c1-8.3-2.2-17.7-4.8-25.5c-6.7-20.3-19.1-38-34.8-52.4c-27.1-24.8-62.6-39.9-97.9-48.8
			c-5.5-1.4-11-2.6-16.5-3.7c-2.8-0.5-5.8-0.6-8.5-1.4c-0.2,0-0.3,0-0.5-0.1c1.5,0.5-2-1.2-1.9-1.2c-1.4-0.6-2.9-1.2-4.3-1.6
			c-6.4-2.1-13.1-3.1-19.7-3.3c-11.8-0.5-23.7,1.1-35.1,3.9c-2,0.5-4.1,1-6.1,1.6c0.9,0.3,1.8,0.5,2.7,0.8
			c-28.5-20.1-84.8-52.7-106.2-6.4c-7.6,16.4-8.9,35.4-9,53.2c-0.1,18.6,1.7,37.1,4.5,55.5c1.5,10,3.2,20,5.5,29.9
			C139.7,190.2,144.3,191.6,144,190.3z"/>
	</g>
</g>
<g id="XMLID_2_">
	<g id="XMLID_38_">
		<path id="XMLID_42_" d="M277.3,228.5c-7.6,9.3-15.6,18.4-24,26.9c-5.8,5.9-11.9,10.5-16.1,17.7c-3.7,6.5-5.5,12.9-5.4,20.3
			c0.1,9.4,5.3,15.2,14.1,18c5.9,1.9,12.1,3.3,18,1.1c8.9-3.2,17.3-7.7,24.6-13.7c0.8-0.7-0.8-4.3,0-5c-6.1,5.1-13,9-20.4,12.1
			c-4.6,1.9-7.6,3.1-12.5,2.5c-9.1-1.1-20.8-4.3-23.3-14.5c-0.1-0.4-0.3-2.9-0.4-3c0.5,0.3-0.6,5,0.1,1.7c0.1-0.4,0.1-0.9,0.2-1.3
			c0.3-1.8,0.8-3.6,1.4-5.3c1.1-3.1,2.6-6.1,4.3-9c3.8-6.3,9.3-10.4,14.5-15.7c8.8-8.9,17.2-18.3,25-28
			C278.1,232.5,276.5,229.5,277.3,228.5L277.3,228.5z"/>
	</g>
</g>
<g id="XMLID_5_">
	<g id="XMLID_43_">
		<path id="XMLID_47_" d="M307.7,239.4c6.1,4,12,8.4,17.5,13.1c8.6,7.2,18.6,16,22.4,26.8c0.5,1.5,0.5,3.5,1.1,4.9
			c0,0,0.2-4.6,0-2.8c-0.1,0.6-0.1,1.3-0.1,1.9c-0.2,2.5-0.7,5-1.4,7.5c-1.7,6.1-5.3,11.7-11.3,14.3c-12.2,5.2-27.1-2.5-37.5-8.4
			c0.7,0.4-0.7,4.6,0,5c10.4,5.9,25.3,13.6,37.5,8.4c6.7-2.8,10.3-9.5,11.8-16.3c1-4.5,1.3-9.4,1-14c-0.5-10.2-9-18.9-16-25.6
			c-7.7-7.4-16.2-14.1-25.1-19.9C308.4,234.9,306.9,238.9,307.7,239.4L307.7,239.4z"/>
	</g>
</g>
<g id="XMLID_8_">
	<g id="XMLID_63_">
		<path id="XMLID_67_" d="M442.4,223.2c-6.7-27.4-25.1-54.3-48.1-70.3c-2.3-1.6-4.8-3.1-7.2-4.6c-0.9-0.5-3.3-1.3-3.9-2.2
			c-0.4-0.6-0.5-2-0.7-2.7c-1.2-4.3-2.6-8.6-4-12.9c-5-14.3-11.3-28.3-19.6-40.9c-10.4-15.8-24.8-30.2-44-34.1c0.3,0.1-0.4,4.9,0,5
			c32.8,6.7,51.4,41.9,62,70.6c1.9,5.1,3.6,10.2,5.1,15.4c0.3,1.2,0.5,2.6,1,3.6c0.9,1.9,2.1,2,4.1,3.2
			c17.8,10.2,31.9,25.8,42.1,43.5c5.6,9.7,10.6,20.4,13.3,31.4C442.1,226.6,442.8,224.7,442.4,223.2L442.4,223.2z"/>
	</g>
</g>
<g id="XMLID_4_">
	<g id="XMLID_68_">
		<path id="XMLID_72_" d="M141.7,192c0.7-5.6,5.6-11.3,8.9-15.6c5.5-7.1,11.9-13.5,18.5-19.6c3.4-3.2,6.5-4.7,7.7-9.1
			c6-21.8,15.3-43.7,29.2-61.5c9.8-12.5,22.5-23.1,38.4-26.3c0.4-0.1-0.3-4.9,0-5c-28.4,5.8-46,33.5-57,58.2
			c-4,9-7.4,18.3-10.1,27.7c-0.4,1.4-0.6,3.4-1.3,4.8c-1.1,2.1-4.5,4-6.3,5.6c-1.8,1.7-3.7,3.4-5.5,5.2c-3.6,3.5-7,7.1-10.3,10.9
			c-4.4,5.1-11.3,12.5-12.3,19.7C141.5,188.7,141.9,190.4,141.7,192L141.7,192z"/>
	</g>
</g>
<radialGradient id="XMLID_7_" cx="289.503" cy="515.7985" r="27.6892" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
	<stop  offset="0" style="stop-color:#FFFFFF"/>
	<stop  offset="1.273668e-002" style="stop-color:#FBFCFC"/>
	<stop  offset="0.1304" style="stop-color:#CDCED3"/>
	<stop  offset="0.2513" style="stop-color:#A4A3A8"/>
	<stop  offset="0.3727" style="stop-color:#838286"/>
	<stop  offset="0.4947" style="stop-color:#656569"/>
	<stop  offset="0.6177" style="stop-color:#4D4B4D"/>
	<stop  offset="0.7419" style="stop-color:#333131"/>
	<stop  offset="0.8683" style="stop-color:#171717"/>
	<stop  offset="1" style="stop-color:#000000"/>
</radialGradient>
<path id="XMLID_9_" class="st1" d="M277.7,293.6c0,0,12.4,10.8,26.2-0.7l14.4-18.8c0,0,10.7-16.6-4.1-19.4l-49.5,3.4
	c0,0-15.1,7.8-3.1,19.4L277.7,293.6z"/>
<g id="XMLID_13_">
	
		<radialGradient id="XMLID_18_" cx="234.1" cy="573.6" r="21.0858" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0" style="stop-color:#FAFAFA"/>
		<stop  offset="0" style="stop-color:#D4D5DA"/>
		<stop  offset="0" style="stop-color:#B1B1B6"/>
		<stop  offset="0" style="stop-color:#949397"/>
		<stop  offset="0" style="stop-color:#7A797E"/>
		<stop  offset="0" style="stop-color:#636366"/>
		<stop  offset="0" style="stop-color:#4F4E50"/>
		<stop  offset="0" style="stop-color:#3E3C3C"/>
		<stop  offset="0" style="stop-color:#232222"/>
		<stop  offset="0" style="stop-color:#111111"/>
		<stop  offset="0" style="stop-color:#000000"/>
	</radialGradient>
	<ellipse id="XMLID_6_" class="st2" cx="234.1" cy="218.6" rx="16.1" ry="25.1"/>
	
		<radialGradient id="XMLID_19_" cx="233.6271" cy="590.424" r="6.2788" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0" style="stop-color:#FFFFFF"/>
	</radialGradient>
	<ellipse id="XMLID_11_" class="st3" cx="233.6" cy="201.8" rx="5.2" ry="7.2"/>
</g>
<g id="XMLID_20_">
	
		<radialGradient id="XMLID_22_" cx="344.1" cy="573.5" r="21.0858" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0" style="stop-color:#FAFAFA"/>
		<stop  offset="0" style="stop-color:#D4D5DA"/>
		<stop  offset="0" style="stop-color:#B1B1B6"/>
		<stop  offset="0" style="stop-color:#949397"/>
		<stop  offset="0" style="stop-color:#7A797E"/>
		<stop  offset="0" style="stop-color:#636366"/>
		<stop  offset="0" style="stop-color:#4F4E50"/>
		<stop  offset="0" style="stop-color:#3E3C3C"/>
		<stop  offset="0" style="stop-color:#232222"/>
		<stop  offset="0" style="stop-color:#111111"/>
		<stop  offset="0" style="stop-color:#000000"/>
	</radialGradient>
	<ellipse id="XMLID_34_" class="st4" cx="344.1" cy="218.7" rx="16.1" ry="25.1"/>
	
		<radialGradient id="XMLID_23_" cx="343.6268" cy="590.3382" r="6.2788" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0" style="stop-color:#FFFFFF"/>
		<stop  offset="0" style="stop-color:#FFFFFF"/>
	</radialGradient>
	<ellipse id="XMLID_21_" class="st5" cx="343.6" cy="201.9" rx="5.2" ry="7.2"/>
</g>
<g id="XMLID_201_">
	<g id="XMLID_174_">
		<g id="XMLID_74_">
			
				<radialGradient id="XMLID_24_" cx="-1203.0894" cy="456.0211" r="219.5592" fx="-999.1188" fy="537.2753" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
				<stop  offset="0" style="stop-color:#8F7623"/>
				<stop  offset="0.2287" style="stop-color:#8B7223"/>
				<stop  offset="0.4836" style="stop-color:#7D6923"/>
				<stop  offset="0.7501" style="stop-color:#695A22"/>
				<stop  offset="1" style="stop-color:#534A1E"/>
			</radialGradient>
			<path id="XMLID_139_" class="st6" d="M-1357.8,436c0,0-57.1-244.9,101.9-132.5c0,0,41.2-13,66.7,0.6c0,0,146.2,18.5,159.8,126.5
				c0,0-0.2,28.1-27.6,41.5c0,0,0,93-122.2,86.1c0,0,5.8,41.3-26.6,43.7c0,0-25.7,7.4-34.2-40.6
				C-1240,561.3-1399.8,586.6-1357.8,436z"/>
		</g>
		
			<radialGradient id="XMLID_30_" cx="-1209.9" cy="219.55" r="30.0378" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="0.3827" style="stop-color:#EFE1EE"/>
			<stop  offset="1" style="stop-color:#D1A4C7"/>
		</radialGradient>
		<polyline id="XMLID_73_" class="st7" points="-1214.4,543.8 -1223,550.9 -1234,556.9 -1240.8,557.3 -1239.7,566.9 -1235.6,584.1 
			-1227.2,595.2 -1217.9,600.2 -1208.9,601.8 -1197.3,600.5 -1189.3,596.2 -1183.2,584.9 -1179,571.9 -1180.1,558.8 -1180.6,555 
			-1205.4,543.5 		"/>
		<g id="XMLID_62_">
			<g id="XMLID_109_">
				<path id="XMLID_113_" d="M-1355.5,437c-5.3-22.6-8.4-46-9.6-69.1c-0.9-17.6-0.8-35.7,3.2-53c3.2-13.7,9.3-28.5,22.4-35.4
					c17-9,37.7-1.1,53.4,6.9c6.7,3.4,13.2,7.3,19.6,11.4c3.8,2.5,8.5,7.8,13.2,7c4.9-0.8,9.8-2.5,14.7-3.3c8.6-1.5,17.3-2.3,26-1.8
					c4.8,0.2,9.6,0.9,14.2,2.2c3.6,1,6.8,3.1,10.4,3.9c0.9,0.2,1.4,0.2,2.2,0.3c5.6,0.9,11.1,2,16.7,3.3c21.2,4.9,42,12.1,61.4,22.2
					c24,12.4,46.2,29.9,60.4,53.3c7.7,12.8,12.8,27,15.1,41.7c1.4,9.2-2.1,19-6.9,26.8s-11.8,13.6-19.9,17.8
					c-0.2,0.1-0.3,0.3-0.2,0.5c0,34.5-25.4,65.3-56.6,77.3c-20.5,7.9-42.9,9.4-64.6,8.2c-0.4,0-1.1,0-1,0.6
					c1.6,11.7-0.1,26.5-8.6,35.4c-7.1,7.4-21.9,11.3-30.9,4.7c-10.7-7.8-14.5-23.2-16.8-35.4c-0.3-1.4-2.8-2.4-4-2.2
					c-16.1,2.5-33.2,2.2-49.3-0.2c-29.1-4.3-57-18.3-67-47.8c-8.2-24.1-4.1-50.9,2.5-74.9c0.4-1.5-4.2-3.4-4.5-2.2
					c-10.4,37.7-12.7,83.7,22.4,109.3c22.4,16.3,51.8,20.7,78.9,20.1c6.8-0.2,13.7-0.5,20.5-1.6c-1.3-0.7-2.7-1.5-4-2.2
					c3.2,17.5,11.5,41.9,32.9,43.2c5,0.3,10.9-0.8,15.3-2.7c9.4-4,14.5-13.1,16.4-22.7c1.2-6.2,1.6-12.9,0.7-19.2
					c-0.3,0.2-0.7,0.4-1,0.6c41.4,2.2,87.8-6.8,110.7-45.1c5.9-9.8,9.8-20.8,11.6-32.1c0.4-2.5,0.1-6,0.9-8.4c0.6-1.6,0-0.8,2.5-2
					c5.9-2.9,11.1-7.9,15-13c5.4-7.1,8.8-15.6,9.8-24.4c1-8.3-2.2-17.7-4.8-25.5c-6.7-20.3-19.1-38-34.8-52.4
					c-27.1-24.8-62.6-39.9-97.9-48.8c-5.5-1.4-11-2.6-16.5-3.7c-2.8-0.5-5.8-0.6-8.5-1.4c-0.2,0-0.3,0-0.5-0.1
					c1.5,0.5-2-1.2-1.9-1.2c-1.4-0.6-2.9-1.2-4.3-1.6c-6.4-2.1-13.1-3.1-19.7-3.3c-11.8-0.5-23.7,1.1-35.1,3.9c-2,0.5-4.1,1-6.1,1.6
					c0.9,0.3,1.8,0.5,2.7,0.8c-28.5-20.1-84.8-52.7-106.2-6.4c-7.6,16.4-8.9,35.4-9,53.2c-0.1,18.6,1.7,37.1,4.5,55.5
					c1.5,10,3.2,20,5.5,29.9C-1359.7,436.8-1355.2,438.2-1355.5,437z"/>
			</g>
		</g>
		<g id="XMLID_59_">
			<g id="XMLID_103_">
				<path id="XMLID_107_" d="M-1222.2,475.2c-7.6,9.3-15.6,18.4-24,26.9c-5.8,5.9-11.9,10.5-16.1,17.7c-3.7,6.5-5.5,12.9-5.4,20.3
					c0.1,9.4,5.3,15.2,14.1,18c5.9,1.9,12.1,3.3,18,1.1c8.9-3.2,17.3-7.7,24.6-13.7c0.8-0.7-0.8-4.3,0-5c-6.1,5.1-13,9-20.4,12.1
					c-4.6,1.9-7.6,3.1-12.5,2.5c-9.1-1.1-20.8-4.3-23.3-14.5c-0.1-0.4-0.3-2.9-0.4-3c0.5,0.3-0.6,5,0.1,1.7c0.1-0.4,0.1-0.9,0.2-1.3
					c0.3-1.8,0.8-3.6,1.4-5.3c1.1-3.1,2.6-6.1,4.3-9c3.8-6.3,9.3-10.4,14.5-15.7c8.8-8.9,17.2-18.3,25-28
					C-1221.3,479.2-1223,476.2-1222.2,475.2L-1222.2,475.2z"/>
			</g>
		</g>
		<g id="XMLID_28_">
			<g id="XMLID_97_">
				<path id="XMLID_101_" d="M-1191.8,486c6.1,4,12,8.4,17.5,13.1c8.6,7.2,18.6,16,22.4,26.8c0.5,1.5,0.5,3.5,1.1,4.9
					c0,0,0.2-4.6,0-2.8c-0.1,0.6-0.1,1.3-0.1,1.9c-0.2,2.5-0.7,5-1.4,7.5c-1.7,6.1-5.3,11.7-11.3,14.3c-12.2,5.2-27.1-2.5-37.5-8.4
					c0.7,0.4-0.7,4.6,0,5c10.4,5.9,25.3,13.6,37.5,8.4c6.7-2.8,10.3-9.5,11.8-16.3c1-4.5,1.3-9.4,1-14c-0.5-10.2-9-18.9-16-25.6
					c-7.7-7.4-16.2-14.1-25.1-19.9C-1191,481.5-1192.5,485.5-1191.8,486L-1191.8,486z"/>
			</g>
		</g>
		<g id="XMLID_27_">
			<g id="XMLID_91_">
				<path id="XMLID_95_" d="M-1057,469.8c-6.7-27.4-25.1-54.3-48.1-70.3c-2.3-1.6-4.8-3.1-7.2-4.6c-0.9-0.5-3.3-1.3-3.9-2.2
					c-0.4-0.6-0.5-2-0.7-2.7c-1.2-4.3-2.6-8.6-4-12.9c-5-14.3-11.3-28.3-19.6-40.9c-10.4-15.8-24.8-30.2-44-34.1
					c0.3,0.1-0.4,4.9,0,5c32.8,6.7,51.4,41.9,62,70.6c1.9,5.1,3.6,10.2,5.1,15.4c0.3,1.2,0.5,2.6,1,3.6c0.9,1.9,2.1,2,4.1,3.2
					c17.8,10.2,31.9,25.8,42.1,43.5c5.6,9.7,10.6,20.4,13.3,31.4C-1057.4,473.3-1056.6,471.4-1057,469.8L-1057,469.8z"/>
			</g>
		</g>
		<g id="XMLID_26_">
			<g id="XMLID_85_">
				<path id="XMLID_89_" d="M-1357.8,438.7c0.7-5.6,5.6-11.3,8.9-15.6c5.5-7.1,11.9-13.5,18.5-19.6c3.4-3.2,6.5-4.7,7.7-9.1
					c6-21.8,15.3-43.7,29.2-61.5c9.8-12.5,22.5-23.1,38.4-26.3c0.4-0.1-0.3-4.9,0-5c-28.4,5.8-46,33.5-57,58.2
					c-4,9-7.4,18.3-10.1,27.7c-0.4,1.4-0.6,3.4-1.3,4.8c-1.1,2.1-4.5,4-6.3,5.6c-1.8,1.7-3.7,3.4-5.5,5.2c-3.6,3.5-7,7.1-10.3,10.9
					c-4.4,5.1-11.3,12.5-12.3,19.7C-1358,435.3-1357.5,437-1357.8,438.7L-1357.8,438.7z"/>
			</g>
		</g>
		
			<radialGradient id="XMLID_31_" cx="-1209.9257" cy="269.1407" r="27.6868" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1.273668e-002" style="stop-color:#FBFCFC"/>
			<stop  offset="0.1304" style="stop-color:#CDCED3"/>
			<stop  offset="0.2513" style="stop-color:#A4A3A8"/>
			<stop  offset="0.3727" style="stop-color:#838286"/>
			<stop  offset="0.4947" style="stop-color:#656569"/>
			<stop  offset="0.6177" style="stop-color:#4D4B4D"/>
			<stop  offset="0.7419" style="stop-color:#333131"/>
			<stop  offset="0.8683" style="stop-color:#171717"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</radialGradient>
		<path id="XMLID_25_" class="st8" d="M-1221.8,540.3c0,0,12.4,10.8,26.2-0.7l14.4-18.8c0,0,10.7-16.6-4.1-19.4l-49.5,3.4
			c0,0-15.1,7.8-3.1,19.4L-1221.8,540.3z"/>
		<g id="XMLID_15_">
			
				<radialGradient id="XMLID_32_" cx="-1265.3" cy="326.9" r="21.0858" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
				<stop  offset="0" style="stop-color:#FFFFFF"/>
				<stop  offset="0" style="stop-color:#FAFAFA"/>
				<stop  offset="0" style="stop-color:#D4D5DA"/>
				<stop  offset="0" style="stop-color:#B1B1B6"/>
				<stop  offset="0" style="stop-color:#949397"/>
				<stop  offset="0" style="stop-color:#7A797E"/>
				<stop  offset="0" style="stop-color:#636366"/>
				<stop  offset="0" style="stop-color:#4F4E50"/>
				<stop  offset="0" style="stop-color:#3E3C3C"/>
				<stop  offset="0" style="stop-color:#232222"/>
				<stop  offset="0" style="stop-color:#111111"/>
				<stop  offset="0" style="stop-color:#000000"/>
			</radialGradient>
			<ellipse id="XMLID_17_" class="st9" cx="-1265.3" cy="465.3" rx="16.1" ry="25.1"/>
			
				<radialGradient id="XMLID_35_" cx="-1265.8" cy="343.7663" r="6.2765" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
				<stop  offset="0" style="stop-color:#FFFFFF"/>
				<stop  offset="0" style="stop-color:#FFFFFF"/>
				<stop  offset="0" style="stop-color:#FFFFFF"/>
			</radialGradient>
			<ellipse id="XMLID_16_" class="st10" cx="-1265.8" cy="448.4" rx="5.2" ry="7.2"/>
		</g>
		<g id="XMLID_10_">
			
				<radialGradient id="XMLID_37_" cx="-1155.3" cy="326.8" r="21.1099" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
				<stop  offset="0" style="stop-color:#FFFFFF"/>
				<stop  offset="0" style="stop-color:#FAFAFA"/>
				<stop  offset="0" style="stop-color:#D4D5DA"/>
				<stop  offset="0" style="stop-color:#B1B1B6"/>
				<stop  offset="0" style="stop-color:#949397"/>
				<stop  offset="0" style="stop-color:#7A797E"/>
				<stop  offset="0" style="stop-color:#636366"/>
				<stop  offset="0" style="stop-color:#4F4E50"/>
				<stop  offset="0" style="stop-color:#3E3C3C"/>
				<stop  offset="0" style="stop-color:#232222"/>
				<stop  offset="0" style="stop-color:#111111"/>
				<stop  offset="0" style="stop-color:#000000"/>
			</radialGradient>
			<ellipse id="XMLID_14_" class="st11" cx="-1155.3" cy="465.4" rx="16.1" ry="25.1"/>
			
				<radialGradient id="XMLID_39_" cx="-1155.8" cy="343.6804" r="6.2764" gradientTransform="matrix(1 0 0 -1 0 792.2)" gradientUnits="userSpaceOnUse">
				<stop  offset="0" style="stop-color:#FFFFFF"/>
				<stop  offset="0" style="stop-color:#FFFFFF"/>
				<stop  offset="0" style="stop-color:#FFFFFF"/>
			</radialGradient>
			<ellipse id="XMLID_12_" class="st12" cx="-1155.8" cy="448.5" rx="5.2" ry="7.2"/>
		</g>
	</g>
	<rect id="XMLID_115_" x="-1408.8" y="627.7" class="st13" width="400" height="56.4"/>
	
		<text id="XMLID_108_" transform="matrix(0.6789 0 0 1 -1408.7715 665.2299)" style="font-family:'PerpetuaTitlingMT-Light'; font-size:52.2109px;">O s o   C o m p a n y</text>
</g>
<rect id="_x3C_Sector_x3E_" x="104" y="17" class="st13" width="383" height="358"/>
</svg>

                        </div>
                        <div id="main-panel-flash-msgs">
                            <?php echo $view->render('MauticCoreBundle:Notification:flashes.html.php'); ?>
                        </div>
                        <?php $view['slots']->output('_content'); ?>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-lg-4 col-lg-offset-4 text-center text-muted">
                <?php echo $view['translator']->trans('mautic.core.copyright', ['%date%' => date('Y')]); ?>
            </div>
        </div>
    </div>
</section>
<?php echo $view['security']->getAuthenticationContent(); ?>
</body>
</html>
