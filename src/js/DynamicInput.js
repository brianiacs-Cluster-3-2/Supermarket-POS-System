

// $(document).ready(function () {
//     var html = '<tr><td scope="col"><input  type="text" class="form-control" name="pro_name" placeholder="Type Product Name" style="border-color:#f39c12"></td><td scope="col"><input  type="number" id="pur_price" class="form-control" name="pur_price" style="border-color:#f39c12"></td><td scope="col"><input  type="number" id="quantity" class="form-control" name="quantity" style="border-color:#f39c12"></td><td scope="col"><select class="form-control" name="unit" style="border-color:#f39c12; background-color:black"><option value="" >Pack</option><option value="" >Piece</option><option value="" >Weight</option></select></td><td scope="col"><input id="intborder"  value="" type="number" class="form-control" name="PerPack" placeholder="" ></td><td scope="col"><input  type="number" disabled id="total" class="form-control" name="total"   style="border-color:#f39c12; background-color: #2F2F2F;"></td><td><button id="reomve" name="reomve" class="btn btn-outline-primary"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>'; 

//     var max = 50;

//     var x =0;

    

//     $("#add").click(function(){
//         if (x < max){
//             $("#table_field").append(html);
//             x++;

//             if(html){
//                 $(document).ready(function(){
//                     //Get value on keyup function
//                     $("#pur_price, #quantity").keyup(function(){
                
//                         var total = 0;
//                         var x = Number($("#pur_price"+x).val())
//                         var y = Number($("#quantity"+x).val())
//                         var total = x * y;
                
//                         var tot = total.toFixed(2);

//                         if(y <= 0){
//                         $('#total'+x).val(x);
                            
//                         }else{
//                         $('#total'+x).val(tot);
//                         }
                
//                         if(total){
                
//                             var a = 0;
//                             a = a + total
//                             $('#aTot').val(a);
                
//                         }
                        
                
                        
//                     });
//                     });
//             }
            
//         }
//     });

//     $("#table_field").on('click','#reomve',function(){
//         $(this).closest('tr').remove();
//         x--;
//     });

    

// });
// // End



// // Multiplication without clicking

// $(document).ready(function(){
//     //Get value on keyup function
//     $("#pur_price-, #quantity-").keyup(function(){

//         var total = 0;
//         var x = Number($("#pur_price-").val())
//         var y = Number($("#quantity-").val())
//         var total = x * y;

//         // if(y <= 0){
//         // $('#total').val(x);
            
//         // }else{
//         // $('#total').val(total);
//         // }

//         if(total){

//             var a = 0;
//             a = a + total
//             $('#aTot').val(a);

//         }
        

        
//     });
//     });
//     // End