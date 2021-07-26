<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css" >
    <link rel="stylesheet" href="css\defult.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link rel="stylesheet" href="css\all.min.css">
    
    <title>Admin</title>
  </head>
  <body>
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <!--side menu-->
            <!--main content area-->
            <div class="col-md-10  display-table-cell valign-top box ">
                     <!--header navpar-->
                   <!--header navpar-->
               <?php
                            include('nav.php');

                ?>

                  <!--table to show contaccts data-->
                    <table class="table   tabledata ">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">البريد الاكترونى</th>
                                <th scope="col">الاراء</th>
                                
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                
                              </tr>
                            </tbody>
                    </table>
                    
                     
                    <!--footer-->  
                    <div class="row footer" id="admin-footer">
                        
                            <div class="col-md-10 pull-left">CopyRight &copy; 2019</div>
                            <div class="col-md-2 pull-right">Admin System</div>
                        
                    </div>
            </div>

            <?php
            include('slide.php');
            
            ?>
            
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="js\bootstrap.min.js"  ></script>
    <script src="js\jquery.js"  ></script>
    <script src="js\default.js"  ></script>
    </body>
</html>