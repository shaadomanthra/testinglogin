<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buttons - Testing</title>
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
    <h1 class="mt-5">Testing Demo</h1>
    <p class="lead">This is a sample page to show case clicking buttons using the ID locatros.</p>
    <p>Do you want to visit Google  website? Then click here <a href="https://google.com" id="clickme">Click Me</a></p>
    <button id="btn_one" class="btn btn-primary mr-3">Button One</button> 
    <button id="btn_two" class="btn btn-success mr-3">Button Two</button>
    <button id="btn_three" class="btn btn-danger">Button Three</button>

    <div class="alert alert_one alert-primary mt-5" role="alert" style="display: none;">
      <h4 class="alert-heading">Well done!</h4>
      <p id="alert_message" class=" alert_message mb-0 pb-0">You have clicked <b>Button One</b></p>
    </div>
    <div class="alert alert_two alert-success mt-5" role="alert" style="display: none;">
      <h4 class="alert-heading">Well done!</h4>
      <p id="alert_message" class=" alert_message mb-0 pb-0">You have clicked <b>Button Two</b></p>
    </div>
    <div class="alert alert_three alert-danger mt-5" role="alert" style="display: none;">
      <h4 class="alert-heading">Well done!</h4>
      <p id="alert_message" class=" alert_message mb-0 pb-0">You have clicked <b>Button Three</b></p>
    </div>
  </div>
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
        });
    </script>
  </body>
</html>

