@if (session('success'))
    <div class="alert alert-icon alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <i class="icon wb-check" aria-hidden="true"></i> {{ session('success') }}
    </div>
@endif



@if ($errors->any())
    <div class="alert alert-icon alert-danger alert-dismissible" role="alert">
        @foreach ($errors->all() as $error)
            <ul>
                <li class="list-unstyled">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <i class="icon wb-close" aria-hidden="true"></i>&nbsp;&nbsp;{{ $error }}
                </li>
            </ul>
        @endforeach
    </div>
@endif
