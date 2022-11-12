@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible text-center" role="alert">
        {{ session('success') }}
    </div>
@endif