@include('testing.modules.head')
  <div class="container">
    <h1 class="mt-5">Testing Demo - IFrame</h1>
    <div class="bg-white p-3 my-2">
    <div class="bg-light p-3 my-3">
      <iframe src="/buttons" title="description" width="100%" height="300px"></iframe>
    </div>
    <button id="btn_four" class="btn btn-info">Button Four</button>
    <div class="alert alert_four alert-info mt-5" role="alert" style="display: none;">
      <h4 class="alert-heading">Well done!</h4>
      <p id="alert_message" class=" alert_message mb-0 pb-0">You have clicked <b>Button Four</b></p>
    </div>
    </div>
  </div>
@include('testing.modules.body')