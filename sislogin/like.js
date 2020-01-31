$(document).ready(function(){

    $('a').on('click', function(){
        var post_id = $(this).find('.post-id').html();        
        /* document.getElementById("demo").innerHTML = post_id; */
        $clicked_btn = post_id;
        
        if($clicked_btn.hasClass('fa-thumbs-o-up')) {
            action = 'like';
            id_user = '<?php echo $id_user; ?>';
        } else if ($clicked_btn.hasClass('fa-thumbs-up')) {
            action = 'dislike';
            id_user = '<?php echo $id_user; ?>';
        }

        $.ajax({
            url: 'likedeslike.php',
            type: 'post',
            data: {
                'action': action,
                'post_id': post_id,
                'user_id': id_user
            },
            success: function(data){
                res = JSON.parse(data);
                if(action = 'like') {
                    $clicked_btn.removeClass('fa-thumbs-o-up');
                    $clicked_btn.addClass('fa-thumbs-up');
                } else if (action == 'unlike'){
                    $clicked_btn.removeClass('fa-thumbs-up');
                    $clicked_btn.addClass('fa-thumbs-o-up');
                }
            }
        })

    });

});