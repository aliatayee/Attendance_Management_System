@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger alert-dismissible">
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <h4><i class='icon fa fa-warning'></i> Error!</h4>
        {{ $error }}
    
</div>
@endforeach
@endif

@if (session('success'))
<div class='alert alert-success alert-dismissible'>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <h4><i class='icon fa fa-check'></i> Success!</h4>
    {{session('success')}}

</div>
@endif

@if (session('error'))
    <div class='alert alert-danger alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-warning'></i> Error!</h4>
        {{session('error')}}
    </div>
@endif

@if (session('info'))
<div class="alert alert-info">
    <p class="text-center"><i class="fa fa-exclamation fa-lg" aria-hidden="true"></i>
        {{ session('info')}}
    </p>
</div>


@endif
