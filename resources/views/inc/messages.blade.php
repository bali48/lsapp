@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissable">
            <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{{$error}}</strong>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissable">
            <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{{session('success')}}</strong>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissable">
            <a href="" class="close" data-dismiss="alert" aria-label="close">×</a>
            <strong>{{session('error')}}</strong>
    </div>
@endif