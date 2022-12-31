@extends('admin.layout.main')

@section('container')
    <!-- Title and Top Buttons Start -->
    <div class="page-title-container">
        <div class="row">
            <!-- Title Start -->
            <div class="col-12 col-md-7">
                <h1 class="mb-0 pb-0 display-4" id="title">Quiz</h1>
                <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                    <ul class="breadcrumb pt-0">
                        <li class="breadcrumb-item"><a href="index.html">Quiz</a></li>
                        <li class="breadcrumb-item"><a href="/dashboard">All Quiz</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Title End -->
        </div>
    </div>
    <!-- Title and Top Buttons End -->

    <!-- Content Start -->
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Avalaible Quiz</h1>
    </div>

    <!-- Tabel CRUD -->
    <div class="table-responsive col-lg-10">
      <a href="" class="btn btn-primary mb-3">Upload New Quiz</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Thumbnail</th>
              <th scope="col">Judul</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><img src="img/thumbnail/quiz2.jpg" width="50" alt=""></td>
              <td>Quiz HTML</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, nisi!</td>
              <td>
                <a class="badge bg-warning border-0" href="/crud">Edit</a>
                <form action="" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
            </tr>

            <tr>
              <td>2</td>
              <td><img src="img/thumbnail/quiz2.jpg" width="50" alt=""></td>
              <td>Quiz CSS</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, nisi!</td>
              <td>
                <a class="badge bg-warning border-0" href="/crud">Edit</a>
                <form action="" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
            </tr>

            <tr>
              <td>3</td>
              <td><img src="img/thumbnail/quiz2.jpg" width="50" alt=""></td>
              <td>Quiz Laravel</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, nisi!</td>
              <td>
                <a class="badge bg-warning border-0" href="/crud">Edit</a>
                <form action="" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

@endsection
