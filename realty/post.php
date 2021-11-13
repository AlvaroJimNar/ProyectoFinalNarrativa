<?php

    $conection = mysqli_connect("localhost", "root", "", "webChat");

    if(!$conection){
        echo"No se pudo establecer la conexion con el servidor";
    }
?>
<?php include('includes/templates/headerNotMain.php')?>
<?php
      
    if(isset($_POST['submit'])){
        try{
        
            $value = $_POST['submit'];
            
            $sql = "SELECT * FROM POST WHERE id = $value";
            
            $proper = mysqli_query($conection,$sql);
            $consulta = $proper->fetch_assoc();
            
            }catch(Exception $e){
                $error = $e->getMessage();
        }   
    }
?>

<section class="contentPost">
            <div class="contentImage">
                
  
                <pci> <?php echo $consulta['titulo'] ?> <br> </pci>
                <img class="location" src="img/location.png" alt="Location Icon" width="15" height="25">
                <pcii> <?php echo $consulta['direccion'] ?> <br> </pcii>
                <div class="barLeft"></div>
                <pciii> For sale: <br></pciii>
                <pciv><?php echo $consulta['precio'] ?> $<br></pciv>

                <!-- <img class="house1" src="img/?>" alt="Property Image" width="390" height="250"> -->
                <img class="house1" src="img/<?php echo $consulta['imagen']?>" alt="Property Image" width="390" height="250">


                <div class="effectCard">
                    <div class="barUp"></div>

                    

                    <pcv> <img class="bed" src="img/bed.png" alt="Bed Icon" width="15" height="25"> Bedrooms: <?php echo $consulta['Numbedrooms'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img class="bathroom" src="img/bathroom.png" alt="Bathroom Icon" width="15" height="25">
                        Bathrooms: <?php echo $consulta['Numbathrooms'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img class="garage" src="img/garage.png" alt="Garage Icon" width="15" height="25"> 
                        Garage: <?php echo $consulta['Numgarage'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Area:<?php echo $consulta['area'] ?> m<sup>2<br></pcv>

                    <pcb>Description</pcb>
                    <pcp> Enchanting three bedroom, three bath home with spacious one bedroom, one bath cabana, in-laws quarters. 
                    Charming living <br> area features fireplace and fabulous art deco details. Formal dining room. 
                    Remodeled kitchen with granite countertops, white <br> cabinetry and stainless appliances. 
                    Lovely master bedroom has updated bath, beautiful view of the pool. 
                    Guest bedrooms have <br> walk-in, cedar closets. Delightful backyard; majestic oaks surround the free form pool and expansive patio, wet bar and grill.<br> 
                    </pcp>
   <!-- 
                    <pcb2> Additional Details <br> </pcb2>
                 
                    <pcl> <img class="bullet" src="img/bullet.png" alt="Bullet Icon" width="25" height="20">
                    BEDROOM FEATURES: Main Floor Master Bedroom, Walk-In Closet <br><br>             
                    <img class="bullet" src="img/bullet.png" alt="Bullet Icon" width="25" height="20">
                    DINING AREA: Breakfast Counter/Bar, Living/Dining Combo<br><br>
                    <img class="bullet" src="img/bullet.png" alt="Bullet Icon" width="25" height="20">
                    DOORS & WINDOWS: Bay Window<br><br>
                    <img class="bullet" src="img/bullet.png" alt="Bullet Icon" width="25" height="20">
                    ENTRY LOCATION: Mid Level <br><br>             
                    <img class="bullet" src="img/bullet.png" alt="Bullet Icon" width="25" height="20">
                    EXTERIOR CONSTRUCTION: Wood <br><br>             
                    <img class="bullet" src="img/bullet.png" alt="Bullet Icon" width="25" height="20">
                    FIREPLACE FUEL: Pellet Stove <br><br>
                    <img class="bullet" src="img/bullet.png" alt="Bullet Icon" width="25" height="20">             
                    FIREPLACE LOCATION: Living Room <br><br>             
                    <img class="bullet" src="img/bullet.png" alt="Bullet Icon" width="25" height="20">
                    FLOORS: Raised Foundation, Vinyl Tile, Wall-to-Wall Carpet, Wood</pcl>
-->
                    <div class="barCenter"></div>
                    <img class="male" src="img/male.jpg" alt="Male Profile" width="200" height="200"> 

                    <pc6> Agent info <br> </pc6>
                    <pc7> Name: Nathan James <br><br> Email: nathan@gmail.com <br><br> Telephone: 1-234-567-8989<br></pc7>
                    
                    <img class="female" src="img/female.jpg" alt="Female Profile" width="200" height="200"> 

                    <pc8> Agent info <br> </pc8>
                    <pc9> Name: Alice Brian <br><br> Email: alice@gmail.com <br><br> Telephone: 1-234-456-7891</pc9>

                </div>


        </section>

 
        <?php include_once 'includes/templates/footer.php'?>