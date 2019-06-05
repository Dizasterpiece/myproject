
 $(document).ready(function(){  
      $('#brand').change(function(){  
           var brand_id = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{brandId:brand_id},
                dataType:"text",  
                success:function(data)
                {  
                     $('#model').html(data);  
                }  
           });  
      });  
 });  
 