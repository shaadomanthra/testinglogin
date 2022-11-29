@include('testing.modules.head')
  <div class="container">
    <h1 class="mt-5">Testing Demo - Popup Window</h1>

    <div class="bg-white p-3 my-2">
      
   

    <h4>Popup windows</h4>
      <a href="buttons"  id="popup2" class="btn btn-danger"
      onclick="window.open('buttons', 
                           'newwindow', 
                           'width=500,height=450'); 
                return false;"
   >Open popup 1</a>
   <a href="/form"  id="popup2" class="btn btn-primary"
      onclick="window.open('/form', 
                           'newwindow', 
                           'width=500,height=450'); 
                return false;"
   >Open popup 2</a>
    </div>
  </div>
@include('testing.modules.body')