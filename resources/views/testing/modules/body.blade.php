
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
            if(name=='Button Four')
                $('.alert_four').show();



            });

            $(document).on('click','#btn_alert1',function(){
              alert("You have clicked on alert");
            });
            $(document).on('click','#btn_alert2',function(){
                
                  alertFunction();
            });

            function alertFunction() {
              let text = "Press a button!\nEither OK or Cancel.";
              if (confirm(text) == true) {
                text = "You pressed OK!";
              } else {
                text = "You canceled!";
              }
              document.getElementById("demo").innerHTML = text;
            }

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

