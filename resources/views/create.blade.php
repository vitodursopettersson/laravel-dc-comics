<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics - New Comic</title>
</head>

<body>
    <h1>Add new Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="thumb">{{ old('thumb') }}
            </textarea>
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Series</label>
            <input type="text" class="form-control" name="series" value="{{ old('series') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Type</label>
            <input type="text" class="form-control" name="type" value="{{ old('type') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Sale Date</label>
            <input type="text" class="form-control" name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Artists</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="artists">{{ old('artists') }} 
            </textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Writers</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="writers">{{ old('writers') }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
