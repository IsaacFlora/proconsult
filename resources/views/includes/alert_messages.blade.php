@if (session('message'))
<div class="col-md-12"><div class="alert-{{ session('class') }} alert">{{ session('message') }}</div></div>
@endif

@if (session('emailExiste'))
<div class="col-md-12"><div class="alert-danger alert">{{ session('emailExiste') }}</div></div>
@endif