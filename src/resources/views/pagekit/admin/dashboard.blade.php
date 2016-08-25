@extends('page::page-layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="table-layout">
                        <nav class="dashboard-nav">
                            <div class="layout-table text-left">
                                <div class="layout-row layout-left">
                                    <span class="material material_explore"></span>
                                </div>
                            </div>
                        </nav>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nisi, officia.
                            Accusantium adipisci aliquam aspernatur aut beatae, commodi culpa deleniti dignissimos
                            dolores doloribus eligendi illo illum ipsum iste itaque magnam nam odio perferendis
                            perspiciatis praesentium quia quidem quod repellat suscipit ut velit vero. Officia, quia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 sidebar-secondary">
                <nav class="dashboard-nav">
                    <div class="layout-table text-left">
                        <div class="layout-row layout-left">
                            <span class="material material_more_horiz"></span>
                        </div>
                    </div>
                </nav>

            </div>


        </div>
        </div>
        @endsection
        @push('styles')
        <style>

        </style>
    @endpush
    @push('scripts')

    @endpush
