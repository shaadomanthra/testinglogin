@include('testing.modules.head')
  <div class="container">
    <h1 class="mt-5">Testing Demo -  Form</h1>
    <p class="lead">This is a sample page to show case interaction using form elements using the name locators.</p>
 
    
    <div class="mb-3 bg-light border p-3">
      <label for="formGroupExampleInput" class="form-label">Enter your full name</label>
      <input type="text" class="form-control" id="formGroupName" name="fullname" placeholder="Enter your name">
      <label for="formGroupExampleInput" class="form-label">Enter your age</label>
      <input type="text" class="form-control" id="formGroupAge" name="age" placeholder="Enter your age">

      <button class="btn btn-danger my-3" id="submit_form" >Submit</button>
    </div>

    <div class="alert alert_one alert-primary mt-5" role="alert" style="display: none;">
      <h4 class="alert-heading">Well done!</h4>
      <p id="alert_message" class=" alert_message mb-0 pb-0">You have clicked <b>Button One</b></p>
    </div>
    
  </div>

@include('testing.modules.body')



