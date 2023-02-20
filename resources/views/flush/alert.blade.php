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


@section('js')
    @if (Session::has('success'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        </script>
    @endif

    @if (Session::has('message'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        </script>
    @endif

    @if (Session::has('info'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        </script>
    @endif

    @if (Session::has('warning'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        </script>
    @endif
@endsection





{{-- @if (Session::has('success'))
    <script type="text/javascript">
        function massge() {
            Swal.fire(
                'Good job!',
                'Successfully Saved!',
                'success'
            );
        }

        window.onload = massge;
    </script>
@endif --}}
