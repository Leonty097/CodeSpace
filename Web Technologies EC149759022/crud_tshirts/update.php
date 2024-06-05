<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include ( 'includes/nav.php' ) ;

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{

  require ('connect_db.php'); 

  $errors = array();


    if ( empty( $_POST[ 'item_id' ] ) )
    { $errors[] = 'Update item ID.' ; }
    else
    { $id = mysqli_real_escape_string( $connection, trim( $_POST[ 'item_id' ] ) ) ; }
    
 
    if ( empty( $_POST[ 'item_name' ] ) )
    { $errors[] = 'Update item name.' ; }
    else
    { $n = mysqli_real_escape_string( $connection, trim( $_POST[ 'item_name' ] ) ) ; }
  

    if (empty( $_POST[ 'item_desc' ] ) )
    { $errors[] = 'Update item description.' ; }
    else
    { $d = mysqli_real_escape_string( $connection, trim( $_POST[ 'item_desc' ] ) ) ; }
  

    if (empty( $_POST[ 'item_img' ] ) )
    { $errors[] = 'Update image address.' ; }
    else
    { $img = mysqli_real_escape_string( $connection, trim( $_POST[ 'item_img' ] ) ) ; }

    if (empty( $_POST[ 'item_price' ] ) )
    { $errors[] = 'Update item price.' ; }
    else
    { $p = mysqli_real_escape_string( $connection, trim( $_POST[ 'item_price' ] ) ) ; }
    if ( empty( $errors ) ) 
  {
    $q = "UPDATE products SET item_id='$id',item_name='$n', item_desc='$d', item_img='$img', item_price='$p'  WHERE item_id='$id'";
    $r = mysqli_query ( $connection, $q ) ;
    if ($r)
    {
       header("Location: read.php");
    } else {
        echo "Error updating record: " . $connection->error;
    }
   
     mysqli_close( $connection );
        exit();
    } 
  }
  ?>


    <div class="container">
    <h2 class="text-center">Update Item</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="item_id" value="<?php echo $id; ?>">
        
        <div class="mb-3">
            <label for="item_id" class="form-label">Item ID:</label>
            <input type="text" class="form-control" id="item_id" name="item_id" required>
        </div>

        <div class="mb-3">
            <label for="item_name" class="form-label">Item Name:</label>
            <input type="text" class="form-control" id="item_name" name="item_name" required>
        </div>
        
        <div class="mb-3">
            <label for="item_desc" class="form-label">Description:</label>
            <textarea class="form-control" id="item_desc" name="item_desc" rows="3" required></textarea>
        </div>
        
        <div class="mb-3">
            <label for="item_img" class="form-label">Image:</label>
            <input type="text" class="form-control" id="item_img" name="item_img" required>
        </div>
        
        <div class="mb-3">
            <label for="item_price" class="form-label">Price:</label>
            <input type="number" class="form-control" id="item_price" name="item_price" step="0.01" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update Item</button>
    </form>
</div>

<?php

include ('includes/footer.php' ) ;
?>