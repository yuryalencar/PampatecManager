@extends('adminlte::page')

@section('content_header')
    <div class="alert-container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <div class="alert alert-{{$msg}}">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <ul>
                        @if(is_array(Session::get('alert-' . $msg)))
                            @foreach(Session::get('alert-' . $msg) as $alert)
                                <li>{{ $alert }}</li>
                            @endforeach
                        @else
                            <li>{{ Session::get('alert-' . $msg) }}</li>
                        @endif
                    </ul>
                </div>
            @endif
        @endforeach
    </div>
    @yield('header')
@endsection