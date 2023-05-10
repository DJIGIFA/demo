<?php 
session_start();
    if (isset($_SESSION['connecter'])){
        header('location:index.php');
    }

    include 'header.php' ;
?>


        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Produits</a></li>
                    <li class="breadcrumb-item active">Login</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        




        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                  <!--  <div class="col-lg-6">    
                        <div class="register-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>First Name</label>
                                    <input class="form-control" type="text" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name"</label>
                                    <input class="form-control" type="text" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" placeholder="E-mail">
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text" placeholder="Mobile No">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="text" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <label>Retype Password</label>
                                    <input class="form-control" type="text" placeholder="Password">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-12">
                        <form action="connection.php" method="post">
                            <div class="login-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Numero</label>
                                    <input class="form-control" type="text" placeholder="Numero" name="numero">
                                </div>
                                <div class="col-md-12">
                                    <label>Password</label>
                                    <input class="form-control" type="text" placeholder="Password" name="password">
                                </div>
                                
                                
                                <div class="col-md-12">

                                    <input class="btn" value="se connecter" type="submit" name="connecter"/>                               
                              </div>
                            </div>
                        </div>
                        </form>
                        <?php 
           if (isset($_SESSION['erreur'])) {
               ?>
                <div class="container">
                    <div class="alert alert-danger text-center">
                        mot de passe ou numero incorrect
                    </div>
                </div>
                <?php 

                unset($_SESSION['erreur']) ;
           }
                         ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login End -->
        
<?php include 'footer.php' ?>