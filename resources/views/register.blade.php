@extends("includes.layout")
@section("content")
<div class="wrapper">
      <div class="section section-contact-us text-center">
      <div class="container">     
          <!-- <div class="row"> -->

        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="title">Registration</h2>
        <p class="description">Create Profile</p>
          
      @if(!empty($errors->first()))
          <div class="row col-lg-12 ml-auto mr-auto">
              <div class="alert alert-danger ml-auto mr-auto">
                  <span>{{ $errors->first() }}</span>
              </div>
          </div>
      @endif

<!-- form head end -->


        <div class="row">
   <!-- LEFT COLON -->
            <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Full Name</div>
                  <input type="text" name="fullname" class="form-control" value="{{old('fullname') }}" placeholder="Full Name..." required autofocus>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Phone</div>
                  <input type="text" name="phone" value="{{old('phone') }}" class="form-control" placeholder="Phone...">
                </div>
              </div>

              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">Country</div>
                    <input type="text" name="country" value="{{old('country') }}" class="form-control" placeholder="Country...">
                  </div>
              </div>  

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Address</div>
                  <input type="text" class="form-control" value="{{old('address') }}" name="address" placeholder="Address...">
                </div>
              </div>  

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Gender</div>
                  <select class="form-control" value="{{old('gender') }}" name="gender" id="">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                   </select>
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Quote</div>
                  <input type="text" class="form-control" value="{{old('quote') }}" name="quote" placeholder="Favourite Quote...">
                </div>
              </div>

               <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Password</div>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
              </div>

              
              <br>

            </div>
  <!-- LEFT COLON BEGIN -->
  <!-- RIGHT COLON BEGIN-->
            
            <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Nick Name</div>
                  <input type="text" name="nickname" value="{{ old('nickname') }}" class="form-control" placeholder="Nick Name...">
                </div>
              </div>


              <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">Email</div>
                    <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email...">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">State</div>
                      <select class="form-control" value="{{ old('state') }}" name="state" id="">
                        <option value="Abia">Abia</option>
                        <option value="Adamawa">Adamawa</option>
                        <option value="Akwa Ibom">Akwa Ibom</option>
                        <option value="Anambra">Anambra</option>
                        <option value="Bauchi">Bauchi</option>
                        <option value="Bayelsa">Bayelsa</option>
                        <option value="Benue">Benue</option>
                        <option value="Borno">Borno</option>
                        <option value="Cross River">Cross River</option>
                        <option value="Delta">Delta</option>
                        <option value="Ebonyi">Ebonyi</option>
                        <option value="Edo">Edo</option>
                        <option value="Ekiti">Ekiti</option>
                        <option value="Enugu">Enugu</option>
                        <option value="Gombe">Gombe</option>
                        <option value="Imo">Imo</option>
                        <option value="Jigawa">Jigawa</option>
                        <option value="Kaduna">Kaduna</option>
                        <option value="Kano">Kano</option>
                        <option value="Katsina">Katsina</option>
                        <option value="Kebbi">Kebbi</option>
                        <option value="Kogi">Kogi</option>
                        <option value="Kwara">Kwara</option>
                        <option value="Lagos">Lagos</option>
                        <option value="Nassarawa">Nassarawa</option>
                        <option value="Niger">Niger</option>
                        <option value="Ogun">Ogun</option>
                        <option value="Ondo">Ondo</option>
                        <option value="Osun">Osun</option>
                        <option value="Oyo">Oyo</option>
                        <option value="Plateau">Plateau</option>
                        <option value="Rivers">Rivers</option>
                        <option value="Sokoto">Sokoto</option>
                        <option value="Taraba">Taraba</option>
                        <option value="Yobe">Yobe</option>
                        <option value="Zamfara">Zamfara</option>
                        <option value="F.C.T">F.C.T</option>
                      </select>
                    </div>
                  </div>       


              <div class="form-group" >
                <div class="input-group">
                  <div class="input-group-addon">Hobbies</div>
                  <input type="text" class="form-control" value="{{old('hobbies') }}" name="hobbies" placeholder="Hobbies...">
                </div>
              </div>  
                
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Marital Status</div>
                  <select class="form-control" value="{{old('status') }}" name="status" id="">
                    <option value="Single">Single</option>
                    <option value="Engaged">Engaged</option>
                    <option value="Married">Married</option>
                    <option value="It's Complicated">It's Complicated</option>
                  </select>
                </div>
              </div>              

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">D.O.B</div>
                  <input type="date" name="DOB" value="{{old('DOB') }}" class="form-control " placeholder="Date of Birth">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">Confirm Password</div>
                  <input type="password" class="form-control form-control-danger" name="confirm password" placeholder="Confirm Password">
                </div>
              </div>
          </div>
  <!-- RIGTH COLON END -->

  <!-- SUBMIT BUTTON -->
          
            <div class="col-lg-12 text-center col-md-12 ml-auto mr-auto">
              <div class="textarea-container">
                <textarea class="form-control" name="biography" rows="2" value="{{ old('biography') }}" cols="80" placeholder="Brief Biography..."></textarea>
              </div>
            </div>
              
            <div class="col-lg-3 text-center col-md-3 ml-auto mr-auto mt-2">
              <div class="send-button">
                <input type="submit" class="btn btn-primary btn-round btn-block btn-lg" value="Save">
              </div>
            </div>
        </div>
     </form>
      </div>
    @stop