@extends ('layouts.admin')
@section ('content')
<div class="row">
<div class="col-md-12">
<p class="alert alert-info"> {{ Session ::get ('info')}}</p>
<a href="{{ route ('admin.create' )}}" class="btn btn-success">New post</a>
</div></div>
<hr>
<div class="row">
<div class="col-md-12">
<p><strong>Learning Larvel</strong><a href="{{ route ('admin.edit', ['id'=>1] )}}">Edit</a></p>
</div>
</div>
@endsection