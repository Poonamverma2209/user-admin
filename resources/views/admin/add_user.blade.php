<!DOCTYPE html>
<html lang="en">

@include('admin.head');

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
@include('admin.header')
    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        @include('admin.sidebar')

        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-end p-0"><i class="me-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status"> 28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status"> 2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status"> 2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image blur-up lazyloaded" src="../assets/images/dashboard/designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Hileri Jecno</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Add Faculty
                                </h3>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            @if($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Opps Something went wrong</strong></p>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li style="display:block;">{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Category</h5>
                            </div>
                          @isset($lists)

                         <?php if($lists){
                              $address = 'edit_category';
                          }
                          else {
                              $address = 'add_category';
                          } ?>
                          
                            <form action="<?php echo url($address) ?>" method="POST" class="needs-validation add-product-form" novalidate>
                            @csrf
                            <input type="hidden" name=id value="{{$lists->id}}">
                            <div class="card-body">
                                <div class="row product-adding">
                                
                                <!--    <div class="col-xl-5">
                                        <div class="add-product">
                                            <div class="row">
                                                <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                                
                                                <img id="blah" src="#" alt="your image" />
                                                </div>
                                            </div><br/>
                                            <div class="row">
                                                <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                                    <ul class="file-upload-product">
                                                    <button style="width:370%"> <input class="upload" type="file" name="file" onchange="readURL(this);"></button>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div> -->
                                    <div class="col-xl-7">
                                        
                                            <div class="form">
                                                <div class="form-group mb-3  row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom01" >Name :</label>    
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control {{$errors->has('name')? 'error' : ''}}" id="validationCustom01" type="text" name="name" value="{{isset($lists->name)? $lists->name: ''}}">
                                                        <div class="valid-feedback">Looks good!</div>    
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="form-group mb-3  row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom01" >Status :</label>    
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                    <input type="radio" id="active" name="gender" value="{{isset($lists->name)? 'selected': ''}}">
                                                    <label for="validationCustom01" >Active</label>
                                                    <input type="radio" id="inactive" name="gender" value="{{isset($lists->name)? 'selected': ''}}">
                                                    <label for="validationCustom01" >InActive</label>
                                                    </div>
                                                </div>
                                            <div class="offset-xl-3 offset-sm-4">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                                
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                       @endisset
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
       @include('admin.footer')

</body>

<!-- Mirrored from themes.pixelstrap.com/bigdeal/admin/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Apr 2021 07:18:46 GMT -->
</html>
