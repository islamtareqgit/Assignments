

@if($errors->any())
<p class="alert alert-danger">{{$errors-> first()}}<button class="close" data-dismiss="alert">&times;</button></p>
										
@endif

@if(Session::has('warning'))

<p class="alert alert-danger">{{ Session::get('warning')}}<button class="close" data-dismiss="alert">&times;</button></p>

    
@endif