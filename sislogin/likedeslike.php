<?php
include('classes/likes.php');

$posts = new Likes();

$result = $posts->posts();

$id_user = $_SESSION['id_usuario'];

?>

<div class="container">
    <div class="row">

        <div class="col">

            <?php foreach ($result as $post) : ?>
                <div class="card text">
                    <div class="card-header">
                        <?php echo $post['titulo'] ?>
                    </div>
                    <div class="card-body">
                        <div class="text-left">
                            <p class="card-text">
                                <?php echo $post['descricao'] ?>
                            </p>
                        </div>


                    </div>


                    <div class="card-footer text-muted text-center">
                        <div class="row align-right">                            
                        </div>
                        <div class="row">                        
                            <!-- <button id="btnTry" onclick="myFunction()">Try it</button> -->
                            <a>
                                <div class="post-id"> <?php echo $post['id']; ?></div>
                            </a>
                            <span id="demo"></span>
                            <!-- <a href="#"><i class="fa fa-thumbs-up like-btn" aria-hidden="true" data-id="<?php echo $post['id']; ?>"></i></a>
                            <i class="fa fa-thumbs-down dislike-btn" aria-hidden="true" data-id="<?php echo $post['id']; ?>"></i> -->
                            
                        </form>
                        </div>
                    </div>

                </div>
                <br>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>

<br>

<script>
    $('a').on('click', function(){
        var post_id = $(this).find('.post-id').html();        
        document.getElementById("demo").innerHTML = post_id;        
    });
</script>

<!-- <script src="like.js"></script> -->

<!-- 
<script>

      /*   document.getElementById("likeBtn").addEventListener(
            "click",
            function(event) {
                if (event.target.value === "Like") {
                    event.target.value = "Liked";
                } else {
                    event.target.value = "Like";
                }
            },
            false
        );

        $('#likeBtn').on('click', function() {
            $('#likeBtn').toggleClass('isActive');
        }); */

</script> -->