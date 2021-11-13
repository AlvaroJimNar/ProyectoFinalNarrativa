<?php
$conection = mysqli_connect("localhost", "root", "", "webChat");

if(!$conection){
    echo"No se pudo establecer la conexion con el servidor";
}
?>

<?php include_once 'includes/templates/headerNotMain.php';?>

    <!-- PAGE BODY -->
    <div class="container-marketing">
        <div class="content">
            <div class="card">
                    <div class="icon"><i class="fa fa-map-marker"></i></div>
                        <p class="title">Our address</p>
                        <p class="text">Merrick Way, Miami, FL 33134, USA</p>
                    </div>
                <!-- end card -->
                <!-- card -->
                <div class="card">
                    <div class="icon"><i class="far fa-envelope" ></i></div>
                        <p class="title">Our email</p>
                        <p class="text">realtyhousing@gmail.com</p>
                    </div>
                <!-- end card -->
                <!-- card -->
                    <div class="card">
                        <div class="icon"><i class="fas fa-phone-alt"></i></div>
                            <p class="title">Our phone</p>
                            <p class="text">0-123-456-789</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="container new-section">
    <g2>Registration</g2>
    <?php
        if(isset($_POST['send'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone= $_POST['phone'];
            $message = $_POST['message'];

            try{
                $last_id = $conection->insert_id;
                $sql = ("INSERT INTO contact (id,name, email, phone_number,message) VALUES ($last_id, '$name', '$email', '$phone', '$message')");
                if( mysqli_query($conection,$sql)){
                echo "<g3> {$name}'s message will be checked by our workers. </g3>";
                }else{
                    echo "Error: " . $sql . "" . mysqli_error($conection);
                }
            
            }
            catch(Exception $e){
                $error = $e->getMessage();
            }
        }
    ?>
    </section>

<?php include_once 'includes/templates/footer.php' ?>