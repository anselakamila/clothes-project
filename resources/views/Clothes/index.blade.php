<! DOCTYPE html>
<html lang="id">

<head>
<meta charset="UTF-8">
<title>Project Data Clothes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Data Clothes</h2>
                </div>
                <div class="pull-right mb-2">
                    {{-- ini url di route yang buat nampilin form create data --}}
                    <a class="btn btn-success"href="{{ url('/clothe/data/create') }}"> Create Data Clothe</a>
            </div>
        </div>
        </div>
        @if ( $message = Session::get( 'success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>Brands</th>
                <th>Nama</th>
                <th>Jenis Pakaian</th>
                <th width="280px">Action</th>
            </tr>
            {{-- variabel$datainidiambildarimethodindexdiClotheController --}}
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->brands }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jenis_pakaian }}</td>
                <td>
                    {{-- route aksi untuk hapus --}}
                    <form action="{{ url("/clothe/$item->id") }}" method="Post">
                        {{-- route aksi untuk edit --}}
                        <a class="btn btn-primary" href="{{ url("/clothe/$item->id/edit") }}">Edit</a>
                        @csrf
                        @method ( 'DELETE' )
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>









    