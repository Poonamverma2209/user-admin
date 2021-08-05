<!DOCTYPE html>
<html lang="en">
@include('admin.head')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<body>
<!-- page-wrapper Start-->
<div class="page-wrapper">
@include('admin.header')
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
    @include('admin.sidebar')
        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Users List</h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                            <div class="col-lg-3  pull-right">
                                <h6>No. of user - {{$count}}</h6>
                            </div>
                            <div class="col-lg-3  pull-right">
                                 <button type="button" data-toggle="modal" data-target="#myModal"><i data-feather="user"></i>Add User</button>
                            </div>
                        </div> 
                        </div>
                         <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="col-xl-12">
         <div class = "validation-form">
          <form class="needs-validation add-product-form" action="{{route('user_list')}}" id=myForm method="POST" novalidate >
          {{ csrf_field() }}
          <div class="form">
          <div class="form-group row">
            <div class="col-xl-6">
            <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>   
            <div class="first-name-msg"></div>
            </div>
            <div class="col-xl-6">
             <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
             <div class="email-msg"></div>
           </div>
           </div>
           <div class="form-group row">
            <div class="col-xl-6 ">
            <input class="form-control" name="password" id="password" type="password" placeholder="Password" required>   
            <div class="password-msg"></div>
            </div>
            <div class="col-xl-6">
             <input class="form-control" name="cpassword" id="cpassword" type="password" placeholder="Confirm Password" required>
             <div class="cpassword-msg"></div>
            </div>
           </div>
           </div>
           </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="allowed-submit" disabled="desabled" id="submit-btn">Add User</button>
           </div>
           </form>
        </div>
    </div>
      </div>
    </div>
  </div>
                        <!-- <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index"><i data-feather="home"></i></a></li>
                            </ol>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Users</h5>
                            </div>
                               <div class="card-body">
                                <!-- <div class="btn-popup pull-right">
                                    <a href="add_category" class="btn btn-primary">Add Category</a> 
                                 </div>  -->
                               </div>
                                <div class="container">
                                <div class="table-responsive">          
                                <table class="table">
                                  <thead>
                                    <tr>
                                      <th>Email Address</th>
                                      <th>Name</th>
                                      <th>Created On</th>
                                      <th>Role</th>
                                      <th>Status</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>   
                                  @foreach($users as $user)
                                  <tr>
                                  <td>{{$user->email}}</td>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->created_at}}</td>
                                  <td>{{$user->role_type->description}}</td>
                                  <td>@if ($user->status)
                                    <i data-feather="bookmark" style="font-size:30px;color:green"></i>
                                  @else
                                    <i data-feather="bookmark" style="font-size:30px;color:rgb(214, 208, 208)"></i>
                                  @endif
                                    </td>
                                  <td><a href="#" class="btn btn-primary"><i data-feather="edit"></i></a>
                                    <a href="#" class="btn btn-primary"><i data-feather="trash-2"></i></a></td>
                                  </tr>
                                  @endforeach
                                  </tbody>
                                </table>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
</div>
</div>
</div>
        @include('admin.footer')


    </div>

