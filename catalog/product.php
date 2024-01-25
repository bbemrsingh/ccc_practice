
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Product Information</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div >
        <form action="sql/functions.php" method="post" style="padding-left: 250px; padding-right: 250px;">
        
        <div class ="row">  
            <div class="col-3 form-group">
                <label for="product_name" class="form-label">Product Name:</label>
                <input type="text" id="product_name" name="product[product_name]" class="form-control" required><br>
                
            </div>
            <div class="col-3 form-group">
                <label for="sku" class="form-label">SKU:</label>
                <input type="text" id="sku" name="product[sku]" class="form-control"  required>
                
            </div>     
        </div>


        <div class="row">
            <div class="col-3 form-group">
                <label for="product_id" class="form-label">Product ID</label>
                <input type="text" id="product_id" name="product_id" class="form-control" required>
            </div>
            </div class="col-3 form-group">
                <div class="form-group .form-check-inline">    
                <label class="form-label">Product Type:</label>
                
                <input type="radio" id="simple" name="product[product_type]" value="Simple" checked>
                <label class="form-label" for="simple" class="form-label">Simple</label>

                <input type="radio" id="bundle" name="product[product_type]" value="Bundle">
                <label  class="form-label" for="bundle" >Bundle</label>
                
            </div>
    


        <div class="form-group">
            <label for="category" class="form-label">Category:</label>
            <select id="category" name="product[category]" class=" col-6 form-control" required>
                <option value="Bar_Game_Room">Bar & Game Room</option>
                <option value="Bedroom">Bedroom</option>
                <option value="Decor">Decor</option>
                <option value="Dining_Kitchen">Dining & Kitchen</option>
                <option value="Lighting">Lighting</option>
                <option value="Living_Room">Living Room</option>
                <option value="Mattresses">Mattresses</option>
                <option value="Office">Office</option>
                <option value="Outdoor">Outdoor</option>
            </select>
        </div >
        
        <div class="row">
            <div class="col-3 form-group">
                <label for="manufacturer_cost" class="form-label">Manufacturer Cost:</label>
                <input type="text" id="manufacturer_cost" name="product[manufacturer_cost]" class="form-control" required><br>    
            </div>
            <div class=" col-3 form-group">
                <label for="shipping_cost" class="form-label">Shipping Cost:</label>
                <input type="text" id="shipping_cost" name="product[shipping_cost]" class="form-control" required><br>
            </div>
        </div>
        
        <div class="row">   
            <div class=" col-3 form-group">
                <label for="total_cost" class="form-label">Total Cost:</label>
                <input type="text" id="total_cost" name="product[total_cost]" class="form-control" required><br>
            </div>
            
            <div class=" col-3 form-group">
                <label for="price" class="form-label">Price:</label>
                <input type="text" id="price" name="product[price]" class="form-control" required><br>
            </div>
        </div>
        
        

        <div class="form-group">    
            <label class="form-label">Status:</label>
            <select id="status" name="product[status]" required>
                <option value="Enabled">Enabled</option>
                <option value="Disabled">Disabled</option>
            </select>
        </div>
        
        <div class=" row form-group">
            <div class=" col-3 form-group">
            <label for="created_at" class="form-label">Created At:</label>
            <input type="date" id="created_at" name="product[created_at]" class="form-control" required>
            </div>
            <div class=" col-3 form-group">
            <label for="updated_at" class="form-label">Updated At:</label>
            <input type="date" id="updated_at" name="product[updated_at]" class="form-control" required>
            </div>
        </div>        
            <button type="submit" name="Submit" class="btn btn-primary" data-toggle="button"  >Submit</button>
        
        </form>
    </div>
 
</body>
</html>
   
