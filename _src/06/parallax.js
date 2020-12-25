jQuery(document).ready(function($) {
    $('#parallax').parallax({
          'elements': [
            {
              'selector': '#parallax_bottom',
              'properties': {
                'x': {
                  'background-position-x': {
                    'initial': 0,
                    'multiplier': 0                    
                  }
                }
              }
            },
            {
              'selector': '#parallax_middle',
              'properties': {
                'x': {
                  'background-position-x': {
                    'initial': 0,
                    'multiplier': 0.1,
                    'invert': true
                  }
                }
              }
            },
            {
              'selector': '#parallax_top',
              'properties': {
                'x': {
                  'background-position-x': {
                    'initial': 0,
                    'multiplier': 0.2
                  }
                }
              }
            }
          ]
        });
    });