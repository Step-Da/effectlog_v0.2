@if($errors->any())
    <div class="pt-3">
        <div class="alert alert-danger">
            <u>
                @foreach ($errors->all() as $error)
                    <li class="mb-1">{{ $error }}</li>
                @endforeach
            </u>
        </div>
    </div>
@endif

@if (session('success'))
    <div class="container pt-4">
        <div class="allert alert-success m-3 message-field">
            {{ session('success') }}
        </div>
    </div>
@endif