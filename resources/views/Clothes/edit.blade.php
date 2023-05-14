<! DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8">
<title>Edit Clothes Form - Project Data Clothes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Edit Clothes</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ url('/clothe') }}" enctype="multipart/form-data"> Back</a>
                </div>
            </div>
        </div>
        @if (session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ url("/clothe/$clothe->id") }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Brand Clothes :</strong>
                        <input type="text" name="brands" value="{{ old('brands', $clothe->brands) }}"
                        class="form-control" placeholder="Brands Clothes">
                        @error('brands')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Clothes:</strong>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Clothes"
                            value="{{$clothe->nama}}">
                            @error('nama')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jenis Clothes:</strong>
                        <input type="text" name="jenis_pakaian" value="{{ $clothe->jenis_pakaian }}" class="form-control"
                        placeholder="Jenis Pakaian">
                        @error('jenis Pakaian')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>












         
            



