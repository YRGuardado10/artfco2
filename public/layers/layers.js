var wms_layers = [];


        var lyr_GoogleSatellite_0 = new ol.layer.Tile({
            'title': 'Google Satellite',
            'type': 'base',
            'opacity': 1.000000,
            
            
            source: new ol.source.XYZ({
    attributions: ' &middot; <a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
                url: 'https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}'
            })
        });
var format_LimitesEstatales_1 = new ol.format.GeoJSON();
var features_LimitesEstatales_1 = format_LimitesEstatales_1.readFeatures(json_LimitesEstatales_1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_LimitesEstatales_1 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_LimitesEstatales_1.addFeatures(features_LimitesEstatales_1);
var lyr_LimitesEstatales_1 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_LimitesEstatales_1, 
                style: style_LimitesEstatales_1,
                interactive: false,
                title: '<img src="styles/legend/LimitesEstatales_1.png" /> Limites Estatales'
            });
var format_LneasdeFerrocarril_2 = new ol.format.GeoJSON();
var features_LneasdeFerrocarril_2 = format_LneasdeFerrocarril_2.readFeatures(json_LneasdeFerrocarril_2, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_LneasdeFerrocarril_2 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_LneasdeFerrocarril_2.addFeatures(features_LneasdeFerrocarril_2);
var lyr_LneasdeFerrocarril_2 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_LneasdeFerrocarril_2, 
                style: style_LneasdeFerrocarril_2,
                interactive: false,
    title: 'Líneas de Ferrocarril<br />\
    <img src="styles/legend/LneasdeFerrocarril_2_0.png" /> Estado de Baja California - Administradora de la Vía Corta Tijuana-Tecate<br />\
    <img src="styles/legend/LneasdeFerrocarril_2_1.png" /> Ferrocarril del Istmo de Tehuantepec S.A. de C.V.<br />\
    <img src="styles/legend/LneasdeFerrocarril_2_2.png" /> Ferrocarril Mexicano S.A. de C.V.<br />\
    <img src="styles/legend/LneasdeFerrocarril_2_3.png" /> Ferrocarril y Terminal del Valle de México S.A. de C.V<br />\
    <img src="styles/legend/LneasdeFerrocarril_2_4.png" /> Ferrosur S.A. de C.V.<br />\
    <img src="styles/legend/LneasdeFerrocarril_2_5.png" /> Kansas City Southern de México S.A. de C.V.<br />\
    <img src="styles/legend/LneasdeFerrocarril_2_6.png" /> Línea Coahuila Durango S.A. de C.V.<br />'
        });
var format_PuntosdelaCapa_3 = new ol.format.GeoJSON();
var features_PuntosdelaCapa_3 = format_PuntosdelaCapa_3.readFeatures(json_PuntosdelaCapa_3, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_PuntosdelaCapa_3 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_PuntosdelaCapa_3.addFeatures(features_PuntosdelaCapa_3);
var lyr_PuntosdelaCapa_3 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_PuntosdelaCapa_3, 
                style: style_PuntosdelaCapa_3,
                interactive: true,
    title: 'Puntos de la Capa<br />\
    <img src="styles/legend/PuntosdelaCapa_3_0.png" /> Centro de inspección<br />\
    <img src="styles/legend/PuntosdelaCapa_3_1.png" /> Taller de paileria<br />\
    <img src="styles/legend/PuntosdelaCapa_3_2.png" /> Taller mecánico<br />\
    <img src="styles/legend/PuntosdelaCapa_3_3.png" /> Vía de reparación<br />'
        });

lyr_GoogleSatellite_0.setVisible(true);lyr_LimitesEstatales_1.setVisible(true);lyr_LneasdeFerrocarril_2.setVisible(true);lyr_PuntosdelaCapa_3.setVisible(true);
var layersList = [lyr_GoogleSatellite_0,lyr_LimitesEstatales_1,lyr_LneasdeFerrocarril_2,lyr_PuntosdelaCapa_3];
lyr_LimitesEstatales_1.set('fieldAliases', {'CVE_ENT': 'CVE_ENT', 'NOM_ENT': 'NOM_ENT', 'CVE_CAP': 'CVE_CAP', 'NOM_CAP': 'NOM_CAP', 'COV_': 'COV_', 'COV_ID': 'COV_ID', 'AREA': 'AREA', 'PERIMETER': 'PERIMETER', });
lyr_LneasdeFerrocarril_2.set('fieldAliases', {'LINEA': 'LINEA', 'ESTATUS': 'ESTATUS', 'VIA': 'VIA', 'CONDICION': 'CONDICION', 'EMPRESA': 'EMPRESA', });
lyr_PuntosdelaCapa_3.set('fieldAliases', {'CONCESIÓN': 'CONCESIÓN', 'TIPO DE TA': 'TIPO DE TA', 'X': 'X', 'Y': 'Y', 'T-Talleres': 'T-Talleres', 'Imagen': 'Imagen', 'Imagen 2': 'Imagen 2', });
lyr_LimitesEstatales_1.set('fieldImages', {'CVE_ENT': 'TextEdit', 'NOM_ENT': 'TextEdit', 'CVE_CAP': 'TextEdit', 'NOM_CAP': 'TextEdit', 'COV_': 'TextEdit', 'COV_ID': 'TextEdit', 'AREA': 'TextEdit', 'PERIMETER': 'TextEdit', });
lyr_LneasdeFerrocarril_2.set('fieldImages', {'LINEA': 'TextEdit', 'ESTATUS': 'TextEdit', 'VIA': 'TextEdit', 'CONDICION': 'TextEdit', 'EMPRESA': 'TextEdit', });
lyr_PuntosdelaCapa_3.set('fieldImages', {'CONCESIÓN': 'TextEdit', 'TIPO DE TA': 'TextEdit', 'X': 'TextEdit', 'Y': 'TextEdit', 'T-Talleres': 'TextEdit', 'Imagen': 'ExternalResource', 'Imagen 2': 'ExternalResource', });
lyr_LimitesEstatales_1.set('fieldLabels', {'CVE_ENT': 'no label', 'NOM_ENT': 'no label', 'CVE_CAP': 'no label', 'NOM_CAP': 'no label', 'COV_': 'no label', 'COV_ID': 'no label', 'AREA': 'no label', 'PERIMETER': 'no label', });
lyr_LneasdeFerrocarril_2.set('fieldLabels', {'LINEA': 'no label', 'ESTATUS': 'no label', 'VIA': 'no label', 'CONDICION': 'no label', 'EMPRESA': 'header label', });
lyr_PuntosdelaCapa_3.set('fieldLabels', {'CONCESIÓN': 'inline label', 'TIPO DE TA': 'header label', 'X': 'inline label', 'Y': 'inline label', 'T-Talleres': 'inline label', 'Imagen': 'inline label', 'Imagen 2': 'inline label', });
lyr_PuntosdelaCapa_3.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});