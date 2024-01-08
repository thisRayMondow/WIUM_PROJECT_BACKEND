@extends('WIUM_PROJECT_TEMPLATE')

@section('title', 'Dashboard')

@section('content')
<div class="border-bottom m-1" style="display: flex;">
    <h3>Departement</h3>
    <button class="btn btn-sm btn-info ms-2 mb-1" data-bs-toggle="modal" data-bs-target="#addDept"><b><i class="bi bi-plus-circle"> Tambah</i></b></button>
</div>
<div class="row bg-secondary pt-2">

    @foreach ($dept as $val)
    <div class="col-md-3 mb-1">
        <div class="card">
            <div class="card-body">
                <small>({{ $val->kode_wilayah }})</small>
                <h6 class="card-title">{{ $val->name }}</h6>
                <p class="card-text">{{ $val->address }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Modal -->
<div class="modal fade" id="addDept" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Departement</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="WIUM_DEPT" method="post">
            <div class="modal-body">
                @csrf
                <div class="mb-3">
                    <label for="dept" class="form-label">Nama Departemen</label>
                    <input type="text" class="form-control" id="namaDept" name="dept" placeholder="ketik disini ..." required pattern="[A-Za-z\s]+">
                </div>
                <div class="mb-3">
                    <label for="kodeDept" class="form-label">Kode Departement</label>
                    <input type="text" class="form-control" id="kodeDept" name="kodeDept" placeholder="ketik disini ..." required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Kantor</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="ketik disini ..." required></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection                       
