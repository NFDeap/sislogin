$(document).ready(function() {


    $('.like-btn').on('click', function(){
        var post_id =  document.getElementById('campo').value /*  $($this).data('id'); */
        alert(post_id);
        break;
        
        $clicled_btn = $($this);

        if($clicled_btn.hasClass('fa-thumbs-up')) {
            action = 'like';            
            id_user = '<?php $id_user; ?>';
        } else if ($clicled_btn.hasClass('fa-thumbs-up')) {
            action = 'unlike';
            id_user = '<?php $id_user; ?>';
        }

        $.ajax({
            url: 'likedeslike.php',
            type: 'post',
            data: {
                'action': action,
                'post_id': post_id,
                'id_user': id_user
            },
            success: function(data){
                res = JSON.parse(data);
                
                if (action == 'like') {
                    $clicked_btn.removeClass('fa-thumbs-o-up');
                    $clicked_btn.addClass('fa-thumbs-up');                        
                } else if (action == 'unlike') {
                    $clicked_btn.removeClass('fa-thumbs-up');
                    $clicked_btn.addClass('fa-thumbs-o-up');
                }
            }
        })
    })
});
