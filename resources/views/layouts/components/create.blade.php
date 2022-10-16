{{-- @extends('layouts.app', ['activePage' => 'user', 'titlePage' => __('User')])

@section('content') --}}
<x-app-layout>

    <div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="row">

                        <div class="col-lg-12 margin-tb">

                            <div class="pull-left">

                                <h2>Create @yield('title')</h2>

                            </div>

                            <div class="pull-right">

                                <a class="btn btn-primary" href="@yield('back')"> Back</a>

                            </div>

                        </div>

                    </div>


                    @if (count($errors) > 0)

                    <div class="alert alert-danger">

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>

                        <ul>

                            @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                    @endif


                    @yield('form')

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- @endsection --}}
