<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="storage/back/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="storage/back/assets/img/favicon.png">
  <title>
    Soft UI Dashboard by Creative Tim
  </title>
@extends('layouts.back.back')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card card-plain mt-8">
                    <div class="card-header pb-0 text-left bg-transparent">
                        <h3 class="font-weight-bolder text-info text-gradient">Add Client Details</h3>
                        <p class="mb-0">Now you are enter the Client information</p>
                    </div>
                    <div class="card-body">
                        <form class="form-valide" action="{{route('add.client.form')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label">Client Name :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-username" name="c_name" placeholder="Enter Book Name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-email">Description :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-email" name="c_description" placeholder="Enter Description..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-password">Prodession :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-password" name="c_profession" placeholder="Enter Price..">
                                </div>
                            </div>
                            
                            <div class="card-body">
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Image</label>
                    <input class="form-control" name="client_image" type="file" id="formFile">
                  </div>
                </div> 

                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  </main>


@endsection()
