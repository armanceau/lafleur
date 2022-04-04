
<?php 
require 'connection.php';
include ("header/header.html"); 
?>
<div class="container-fluid">
    <div class="row ">
        <div class="col-4 text-center">
            <div class="photo">
                <img src="img/exemple.jpg">
            </div>
            <div class="previ">
            <img src="img/exemple.jpg">
            <img src="img/exemple.jpg">
            <img src="img/exemple.jpg">
            <img src="img/exemple.jpg">
            </div>
        </div>
        <div class="col-5 text-center description">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quasi veniam ratione error quia, molestias explicabo praesentium doloremque, voluptatibus suscipit blanditiis, quod accusamus. Maiores, beatae modi. Labore eos perspiciatis cupiditate.</p>
        </div>
        <div class="col-3">
        <button type="button" class="btn btn-success btn-lg btn-block" style="border-radius: 20px;height:80px;width:400px;"><h1>15€</h1></button>

        </div>
    </div>
    
</div>
    

    <?php 
    include "footer.html";
    ?>


