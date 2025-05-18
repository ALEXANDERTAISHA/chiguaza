@foreach (['success','danger','info','primary','warning','dark'] as $msg)
    @if (Session::has($msg))
        
        <div class="alert bg-{{ $msg }} text-white alert-dismissible fade show mt-2">
            <span class="fw-semibold">{{ Session::get($msg) }}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
        </div>
        
    @endif
@endforeach

@if ($errors->any())
    
    <div class="alert bg-danger text-white alert-dismissible fade show mt-2">
        @foreach ($errors->all() as $error)
            <span class="fw-semibold">{{ $error }}</span><br>
        @endforeach
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"></button>
    </div>
@endif