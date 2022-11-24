
</main>



    
     <script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script>
        $(function(){
            
            $(document).on('click','.btn',function(){
                var name = $(this).html();
                $('.alert').hide();
                if(name=='Button One')
                $('.alert_one').show();
            if(name=='Button Two')
                $('.alert_two').show();
            if(name=='Button Three')
                $('.alert_three').show();

            });

            $(document).on('click','#submit_form',function(){
                var name = $('#formGroupName').val();
                var age = $('#formGroupAge').val();
                $('.alert_message').html("<div> You have entered name<b>["+name+"]</b> and age<b>["+age+"]</b></div>");
                $('.alert_one').show();
            });

            $(document).on('click','#submit_form2',function(){
                var name = $('#formGroupName').val();
                var age = $('#formGroupAge').val();
                $('.alert_message').html("<div> You have entered name<b>["+name+"]</b> and age<b>["+age+"]</b></div>");
                $('.alert_one').show();
            });
        });
    </script>
  </body>
</html>

