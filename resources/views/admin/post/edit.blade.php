@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование Постов</h1>
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
                    <form action="{{route('admin.post.update', $post->id)}}" method="post" class="w-25">
                        @csrf
                        @method('patch')
                       <div class="form-group">
                           <input type="text" name="title" class="form-control" placeholder="Название Поста" value="{{$post->title}}">
                            @error('title')
                                <div class="text-danger">Необходимо заполнить поле!</div>
                           @enderror
                       </div>
                            <input type="submit" class="btn btn-primary" value="Обновить">
                    </form>
                </div>
            </div>
            <a class="mt-3 btn btn-danger" href="{{route('admin.post.index')}}">Назад</a>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
