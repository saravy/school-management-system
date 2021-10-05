@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
        <section class="content">

<!-- Basic Forms -->
 <div class="box">
   <div class="box-header with-border">
     <h4 class="box-title">Change Password</h4>
    
   </div>
   <!-- /.box-header -->
   <div class="box-body">
   <form method="post" action="{{route('password.update')}}">
        @csrf
     <div class="row">
       <div class="col">
           <form novalidate="">
             <div class="row">
               <div class="col-12">	
               <div class="row">
                   <div class="col-md-6">
                   <div class="form-group"> 
                   <h5>Old Password <span class="text-danger">*</span></h5>
                   <input id="current_password" type="password" name="oldpassword" class="form-control"> 
                   
                   @error('oldpassword')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                    </div>
                   </div>
                  
               </div>   
           
               <div class="row">
                   <div class="col-md-6">
                   <div class="form-group"> 
                   <h5>New Password <span class="text-danger">*</span></h5>
                   <input id="password" type="password" name="password" class="form-control"> 
                   @error('password')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror   
                </div>
                   </div>
                   <div class="col-md-6">
                   <div class="form-group">
                   <h5>Password confirmation <span class="text-danger">*</span></h5>
                   <input id="password_confirmation" name="password_confirmation" type="password" class="form-control"> 
                   @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror   
                </div>
                   </div>
               </div>     
               				
                   
                   
                   
                  
                  

               </div>
             </div>
              
            
               <div class="text-xs-right">
                   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit"> 
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