@extends('admin.layout')

@section('content')

     <!-- /.box -->
       <!-- general form elements disabled -->
       <div class="box box-warning">
         <div class="box-header with-border">
           <h3 class="box-title">Company Information</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
           <form role="form"   id="FormSaveCompany" enctype="multipart/form-data">
             <!-- text input -->
             <!--
             <div class="col-md-6">
               <div class="form-group">
                 <label>Company Name</label>
                 <input type="text" class="form-control" placeholder="Company Name ...">
               </div>
             </div>-->
            <div class="col-md-6">
              <div class="form-group">
                <label>View</label>
                <input type="text" class="form-control" name="view" placeholder="View..." >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mission</label>
                <input type="text" class="form-control" name="mission" placeholder="Mission..." >
              </div>
            </div>
             <!-- textarea -->
            <div class="col-md-6">
                 <div class="form-group">
                   <label>Description View</label>
                   <textarea class="form-control" rows="3" name="description_view" placeholder="Description View"></textarea>
                 </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                 <label>Description Mission</label>
                 <textarea class="form-control" rows="3" name="description_mission" placeholder="Description Mission" ></textarea>
               </div>
            </div>
            <div class="col-md-6">
              <label for="imageView">Image to Description</label>
                <input type="file" id="imageView" name="image_view">
                <p class="help-block">Choose the file.</p>
            </div>
            <div class="col-md-6">
              <label for="imageMission">Image to Mission</label>
                <input type="file" id="imageMission" name="image_mission">
                <p class="help-block">Choose the file.</p>
            </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label>Email</label>
                 <input type="email" class="form-control" name="email" placeholder="company@email.com" >
               </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label>URL</label>
                  <input type="text" class="form-control" name="link_facebook" placeholder="http://wwww.facebook.com/company" >
                </div>
            </div>

            <div class="col-md-6">
               <input type="submit" class=" btn btn-primary" name="save" value="Guardar">
            </div>

         </div>
         <!-- /.box-body -->
       </div>
       <!-- /.box -->
@endsection
@section('scripts')
  <script type="text/javascript">
  (function() {

         

         const form = $("#FormSaveCompany");

         form.on('submit', function(evt){
           evt.preventDefault();
           $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                 url: "{{ route('company.store') }}",
                 method: 'post',
                 data:  new FormData(this),
                 contentType: false,
                 processData:false,
                 success: function(result){

                    alert(result.view);

                },
                error: function(e){
                  console.log(e)
                }});


         });

   })();
  </script>
@endsection
