<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form - PacketPrep Testing</title>
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" >

      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      /* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

.container {
  width: auto;
  max-width: 680px;
  padding: 0 15px;
}
    </style>
  </head>
  <body class="d-flex flex-column h-100">
    
<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Testing Demo -  Form</h1>
    <p class="lead">This is a sample page to show case interaction using form elements using the name locators.</p>
 
    
    <div class="mb-3 bg-light border p-3">
      <label for="formGroupExampleInput" class="form-label">Enter your full name</label>
      <input type="text" class="form-control" id="formGroupName" name="fullname" placeholder="Enter your name">
      <label for="formGroupExampleInput" class="form-label">Enter your age</label>
      <input type="text" class="form-control" id="formGroupAge" name="age" placeholder="Enter your age">

      <button class="btn btn-danger my-3" id="submit" >Submit</button>
    </div>

    <div class="alert alert_one alert-primary mt-5" role="alert" style="display: none;">
      <h4 class="alert-heading">Well done!</h4>
      <p id="alert_message" class=" alert_message mb-0 pb-0">You have clicked <b>Button One</b></p>
    </div>
    
  </div>
</main>



    
     <script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script>
        $(function(){
            
            $(document).on('click','.btn',function(){
                var name = $('#formGroupName').val();
                var age = $('#formGroupAge').val();
                $('.alert_message').html("<div> You have entered name<b>["+name+"]</b> and age<b>["+age+"]</b></div>");
                $('.alert_one').show();


            });
        });
    </script>
  </body>
</html>

