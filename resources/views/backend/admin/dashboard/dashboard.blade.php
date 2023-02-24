@extends('backend.admin.layouts.app')
@section('title','Dashboard')
@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-light" value="{{ date('Y-m-d') }}">
                                <span class="input-group-text bg-primary border-primary text-white">
                                            <i class="mdi mdi-calendar-range font-13"></i>
                                        </span>
                            </div>
                        </form>
                    </div>
                    <h4 class="page-title">Mr / Mis {{ auth()->user()->name }} Welcome to Brand New Admin Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->
    </div>
@endsection
