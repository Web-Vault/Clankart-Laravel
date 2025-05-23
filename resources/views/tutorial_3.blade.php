@section('header/footer')
<form action="{{ URL::to('/')}}/files" method="post" enctype="multipart/form-data">
          <br>
          @csrf
          Upload file <input type="file" name="files1" id="">
          @error('files1')
          {{ $message}}
          @enderror
          <br>
          <input type="submit" value="Submit"><br><br><br>
</form>
<table>
          <tr>
                    <th>file name</th>
                    <th>Download</th>
                    <th>Delet</th>
          </tr>

          <!DOCTYPE html>
<html>
<head>
    <title>File List</title>
</head>
<body>
    <table>
          @dd($all_files)
        @foreach ($all_files as $file)
            <tr>
                <td>
                    {{ $filename = $file->getFilename() }}
                </td>
                <td>
                    <a href="{{ route('download', $filename) }}">download</a>
                </td>
                <td>
                    <a href="{{route('delete', $filename)}}">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>



</table>
@endsection