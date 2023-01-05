@if(count($errors)> 0)
    @foreach ($errors->all() as $error)
        <p class="alert alert-danger">
            {{$error}}    
        <p>
    @endforeach
@endif

@if(session('success'))
    <p class="alert alert-success">
        {{session('success')}}
    </p>
@endif

@if(session('error'))
    <p class="alert alert-danger">
        {{session('error')}}
    </p>
@endif

@if (session()->has('successMessage')) 
<div class="alert alert-success">
    {{ session()->get('successMessage')}}
</div>
@elseif (session()->has('errorMessage'))
<div class="alert alert-danger">
    {{ session()->get('errorMessage')}}
</div>
@endif