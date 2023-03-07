/*=====================
     range slider js
     ==========================*/
let maxPrice = document.getElementById('maxprice') != null ? document.getElementById('maxprice').value : 0;
let minprice = document.getElementById('minprice') != null ? document.getElementById('minprice').value : 0;

let maxSize = document.getElementById('maxsize') != null ? document.getElementById('maxsize').value : 0;
let minSize = document.getElementById('minsize') != null ? document.getElementById('minsize').value : 0;

maxPrice = maxPrice*1;
minprice = minprice*1;

maxSize = maxSize*1;
minSize = minSize*1;

createPriceRange(minprice, maxPrice);
createSizeRange(minSize, maxSize);

  //$( function() {
    function createPriceRange(min, max) {
      $( "#slider-range" ).slider({
          range: true,
               min: minprice,
               max: maxPrice,
               values: [ min, max ],
        slide: function( event, ui ) {
          $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
          $( "#price_option" ).val(ui.values[ 0 ] + "-" + ui.values[ 1 ] );
        }
      });
      $( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values", 1 ) );
      $( "#price_option" ).val($( "#slider-range" ).slider( "values", 0 ) + "-" + $( "#slider-range" ).slider( "values", 1 ) );
    }
      
  //});
  
  function updatePriceRange(min, max) {
    $( "#slider-range" ).slider("destroy");
    $( "#slider-range" ).slider({
        range: true,
             min: min,
             max: max,
             values: [ min, max ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "" + ui.values[ 0 ] + " - " + ui.values[ 1 ] );
        $( "#price_option" ).val(ui.values[ 0 ] + "-" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values", 1 ) );
    $( "#price_option" ).val($( "#slider-range" ).slider( "values", 0 ) + "-" + $( "#slider-range" ).slider( "values", 1 ) );
  }

  //$( function() {
    function createSizeRange(min, max) { 
      $( "#slider-range1" ).slider({
        range: true,
          min: minSize,
          max: maxSize,
          values: [ min, max ],
        slide: function( event, ui ) {
          $( "#amount1" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] + " sq ft"  );
          $( "#size_option" ).val( ui.values[ 0 ] + "-" + ui.values[ 1 ] );
        }
      });
      $( "#amount1" ).val( $( "#slider-range1" ).slider( "values", 0 ) +
        " - " + $( "#slider-range1" ).slider( "values", 1 ) + " sq ft" );
      $( "#size_option" ).val( $( "#slider-range1" ).slider( "values", 0 ) + "-" + $( "#slider-range1" ).slider( "values", 1 ) );
    }
     
  //});
