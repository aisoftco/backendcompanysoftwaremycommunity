@extends('admin.layout')

@section('content')
	
	<div class="box box-warning">
         <div class="box-header with-border">
           <h3 class="box-title">Company Information</h3>
         </div>
		<div class="col-md-6">
			<a class="btn btn-primary" href="{{ route('company.create')  }}"> New Company</a>
		</div>
	</div>

	<!-- /.box -->
       <!-- general form elements disabled -->
    
        
         <!-- /.box-header -->
         <div class="box-body col-md-12">
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
               <a href=" " class=" btn btn-warning"  >Edit Company</a>
            </div>

         </div>
         <!-- /.box-body -->


          <!-- /.box-header -->
            <div class="box-body">
              <table id="tableCompany" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                </tr>
                 
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    
@endsection

@section('scripts')
  <script type="text/javascript">
 (function() {
 		 $('#tableCompany').DataTable()
         $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
         

       
   })();
  </script>
@endsection