</div>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Apr 2021 07:16:45 GMT -->
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="validate.js"></script>
<script>
    $(document).ready(function () {
  
  //validation for Name
  $('#name').on('input', function () {
     var name = $(this).val();
     var validName = /^[a-zA-Z ]*$/;
     if (name.length == 0) {
        $('.first-name-msg').addClass('invalid-msg').text("Name is required");
        $(this).addClass('invalid-input').removeClass('valid-input');
        
     }
     else if (!validName.test(name)) {
        $('.first-name-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed');
        $(this).addClass('invalid-input').removeClass('valid-input');
        
     }
     else {
        $('.first-name-msg').empty();
        $(this).addClass('valid-input').removeClass('invalid-input');
     }
    });
  // valiadtion for Email
  $('#email').on('input', function () {
     var emailAddress = $(this).val();
     var validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
     if (emailAddress.length == 0) {
       $('.email-msg').addClass('invalid-msg').text('Email is required');
       $(this).addClass('invalid-input').removeClass('valid-input');
     }
     else if (!validEmail.test(emailAddress)) {
       $('.email-msg').addClass('invalid-msg').text('Invalid Email Address');
       $(this).addClass('invalid-input').removeClass('valid-input');
     }
     else {
       $('.email-msg').empty();
       $(this).addClass('valid-input').removeClass('invalid-input');
    }
    });
  // valiadtion for Password
  $('#password').on('input', function () {
     var password = $(this).val();
     var cpassword = $('#cpassword').val();
     var uppercasePassword = /(?=.*?[A-Z])/;
     var lowercasePassword = /(?=.*?[a-z])/;
     var digitPassword = /(?=.*?[0-9])/;
     var spacesPassword = /^$|\s+/;
     var symbolPassword = /(?=.*?[#?!@$%^&*-])/;
     var minEightPassword = /.{8,}/;
  if (password.length == 0) {
     $('.password-msg').addClass('invalid-msg').text('Password is required');
     $(this).addClass('invalid-input').removeClass('valid-input');
  }
  else if (!uppercasePassword.test(password)) {
     $('.password-msg').addClass('invalid-msg').text('At least one Uppercase');
     $(this).addClass('invalid-input').removeClass('valid-input');
  }
  else if (!lowercasePassword.test(password)) {
     $('.password-msg').addClass('invalid-msg').text('At least one Lowercase');
     $(this).addClass('invalid-input').removeClass('valid-input');
  }
  else if (!digitPassword.test(password)) {
     $('.password-msg').addClass('invalid-msg').text('At least one digit');
     $(this).addClass('invalid-input').removeClass('valid-input');
  } else if (!symbolPassword.test(password)) {
     $('.password-msg').addClass('invalid-msg').text('At least one special character');
     $(this).addClass('invalid-input').removeClass('valid-input');
  }
  else if (spacesPassword.test(password)) {
     $('.password-msg').addClass('invalid-msg').text('Whitespaces are not allowed');
     $(this).addClass('invalid-input').removeClass('valid-input');
  }
  else if (!minEightPassword.test(password)) {
     $('.password-msg').addClass('invalid-msg').text('Minimum length 8');
     $(this).addClass('invalid-input').removeClass('valid-input');
  }
  else if(cpassword.length>0) {
      if(password!=cpassword){
     $('.cpassword-msg').addClass('invalid-msg').text('must be matched');
     $('#cpassword').addClass('invalid-input').removeClass('valid-input');
     }
     else
     {
      $('.cpassword-msg').empty();
      $('#cpassword').addClass('valid-input').removeClass('invalid-input');
     }
     $('#password').addClass('valid-input').removeClass('invalid-input');
     $('.password-msg').empty();
  } 
  else {
     $('.password-msg').empty();
     $(this).addClass('valid-input').removeClass('invalid-input');
  }
  });
  // valiadtion for Confirm Password
  $('#cpassword').on('input', function () {
     var password = $('#password').val();
     var cpassword = $(this).val();
  if (cpassword.length == 0) {
     $('.cpassword-msg').addClass('invalid-msg').text('Confirm password is required');
     $(this).addClass('invalid-input').removeClass('valid-input');
  }
  else if(cpassword != password) {
     $('.cpassword-msg').addClass('invalid-msg').text('must be matched');
     $(this).addClass('invalid-input').removeClass('valid-input');
  } 
  else {
     $('.cpassword-msg').empty();
     $(this).addClass('valid-input').removeClass('invalid-input');
      }
  });
  // validation to submit the form
  $('input').on('input',function(e){
     if($('#myForm').find('.valid-input').length==4){
         $('#submit-btn').removeClass('allowed-submit');
         $('#submit-btn').removeAttr('disabled');
     }
    else{
         e.preventDefault();
         
         $('#submit-btn').attr('disabled','disabled')
        // alert("hello");
        }
  });
  });
    </script>

