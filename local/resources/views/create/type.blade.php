     <div class="col-md-10 col-md-offset-1">
        <form action="{{ route('storetype') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <br><br><br><br>
            <input type="text" name="name">
            <input type="file" name="img_path">
            <select name="maintype_id">
                @foreach($maintypes as $maintype)

                    <option value="{{ $maintype->id }}">{{ $maintype->name }}</option>

                @endforeach
            </select>

            <button type="submit" class="btn btn-danger">Create</button>
        </form>
    </div>