<?php
include('classes/likes.php');

$like = new Likes();

$result = $like->like();

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
                            <span>1</span>
                        </div>
                        <div class="row">
                            <i class="fa fa-thumbs-up" aria-hidden="true" data-id="<?php echo $post['id']; ?>"></i>
                            <p id="demo"></p>
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
    $(document).ready(function() {
        
        $('.like-btn').on('click', function(){
            var post_id = $($this).data('id');
            document.getElementById("demo").innerHTML = post_id;
        });

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

    });
</script>