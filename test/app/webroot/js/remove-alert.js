 $(document).ready(function(){
            setTimeout(function() {
               $('.alert').fadeOut(800);
            }, 3000);
            $('.alert').click(function(){
                $(this).fadeOut(800);
            });
  });