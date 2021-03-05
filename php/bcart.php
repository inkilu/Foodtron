<?php
session_start();
$dbname="foodtron_db";
$dbusername="root";
$dbpassword="";
$dbhost="127.0.0.1";
$conn= mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['cshake'])){

  $records = mysqli_query($conn,"SELECT * FROM drinks WHERE id=200");

  while ($records1 = mysqli_fetch_assoc($records)){

    
      /* $cartId=  $records1['id']; */
      $cartId = mt_rand();
      $cartName= $records1['name'];         /*  INSERT ID = 100 */
      $cartPrice=  $records1['price'];

    
  $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
  $result= mysqli_query($conn,$query);
  
}
  
     }

     if (isset($_POST['lassi'])){

      $records = mysqli_query($conn,"SELECT * FROM drinks WHERE id=201");
    
      while ($records1 = mysqli_fetch_assoc($records)){
    
        
          /* $cartId=  $records1['id']; */
          $cartId = mt_rand();
          $cartName= $records1['name'];         /*  INSERT ID = 101 */
          $cartPrice=  $records1['price'];
    
        
      $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
      $result= mysqli_query($conn,$query);
     
    }
      
         }

         if (isset($_POST['blassi'])){

          $records = mysqli_query($conn,"SELECT * FROM drinks WHERE id=202");
        
          while ($records1 = mysqli_fetch_assoc($records)){
        
            
              /* $cartId=  $records1['id']; */
              $cartId = mt_rand();
              $cartName= $records1['name'];         /*  INSERT ID = 102 */
              $cartPrice=  $records1['price'];
        
            
          $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
          $result= mysqli_query($conn,$query);
         
        }
          
             }


             if (isset($_POST['cblo'])){

              $records = mysqli_query($conn,"SELECT * FROM drinks WHERE id=203");
            
              while ($records1 = mysqli_fetch_assoc($records)){
            
                
                  /* $cartId=  $records1['id']; */
                  $cartId = mt_rand();
                  $cartName= $records1['name'];         /*  INSERT ID = 103 */
                  $cartPrice=  $records1['price'];
            
                
              $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
              $result= mysqli_query($conn,$query);
             
            }
              
                 }

                 if (isset($_POST['bluel'])){

                  $records = mysqli_query($conn,"SELECT * FROM drinks WHERE id=204");
                
                  while ($records1 = mysqli_fetch_assoc($records)){
                
                    
                      /* $cartId=  $records1['id']; */
                      $cartId = mt_rand();
                      $cartName= $records1['name'];         /*  INSERT ID = 103 */
                      $cartPrice=  $records1['price'];
                
                    
                  $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
                  $result= mysqli_query($conn,$query);
                 
                }
                  
                     }

                     if (isset($_POST['litchi'])){

                      $records = mysqli_query($conn,"SELECT * FROM drinks WHERE id=205");
                    
                      while ($records1 = mysqli_fetch_assoc($records)){
                    
                        
                          /* $cartId=  $records1['id']; */
                          $cartId = mt_rand();
                          $cartName= $records1['name'];         /*  INSERT ID = 103 */
                          $cartPrice=  $records1['price'];
                    
                        
                      $query = "INSERT INTO cart VALUES ('$cartId','$cartName','$cartPrice')";
                      $result= mysqli_query($conn,$query);
                     
                    }
                      
                         }

                         if (isset($_POST['redl'])){

                          $records = mysqli_query($conn,"SELECT * FROM drinks WHERE id=206");
                        
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
header("Location: ../menu-list2.php");
?>