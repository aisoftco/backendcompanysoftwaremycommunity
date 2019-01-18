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

           <form class="" action="{{ route('company.store') }}" id="FormSaveCompany" >
             <label>View</label>
             <input type="text" class="form-control" placeholder="View..." >
             <button type="submit" class="btn btn-default">Submit</button>
           </form>


           <form role="form" id="FormSaveCompany">
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
                <input type="text" class="form-control" placeholder="View..." >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mission</label>
                <input type="text" class="form-control" placeholder="Mission..." >
              </div>
            </div>
             <!-- textarea -->
             <div class="col-md-6">
                 <div class="form-group">
                   <label>Description View</label>
                   <textarea class="form-control" rows="3" placeholder="Description View ..."></textarea>
                 </div>
             </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label>Description Mission</label>
                 <textarea class="form-control" rows="3" placeholder="Description Mission" ></textarea>
               </div>
             </div>
            <div class="col-md-6">
              <label for="imageView">Image to Description</label>
                <input type="file" id="imageView">
                <p class="help-block">Choose the file.</p>
            </div>
            <div class="col-md-6">
              <label for="imageMission">Image to Mission</label>
                <input type="file" id="imageMission">
                <p class="help-block">Choose the file.</p>
            </div>
             <div class="col-md-6">
               <div class="form-group">
                 <label>Email</label>
                 <input type="email" class="form-control" placeholder="company@email.com" >
               </div>
             </div>
             <div class="col-md-6">
                <div class="form-group">
                  <label>URL</label>
                  <input type="text" class="form-control" placeholder="http://wwww.facebook.com/company" >
                </div>
             </div>

             <div class="col-md-6">
               <input type="submit" class=" btn btn-default" name="save" value="Guardar">
             </div>

         </div>
         <!-- /.box-body -->
       </div>
       <!-- /.box -->
@endsection
@section('scripts')
  <script type="text/javascript">
  (function() {
         const forma = $("#FormSaveCompany");
         forma.on('submit', function(evt){
           evt.preventDefault();
           $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            jQuery.ajax({
                 url: "{{ route('company.store') }}",
                 method: 'post',
                 data:  $(this).serialize(),
                 success: function(result){
                    //jQuery('.alert').show();
                    alert(result.name);
                  //  jQuery('.alert').html(result.success);
                },
                error: function(e){
                  console.log(e)
                } });
         })
   })();
  </script>
@endsection
