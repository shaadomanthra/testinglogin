@include('testing.modules.head')
  <div class="container">
    <h1 class="mt-5">Testing Demo - Buttons</h1>
    <p class="lead">This is a sample page to show case clicking buttons using the ID locators.</p>
    <p>
      Do you want to visit Google  website? Then click here 
      <a href="https://google.com" id="clickme">Click Me</a>
    </p>
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
@include('testing.modules.body')