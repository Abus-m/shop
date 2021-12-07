@extends('admin.layout.master')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Dashboard</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Control</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="right-title w-170">
				<span class="subheader_daterange font-weight-600" id="dashboard_daterangepicker">
					<span class="subheader_daterange-label">
						<span class="subheader_daterange-title"></span>
						<span class="subheader_daterange-date text-primary"></span>
					</span>
					<a href="#" class="btn btn-sm btn-primary">
						<i class="fa fa-angle-down"></i>
					</a>
				</span>
                </div>
            </div>
        </div>
    <section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">ایجاد دسته بندی</h3>
                </div>
                <div class="box-body">
                    <form action="/adminpanel/categories/store" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="category-id">دسته والد</label>
                            <select name="category_id" id="category-id" class="form-control">
                                <option value="" disabled selected>دسته بندی والد را انتخاب کنید ...</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title"></label>
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="ثبت" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
