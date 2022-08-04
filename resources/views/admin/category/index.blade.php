@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категории</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active">Категории</li>
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
                    <div class="col-md-2">
                        <a href="{{route('admin.category.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
               <div class="col-md-4">
                   <div class="card">
                       <div class="card-body table-responsive p-0">
                           <table class="table table-hover text-nowrap">
                               <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Название</th>
                                   <th>Действия</th>
                               </tr>
                               </thead>
                               <tbody>
                               @foreach($categories as $category)
                               <tr>
                                   <td>{{$category->id}}</td>
                                   <td>{{$category->title}}</td>
                                   <td class="table-buttons">
                                       <a class="btn btn-success" href="{{route('admin.category.show', $category->id)}}"><i class="fas fa-eye"></i></a>
                                       <a class="btn btn-primary" href="{{route('admin.category.edit', $category->id)}}"><i class="fas fa-pen"></i></a>
                                       <form action="{{route('admin.category.delete', $category->id)}}" method="post">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" class="btn btn-danger">
                                               <i class="fas fa-trash"></i>
                                           </button>
                                       </form>
                               </tr>
                               @endforeach
                               </tbody>
                           </table>
                       </div>
                       <!-- /.card-body -->
                   </div>
               </div>
            </div>


        </div>
    </section>

</div>

@endsection
