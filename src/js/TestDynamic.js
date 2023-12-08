$(document).ready(function() {
  var i = 0;
  
  $("#quantity-" + i).change(function() {
    upd_art(i)
  });
  $("#pur_price-" + i).change(function() {
    upd_art(i)
  });

  var html = ''; 

  $('#add').click(function() {
    i++;
    $('#table_field').append('<tr id="row' + i + '" >  <input hidden type="text" class="form-control" id="supidd" name="supidd"placeholder="Supplier ID" style="border-color:#f39c12"><input hidden type="text" id="GetProID" name="GetProID" placeholder="Another Input Field"><td><select style="background-color: #0D0C11; color:white; border-color:#f39c12"id="pro_name" name="pro_name" class="form-control"><option selected value="Select Product" style="background-color: white; color:black">Select Product</option></select></td> <td><input type="number" id="pur_price-0" class="form-control" name="pur_price"style="border-color:#f39c12"></td><td><input type="number" id="quantity-0" class="form-control" name="quantity"style="border-color:#f39c12"></td><td><select class="form-control" name="unit"style="border-color:#f39c12; background-color:black"><option value="Pack">Pack</option><option value="Piece">Piece</option><option value="Weight">Weight</option></select></td> <td><input id="intborder" value="" type="number" class="form-control"name="PerPack" placeholder=""></td>  <td><input type="number" id="total-0" class="form-control" name="ItemTotal"disabled value=""style="border-color:#f39c12; background-color: #2F2F2F;"></td><td><button id="' + i + '" name="reomve" class="btn btn-danger btn_remove"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>');

    $("#quantity-" + i).change(function() {
      upd_art(i)
    });
    $("#pur_price-" + i).change(function() {
      upd_art(i)
    });

   

  });


  if ('<tr id="row' + i + '" ><td><select style="background-color: #0D0C11; color:white; border-color:#f39c12"id="pro_name" name="pro_name" class="form-control"><option selected value="Select Product" style="background-color: white; color:black">Select Product</option></select></td> <td><input type="number" id="pur_price-0" class="form-control" name="pur_price"style="border-color:#f39c12"></td><td><input type="number" id="quantity-0" class="form-control" name="quantity"style="border-color:#f39c12"></td><td><select class="form-control" name="unit"style="border-color:#f39c12; background-color:black"><option value="Pack">Pack</option><option value="Piece">Piece</option><option value="Weight">Weight</option></select></td> <td><input id="intborder" value="" type="number" class="form-control"name="PerPack" placeholder=""></td>  <td><input type="number" id="total-0" class="form-control" name="ItemTotal"disabled value=""style="border-color:#f39c12; background-color: #2F2F2F;"></td><td><button id="' + i + '" name="reomve" class="btn btn-danger btn_remove"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>')
  {
    
  function upd_art(i) {
    var a = 0;
    var qty = Number($("#quantity-"+i).val())
    var price = Number($("#pur_price-"+i).val())
    var totNumber = (qty * price);
    var tot = totNumber.toFixed(2);
    $('#total-' + i).val(tot);              
   
  }
}



    
    

  



  


  $(document).on('click', '.btn_remove', function() {
    var button_id = $(this).attr("id");
    $('#row' + button_id + '').remove();
  });

  // $('#save').click(function() {
  //   alert($('#add_name').serialize()); //alerts all values           
  //   $.ajax({
  //     url: "Purchase.php",
  //     method: "POST",
  //     data: $('#add_name').serialize(),
  //     success: function(data) {
  //       $('#add_name')[0].reset();
  //     }
  //   });
  // });
              
                  
            



  //  setInterval(upd_art, 1000);
});


