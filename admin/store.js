localStorage.totalsum;
localStorage.blogplane;


$(document).ready(function() {

// $(".word-count").hide();

$(".offcheckbox").on('click', function() {

$( ".number.qty_input" ).trigger( "blur" );

})
 
  $(".number.qty_input").on('change keydown keyup keypress touchstart blur', function() {


    
     var sum = 0;

     var valueObj =  new Object();

    //iterate through each textboxes and add the values

    $(".number.qty_input").each(function(i) {


        

         // var serviceid = '#' + service + 'words';
         //      $(serviceid).show();
         //  });

        index = (parseInt(i)+1);

        valueObj[i] = {value:this.value,checked:$('input#pre-box'+index).is(':checked')}

         var price = $(this).data("price")
      
      
      if (this.value.length && !isNaN(this.value) && !isNaN(price)){

          if($('input#pre-box'+index).is(':checked')){
                price = $(this).attr("afterprice")            
          }

          
          sum += parseFloat(this.value) * parseFloat(price);
        }
    });



      localStorage.blogplane = JSON.stringify(valueObj);
    //.toFixed() method will round off the final sum to 2 decimal places

    $("#the_price_v_m").html(sum.toFixed(2));

      localStorage.totalsum = sum.toFixed(2);

      });

      valuesJson = JSON.parse(localStorage.blogplane);

      $.each(valuesJson, function(i, valJson) {

        index = (parseInt(i)+1);       

        console.log(index);

      $('#blogplane'+index).val(valJson.value);

      if(valJson.checked){

        $('#pre-box'+index).attr('checked','true');
      }

      $(".remove-button").on("click", function(event) {

        $('#the_price_v_m').remove();
             
    });


      });
      $("#the_price_v_m").html(localStorage.totalsum);

       

});

