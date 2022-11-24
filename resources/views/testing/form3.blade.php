@include('testing.modules.head')
  <div class="container">
    <h1 class="mt-5">Testing Demo -  Form 2</h1>
    
    <div class="mb-3 bg-light border p-3">
      <div class="my-3">
        <h4 class="mb-2">Checkboxes</h4>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox1" value="option1"> one
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox2" value="option2"> two
        </label>
        <label class="checkbox-inline">
          <input type="checkbox" id="inlineCheckbox3" value="option3"> three
        </label>
      </div>
      <div class="my-3">
        <h4 class="mb-2">Radio buttons</h4>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="apple"> Apple
        </label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="mango"> Mango
        </label>
        <label class="radio-inline">
          <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="orange"> Orange
        </label>
      </div>
       <div class="my-3">
        <h4 class="mb-2">Dropdown</h4>
        <select class="form-control">
          <option value="cse">Computer Science Engineering</option>
          <option value="ece">Electronics and Communication Engineering</option>
          <option value="civil">Civil Engineering</option>
          <option value="mech">Mechanical Engineering</option>
        </select>
      </div>
      
    </div>
   
  </div>
@include('testing.modules.body')