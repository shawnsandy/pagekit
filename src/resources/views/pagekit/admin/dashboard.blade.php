@extends('page::page-layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h2>Section Title</h2>
            </div>
            <div class="col-md-4">
                <h3>Sidebar</h3>
            </div>
            <hr>
        </div>
        <section>
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default dash-panel">
                        <div class="panel-body">
                            Basic panel example
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default dash-panel">
                        <div class="panel-body">
                            Basic panel example
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default dash-panel">
                        <div class="panel-body">
                            <div class="icon-add-to-list" style="width: 20px; height: 20px;" ></div>
                            Basic panel example
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default dash-panel">
                        <div class="panel-body">
                            Basic panel example
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
        </div>
    </div>
@endsection
