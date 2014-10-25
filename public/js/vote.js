$(document).ready(function(){
    $('#vote').click(function(e){
        e.preventDefault();
        var $url = '/vote';
        var $data = {
        'user_id' : $(this).data('user'),
        'topic_id' : $(this).data('topic')
        };
        $.ajax({
          type:"POST",
          data: $data,
          url:$url,
          success:function(){alert('success');},
          error:function(){return location.href='/login'}
        });
    });

});
