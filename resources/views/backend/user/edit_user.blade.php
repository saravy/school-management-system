@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Add User</h4>
    
   </div>
   <!-- /.box-header -->
   <div class="box-body">
   <form method="post" action="{{route('users.update',$editData->id)}}">
        @csrf
     <div class="row">
       <div class="col">
           <form novalidate="">
             <div class="row">
               <div class="col-12">	

               <div class="row">
                   <div class="col-md-6">
                   <div class="form-group">
                       <h5>User Role <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <select name="usertype" id="select" required="" class="form-control">
                               <option value="" selected="" disabled="">Select Role</option>
                               <option value="Admin" {{ ($editData->usertype == "Admin" ? "selected":"")}}>Admin</option>
                               <option value="User" {{ ($editData->usertype == "User" ? "selected":"")}}>User</option>
                               
                           </select>
                       <div class="help-block"></div>
                      </div>
                   </div>	
                   </div>
                   <div class="col-md-6">
                   <div class="form-group">
                       <h5>User Name <span class="text-danger">*</span></h5>
                       <div class="controls">
                           <input type="text" name="name" value="{{$editData->name}}" class="form-control" required="" data-validation-required-message="This field is required"> 
                           <div class="help-block"></div></div>
                      
                   </div>
                       </div>
               </div>
               <div class="row">
                   <div class="col-md-6">
                   <div class="form-group"> 
                   <h5>Email <span class="text-danger">*</span></h5>
                   <input type="email" name="email" value="{{$editData->email}}" class="form-control" required="" data-validation-required-message="This field is required"> 
                   </div>
                   </div>
                   <div class="col-md-6">
                  
                   </div>
               </div>     
               				
                   
                   
                   
                  
                  

               </div>
             </div>
              
            
               <div class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update"> 
               </div>
           </form>

       </div>
       <!-- /.col -->
     </div>
     <!-- /.row -->

</form>
   </div>
   <!-- /.box-body -->
 </div>
 <!-- /.box -->

</section>
	  
	  </div>
  </div>
@endsection