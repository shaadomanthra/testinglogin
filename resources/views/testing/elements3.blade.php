@include('testing.modules.head')
  <div class="container">
    <h1 class="mt-5">Testing Demo - IFrame</h1>
    <div class="bg-white p-3 my-2">
    <h4>Iframes</h4>
    <div class="bg-light p-3 my-3">
      <iframe src="/buttons" title="description" width="100%" height="250px"></iframe>
    </div>
    <div class="embed-responsive embed-responsive-16by9 my-3">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen width="100%" height="300px"></iframe>
    </div>
    </div>
  </div>
@include('testing.modules.body')