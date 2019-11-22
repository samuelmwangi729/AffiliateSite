@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Referal Details</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('refsCategories.create') !!}">Add New</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <a class="btn btn-warning pull-right" style="margin-top: -10px;margin-bottom: 5px;margin-left:10px" href="/9e59d42533de13285d6ef99427563967a25bfcf7">Generate Refferal Link</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('refs_categories.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

