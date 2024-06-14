<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="storage/back/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Catagory Table Section</title>
    @extends('layouts.back.back')
    @section('content')
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="card">
                    <h5 class="card-header">Bordered Table</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Book Name</th>
                                        <th>Book Price</th>
                                        <th>Book Author Name</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($sl=1)
                                    @foreach($show as $show)
                                    <tr>
                                        <td>
                                            <strong>{{$sl++}}
                                                </strong>
                                        </td>
                                        <td>{{$show->name}}</td>
                                        <td>{{$show->price}}</td>
                                        <td>{{$show->Author_name}}</td>
                                        <td>{{$show->image}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('book.edit',$show->id)}}"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{route('book.del',$show->id)}}"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
@endforeach()
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection()
