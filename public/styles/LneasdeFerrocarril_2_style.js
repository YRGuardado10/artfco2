var size = 0;
var placement = 'point';
function categories_LneasdeFerrocarril_2(feature, value, size, resolution, labelText,
                       labelFont, labelFill, bufferColor, bufferWidth,
                       placement) {
                switch(value.toString()) {case 'Estado de Baja California - Administradora de la Vía Corta Tijuana-Tecate':
                    return [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: 'rgba(158,179,255,1.0)', lineDash: null, lineCap: 'round', lineJoin: 'round', width: 2}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Ferrocarril del Istmo de Tehuantepec S.A. de C.V.':
                    return [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: 'rgba(156,106,47,1.0)', lineDash: null, lineCap: 'round', lineJoin: 'round', width: 2}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Ferrocarril Mexicano S.A. de C.V.':
                    return [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: 'rgba(0,77,168,1.0)', lineDash: null, lineCap: 'round', lineJoin: 'round', width: 2}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Ferrocarril y Terminal del Valle de México S.A. de C.V':
                    return [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: 'rgba(250,240,2,1.0)', lineDash: null, lineCap: 'round', lineJoin: 'round', width: 2}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Ferrosur S.A. de C.V.':
                    return [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: 'rgba(140,185,43,1.0)', lineDash: null, lineCap: 'round', lineJoin: 'round', width: 2}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Kansas City Southern de México S.A. de C.V.':
                    return [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: 'rgba(255,0,0,1.0)', lineDash: null, lineCap: 'round', lineJoin: 'round', width: 2}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;
case 'Línea Coahuila Durango S.A. de C.V.':
                    return [ new ol.style.Style({
        stroke: new ol.style.Stroke({color: 'rgba(251,129,54,1.0)', lineDash: null, lineCap: 'round', lineJoin: 'round', width: 2}),
        text: createTextStyle(feature, resolution, labelText, labelFont,
                              labelFill, placement, bufferColor,
                              bufferWidth)
    })];
                    break;}};

var style_LneasdeFerrocarril_2 = function(feature, resolution){
    var context = {
        feature: feature,
        variables: {}
    };
    var value = feature.get("EMPRESA");
    var labelText = "";
    size = 0;
    var labelFont = "10px, sans-serif";
    var labelFill = "#000000";
    var bufferColor = "";
    var bufferWidth = 0;
    var textAlign = "left";
    var offsetX = 8;
    var offsetY = 3;
    var placement = 'line';
    if ("" !== null) {
        labelText = String("");
    }
    
var style = categories_LneasdeFerrocarril_2(feature, value, size, resolution, labelText,
                          labelFont, labelFill, bufferColor,
                          bufferWidth, placement);

    return style;
};
