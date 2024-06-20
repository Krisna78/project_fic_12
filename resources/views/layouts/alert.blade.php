@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissble show fade">
    <div class="alert-body">
        <button class="class" data-dissmiss="alert">
            <span>X</span>
        </button>
        <p>{{$message}}</p>
    </div>
</div>
@endif
