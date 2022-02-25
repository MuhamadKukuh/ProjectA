@extends('template.main')
@section('content')
<section class="content pt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ $title }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Keterangan</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($siswa as $siswaa)
                <tr>
                    <td>{{ $siswaa->nisFormat($siswaa->nis) }}</td>
                    <td>{{ $siswaa->nama }}</td>
                    <td>
                        <form action="#">
                            @foreach ($status as $item)
                                <button>{{ $item->status }}</button>
                            @endforeach
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection