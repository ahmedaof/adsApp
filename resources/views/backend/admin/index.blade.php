@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category Table</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>image.</th>
                          <th>Created</th>
                          <th>Action</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                        <tr>
                          <td>{{$category->name}}</td>
                          <td>image</td>
                          <td>{{$category->created_at}}</td>
                          <td>
                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary" >Edit</a>
                            <a class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection
