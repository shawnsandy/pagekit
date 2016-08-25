@extends('page::page-layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="table-layout">
                <nav>
                    <div class="layout-table text-left">
                        <div class="layout-row layout-left">
                            <span class="h4"><span class="material material_explore"></span> Dashboard</span>
                        </div>
                    </div>

                </nav>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, nisi, officia.
                            Accusantium adipisci aliquam aspernatur aut beatae, commodi culpa deleniti dignissimos
                            dolores doloribus eligendi illo illum ipsum iste itaque magnam nam odio perferendis
                            perspiciatis praesentium quia quidem quod repellat suscipit ut velit vero. Officia, quia.
                        </p>

                    </div>
                    <div class="col-md-4">
                        <h3 class="small-caps">Widgets</h3>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        @endsection
        @push('styles')
        <style>
            nav {
                height: 80px;
                box-sizing: border-box;
            }
        </style>
    @endpush
    @push('scripts')

    @endpush
