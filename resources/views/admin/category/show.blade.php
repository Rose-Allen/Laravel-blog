@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0 mr-3">{{$category->title}}</h1>
                    <a class="text-primary" href="{{route('admin.category.edit', $category->id)}}"><i class="fas fa-pen"></i></a>
                    <form action="{{route('admin.category.delete', $category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-danger border-0 bg-transparent">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('admin.tag.index')}}">Категории</a></li>
                        <li class="breadcrumb-item active">{{$category->title}}</li>
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

            <div class="row mt-3">
               <div class="col-md-4">
                   <div class="card">
                       <div class="card-body table-responsive p-0">
                           <table class="table table-hover text-nowrap">
                               <tbody>
                               <tr>
                                   <td>ID</td>
                                   <td>{{$category->id}}</td>
                               </tr>
                               <tr>
                                   <td>Название</td>
                                   <td>{{$category->title}}</td>
                               </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
            </div>
            <a class="btn btn-success" href="{{route('admin.category.index')}}">Назад</a>
        </div>
    </section>

</div>

@endsection
