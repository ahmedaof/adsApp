@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">


            <h3>Add Category</h3>
            <div class="row justify-content-center">
                <div class="col-md-10">

                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample" action="{{route('auth.category.store')}}" enctype="multipart/form-data" method="post">@csrf
                                <div class="form-group">
                                    <label for="name">Name arabic</label>
                                    <input type="text" name="name_ar" class="form-control" value="{{$category->name_en}}"
                                        placeholder="name arabic of category">
                       
                                </div>
                                <div class="form-group">
                                    <label for="name">Name English</label>
                                    <input type="text" name="name_en" class="form-control"
                                        placeholder="name of category">
                
                                </div>

                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control"
                                        name="image">
          
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
