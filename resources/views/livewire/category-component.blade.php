@extends('layouts.app')
@section('content')
    <div class="row sales layout-top-spacing">
        <div class="col-sm-12">
            <div class="widget widget-chart-one">
                <div class="widget widget-heading">
                    <h2>Categories</h2>
                    <a href="javascript:void(0)" class="btn btn-success" data-toggle="modal" data-target="#theModal">Agregar</a>
                </div>
                <div class="widget-content mt-3">
                    <div class="table-responsive">

                        <table class="table table-bordered table striped mt-1">
                            <thead class="text-white" style="background: #3b3f5c;">
                                <tr>
                                    <th class="table-th text-white">DESCRIPTION</th>
                                    <th class="table-th text-white">IMAGEN</th>
                                    <th class="table-th text-white">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6>{{ '$category->name' }}</h6>
                                    </td>
                                    <td class="text-center">
                                        <span>
                                            <img src="{{ asset('storage/categories/' . ' $category->image') }}"
                                                alt="Imagen de Ejemplo" height="70" width="80" class="rounded">
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" class="btn btn-dark mtmobile" title="Edit"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="javascript:void(0)" onclick="Confirm({{ ' $category->id ' }})"
                                            class="btn btn-dark mtmobile" title="Delete"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
@endsection
