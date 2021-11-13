<?php

    $conection = mysqli_connect("localhost", "root", "", "webChat");

    if(!$conection){
        echo"No se pudo establecer la conexion con el servidor";
    }

    function formatDate($date){
        return date('g:i a', strtotime($date));
    }
?>

<?php include_once 'includes/templates/headerNotMain.php'?>

        <section class="containerBack">
            <div class="containerBlog">
                <pc> Welcome to the Realty Official Chat Room: <br> </pc>
                <img class="blog" src="img/blog.jpg" alt="Blog Image" width="400" height="400">

                <div class="containerChat">
                    <div class="chat">
                        <div class="dataBorder">
                        <?php
                            $sql = "SELECT * FROM chat ORDER BY id DESC";
                            $execute = mysqli_query($conection,$sql);
                            $cont = 1;
                            while($res = mysqli_fetch_array($execute)){
                        ?>
                            <div class="dataChat">
                                <pc2> <?php echo $res['name'] ?>: </pc2> 
                                <pc3> <?php echo $res['message'] ?> </pc3> 
                                <pc4> <?php echo formatDate($res['date']) ?> </pc4> 
                            </div>
                        <?php
                                $cont = $cont + 1;
                            } 

                        ?>
                        </div>

                        <div class="textBox">
                            <form action="sendChat.php" id="blog" method="post">
                                <pc5>Select a name:</pc5>
                                <input type="text" name="name" placeholder="Insert a name" required>
                                <br>
                                <pc5>Write your comment:</pc5>
                                <textarea name="message" placeholder="Insert your message" required></textarea>
                                <input type="submit" name="send" value="Send">
                                <img class="chatGif" src="img/chatGif.gif" alt="Chat gif" width="300" height="250">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php include_once 'includes/templates/footer.php'?>