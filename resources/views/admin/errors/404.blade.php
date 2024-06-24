@extends('admin.layouts.default')
{{-- Web site Title --}}
@section('title')
    @parent :: {!! '404' !!}
@stop
@section('styles')
@stop
{{-- Content --}}
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">404</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/{!! ADMIN_SLUG !!}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="javascript:;">404</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <h1 style="font-size:185px;">404</h1>
                                        <p style="font-size:18px;">Page not foud.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- section end --}}
            </div>
        </div>
    </div>
    {{-- END: Content --}}
@stop