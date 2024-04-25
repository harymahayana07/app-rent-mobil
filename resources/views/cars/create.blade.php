@extends('layouts.main')

@section('content')
<h1 class="mt-4">Mobil</h1>
<ol class="mb-4 breadcrumb">
  <li class="breadcrumb-item active">Tambah Mobil</li>
  <br>
</ol>
<form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
  @csrf()
  <div class="mb-3">
    <label for="merek" class="form-label">Merek</label>
    <input type="text" class="form-control @error('merek') is-invalid @enderror" id="merek" name="merek" value="{{ old('merek') }}">
    @error('merek')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>

  <div class="mb-3">
    <label for="model" class="form-label">Model</label>
    <input type="text" class="form-control @error('model') is-invalid @enderror" id="model" name="model" value="{{ old('model') }}">
    @error('model')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
  </div>

  <div class="mb-3">
    <label for="no_plat" class="form-label">No. Plat</label>
    <input type="text" class="form-control @error('no_plat') is-invalid @enderror" name="no_plat" id="no_plat" value="{{ old('no_plat') }}">
    @error('no_plat')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Gambar Mobil</label>
    <img src="" class="mb-3 img-preview img-fluid col-sm-5" alt="">
    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
    @error('image')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Tarif Harga </label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}">
    @error('price')
    <span class="invalid-feedback">
      {{ $message }}
    </span>
    @enderror
  </div>
  
  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select class="form-select" id="status" name="status">
      <option selected value="1">Available</option>
      <option value="0">Not Available</option>
    </select>
  </div>
  <div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<script>
  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);
    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection