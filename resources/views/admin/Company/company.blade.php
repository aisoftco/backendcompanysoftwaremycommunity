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
           <form role="form">
             <!-- text input -->
             <div class="form-group">
               <label>Company Name</label>
               <input type="text" class="form-control" placeholder="Company Name ...">
             </div>
             <div class="form-group">
               <label>View</label>
               <input type="text" class="form-control" placeholder="View..." >
             </div>
             <div class="form-group">
               <label>Mission</label>
               <input type="text" class="form-control" placeholder="Mission..." >
             </div>

             <!-- textarea -->
             <div class="form-group">
               <label>Description View</label>
               <textarea class="form-control" rows="3" placeholder="Description View ..."></textarea>
             </div>
             <div class="form-group">
               <label>Description Mission</label>
               <textarea class="form-control" rows="3" placeholder="Description Mission" ></textarea>
             </div>

             <div class="form-group">
               <label>Email</label>
               <input type="email" class="form-control" placeholder="company@email.com" >
             </div>
             <!-- input states -->
             <div class="form-group has-success">
               <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with success</label>
               <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
               <span class="help-block">Help block with success</span>
             </div>
             <div class="form-group has-warning">
               <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                 warning</label>
               <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
               <span class="help-block">Help block with warning</span>
             </div>
             <div class="form-group has-error">
               <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input with
                 error</label>
               <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
               <span class="help-block">Help block with error</span>
             </div>

             <!-- checkbox -->
             <div class="form-group">
               <div class="checkbox">
                 <label>
                   <input type="checkbox">
                   Checkbox 1
                 </label>
               </div>

               <div class="checkbox">
                 <label>
                   <input type="checkbox">
                   Checkbox 2
                 </label>
               </div>

               <div class="checkbox">
                 <label>
                   <input type="checkbox" disabled>
                   Checkbox disabled
                 </label>
               </div>
             </div>

             <!-- radio -->
             <div class="form-group">
               <div class="radio">
                 <label>
                   <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                   Option one is this and that&mdash;be sure to include why it's great
                 </label>
               </div>
               <div class="radio">
                 <label>
                   <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                   Option two can be something else and selecting it will deselect option one
                 </label>
               </div>
               <div class="radio">
                 <label>
                   <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                   Option three is disabled
                 </label>
               </div>
             </div>

             <!-- select -->
             <div class="form-group">
               <label>Select</label>
               <select class="form-control">
                 <option>option 1</option>
                 <option>option 2</option>
                 <option>option 3</option>
                 <option>option 4</option>
                 <option>option 5</option>
               </select>
             </div>
             <div class="form-group">
               <label>Select Disabled</label>
               <select class="form-control" disabled>
                 <option>option 1</option>
                 <option>option 2</option>
                 <option>option 3</option>
                 <option>option 4</option>
                 <option>option 5</option>
               </select>
             </div>

             <!-- Select multiple-->
             <div class="form-group">
               <label>Select Multiple</label>
               <select multiple class="form-control">
                 <option>option 1</option>
                 <option>option 2</option>
                 <option>option 3</option>
                 <option>option 4</option>
                 <option>option 5</option>
               </select>
             </div>
             <div class="form-group">
               <label>Select Multiple Disabled</label>
               <select multiple class="form-control" disabled>
                 <option>option 1</option>
                 <option>option 2</option>
                 <option>option 3</option>
                 <option>option 4</option>
                 <option>option 5</option>
               </select>
             </div>

           </form>
         </div>
         <!-- /.box-body -->
       </div>
       <!-- /.box -->
@endsection
