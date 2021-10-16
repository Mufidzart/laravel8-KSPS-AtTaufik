@extends('layouts.master')
@section('konten')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit angsuran</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">angsuran</a></li>
            <li class="breadcrumb-item active">Edit Data Angsuran</li>
          </ol>
        </div><!-- /.col -->
      </div>
    </div><!-- /.container-fluid -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Angsuran</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                        <form action="/anggota/profile/updateangsurankredit/{{$angsuran->id_angsuran_kredit}}" method="POST">
                            @csrf
                            <!--card-body -->
                            <div class="card-body col-sm-6">
                                <div class="form-group">
                                    <label for="id_angsuran_kredit">ID Angsuran</label>
                                    <input type="id" class="form-control col-md-4" name="id_angsuran_kredit" value="A100{{$angsuran->id_angsuran_kredit}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="id_anggota">No. Anggota</label>
                                    <input type="id" class="form-control col-md-4" name="id_anggota" value="{{$angsuran->no_anggota}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="name" class="form-control" name="name" value="{{$angsurans->name}}" readonly>
                                </div>
                                <div class="form-group">
                                  <label>Data Kredit</label>
                                  @if ($kredit == null)
                                    <div class="alert alert-danger">
                                      Data kredit tidak ditemukan
                                    </div>
                                  @else
                                  <div class="input-group mb-3">
                                    <input class="form-control bg-danger col-sm-2" name="id_kredit" value="{{$kredit->id_kredit}}" readonly>
                                    <input class="form-control bg-danger" name="data_kredit" value="{{$angsuran->data_kredit}}" readonly>
                                  </div>
                                  @endif
                                </div>
                                <div class="form-group">
                                  <label>Tanggal</label>
                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                        <input name="tglangsuran" type="text" class="form-control datetimepicker-input col-sm-4" data-target="#reservationdate" placeholder="Tanggal" value="{{$angsuran->tgl->format('d/m/Y')}}"/>
                                          @if ($errors->has('tglangsuran'))
                                          <span class="text-danger">{{ $errors->first('tglangsuran') }}</span>
                                          @endif
                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah">Jumlah</label>
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="@currency($angsuran->jumlah)">
                                    @if ($errors->has('jumlah'))
                                    <span class="text-danger">{{ $errors->first('jumlah') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" rows="3" name="keterangan" style="margin-top: 0px; margin-bottom: 0px; height: 131px;">{{$angsuran->keterangan}}</textarea>
                                </div>
                              </div>
                              <div class="card-footer">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                            </div>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script type="text/javascript">
//Date range picker
$('#reservationdate').datetimepicker({
    format: 'DD/MM/YYYY'
});
</script>
@endsection