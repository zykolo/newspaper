@extends('admin-layout')
@section('title','Category')

@section('dash-content')
<div class="row d-flex">

			<?php
				$messege = Session::get('messege');
                if($messege){ 
            ?>
                <p class="alert alert-success"><?php echo $messege; ?> </p>
                <?php Session::put('messege', NULL);}; ?>
		
<div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Add Category</h3>
            <form action="/add-category" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Category Name:</label>
                    <input type="text" name="category_name" value="{{old('category_name')}}" required  id="category-name" class="form-control @error('category_name') is-invalid @enderror" placeholder="Example: National" aria-describedby="helpId">
                    @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Description:</label>
                    <textarea name="description" value="{{old('description')}}" required class="form-control @error('description') is-invalid @enderror" placeholder="Describe the category" aria-describedby="helpId" id="description" cols="10" rows="5"></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="container-login100-form-btn">
                    <input type="submit" value="Add Category" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    <div class="show-category col-md-8">

        <!-- /row -->
        <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Category List</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Category URL</th>
                                            
                                        </tr>
                                    </thead>
                                    @if (count($shows) < 1 )

                                    <h3 class="box-title">There are no category list at the moment. Please Add Category</h3>
                                    @else
                                    
                                    <tbody>
                                    @foreach ($shows as $show)
                                        <tr>
                                            <td>{{$show->id}}</td>
                                            <td>{{$show->category_name}}</td>
                                            <td>{{$show->description}}</td>
                                            <td>{{$show->category_url}}</td>
                                          
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
    </div>
</div>

@endsection