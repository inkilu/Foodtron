<?php
session_start();
$dbname="foodtron_db";
$dbusername="root";
$dbpassword="";
$dbhost="127.0.0.1";
$conn= mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['dosa'])){

  $records = mysqli_query($conn,"SELECT * FROM items WHERE id=100");

  while ($records1 = mysqli_fetch_assoc($records)){

    
      /* $cartId=  $records1['id']; */
      $cartId = mt_rand();
      $cartName= $records1['name'];         /*  INSERT ID = 100 */
      $cartPrice=  $records1['price'];

    
  $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
  $result= mysqli_query($conn,$query);
  
}
  
     }

     if (isset($_POST['chicken'])){

      $records = mysqli_query($conn,"SELECT * FROM items WHERE id=101");
    
      while ($records1 = mysqli_fetch_assoc($records)){
    
        
          /* $cartId=  $records1['id']; */
          $cartId = mt_rand();
          $cartName= $records1['name'];         /*  INSERT ID = 101 */
          $cartPrice=  $records1['price'];
    
        
      $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
      $result= mysqli_query($conn,$query);
     
    }
      
         }

         if (isset($_POST['biryani'])){

          $records = mysqli_query($conn,"SELECT * FROM items WHERE id=102");
        
          while ($records1 = mysqli_fetch_assoc($records)){
        
            
              /* $cartId=  $records1['id']; */
              $cartId = mt_rand();
              $cartName= $records1['name'];         /*  INSERT ID = 102 */
              $cartPrice=  $records1['price'];
        
            
          $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
          $result= mysqli_query($conn,$query);
         
        }
          
             }


             if (isset($_POST['fried'])){

              $records = mysqli_query($conn,"SELECT * FROM items WHERE id=103");
            
              while ($records1 = mysqli_fetch_assoc($records)){
            
                
                  /* $cartId=  $records1['id']; */
                  $cartId = mt_rand();
                  $cartName= $records1['name'];         /*  INSERT ID = 103 */
                  $cartPrice=  $records1['price'];
            
                
              $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
              $result= mysqli_query($conn,$query);
             
            }
              
                 }

                 if (isset($_POST['beef'])){

                  $records = mysqli_query($conn,"SELECT * FROM items WHERE id=104");
                
                  while ($records1 = mysqli_fetch_assoc($records)){
                
                    
                      /* $cartId=  $records1['id']; */
                      $cartId = mt_rand();
                      $cartName= $records1['name'];         /*  INSERT ID = 103 */
                      $cartPrice=  $records1['price'];
                
                    
                  $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
                  $result= mysqli_query($conn,$query);
                 
                }
                  
                     }

                     if (isset($_POST['burger'])){

                      $records = mysqli_query($conn,"SELECT * FROM items WHERE id=105");
                    
                      while ($records1 = mysqli_fetch_assoc($records)){
                    
                        
                          /* $cartId=  $records1['id']; */
                          $cartId = mt_rand();
                          $cartName= $records1['name'];         /*  INSERT ID = 103 */
                          $cartPrice=  $records1['price'];
                    
                        
                      $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
                      $result= mysqli_query($conn,$query);
                     
                    }
                      
                         }

                         if (isset($_POST['salad'])){

                          $records = mysqli_query($conn,"SELECT * FROM items WHERE id=106");
                        
                          while ($records1 = mysqli_fetch_assoc($records)){
                        
                            
                              /* $cartId=  $records1['id']; */
                              $cartId = mt_rand();
                              $cartName= $records1['name'];         /*  INSERT ID = 103 */
                              $cartPrice=  $records1['price'];
                        
                            
                          $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
                          $result= mysqli_query($conn,$query);
                         
                        }
                          
                             }
    

}
header("Location: ../menu-list.php");
?>