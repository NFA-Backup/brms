/**
 * @file
 * Creates the line and point styles for the map layer, using values configured
 * in the Geolayer Layer type taxonomy.
 */
function getLayerStyle(feature, resolution, style, layer_style) {
  'use strict';

  var line_dash;
  var line_cap;
  var line_width;

  if (layer_style.geometry_type === 'point') {
    var point_image;
    var fill = new style.Fill({
      color: 'rgba(0,0,0,0)',
    });
    var stroke = new style.Stroke({
        color: layer_style.color ? layer_style.color : 'orange',
        width: 3
      });
    switch (layer_style.point_shape) {
      case 'square':
        point_image = new style.RegularShape({
          fill: fill,
          stroke: stroke,
          points: 4,
          radius: 6,
          angle: Math.PI / 4,
        });
        break;

      case 'triangle':
        point_image = new style.RegularShape({
          fill: fill,
          stroke: stroke,
          points: 3,
          radius: 6,
          angle: 0,
        });
        break;

      case 'star':
        point_image = new style.RegularShape({
          fill: fill,
          stroke: stroke,
          points: 5,
          radius: 6,
          radius2: 4,
          angle: 0,
        });
        break;

      case 'cross':
        point_image = new style.RegularShape({
          fill: fill,
          stroke: stroke,
          points: 4,
          radius: 6,
          radius2: 0,
          angle: 0,
        });
        break;

      default:
        // The default point shape is a circle.
        point_image = new style.Circle({
          radius: 5,
          fill: new style.Fill({
            color: 'rgba(0,0,0,0)',
          }),
          stroke: stroke,
        });
        break;
    }
    return new style.Style({
      image: point_image,
    });

  }
  else {
    switch (layer_style.line_style) {
      case 'dotted':
        line_dash = [2, 10];
        line_cap = 'round';
        line_width = layer_style.line_width;
        break;

      case 'dashed':
        line_dash = [10, 10];
        line_cap = 'square';
        line_width = layer_style.line_width;
        break;

      default:
        line_dash = null;
        line_cap = null;
        line_width = 2;
        break;
    }
    return new style.Style({
      stroke: new style.Stroke({
        color: layer_style.color ? layer_style.color : 'orange',
        width: line_width,
        line_dash: line_dash,
        line_cap: line_cap,
      }),
      // Must define fill so clicks can be detected. Add a transparent fill.
      fill: new style.Fill({
        color: 'rgba(0,0,0,0)',
      }),
    });
  }
}