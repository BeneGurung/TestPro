<!DOCTYPE html>
<html>
  <title>Login Form</title>
@include('common.css')
<body>
<section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Registeration Form
              </h2>
            </div>
            <form action="register_new_user" method="POST">
              @csrf
              <div>
                <label  for="full name">Full Name:</label >
                <input type="text" placeholder="Full Name" name="full_name" />
              </div>
              <div>
                <label for="email">Email:</label >
                <input type="email" placeholder="Email" name="email" />
              </div>
              <div>
              <label for="contact_no">Phone Number:</label >
                <input type="text" placeholder="Phone number" name="contact_no" />
              </div>
              <div>
              <label for="password">Password:</label >
                <input type="text" placeholder="password" name="password" />
              </div>
              <div class="dropdown">
                @csrf
              <label >Select Role:</label >
              <select name="role" id="role">
                <option value="">select a role</option>
                @foreach ($response_data as $id=> $data)
                <option value="{{$data->id}}">{{$data->name}}</option>
                @endforeach
              </select>
              </div>
              <div class="d-flex">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</body>
</html>
