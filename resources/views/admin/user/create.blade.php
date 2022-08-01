@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление Пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('admin.user.store')}}" method="post" class="w-25">
                        @csrf
                       <div class="form-group">
                           <input type="text" name="name" class="form-control" placeholder="Имя Пользователя">
                            @error('name')
                                <div class="text-danger">{{$message}}</div>
                           @enderror
                       </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="E-mail">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control" placeholder="Пароль">
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Добавить">
                        </div>

                    </form>
                </div>
            </div>
            <a class="mt-3 btn btn-danger" href="{{route('admin.user.index')}}">Назад</a>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
