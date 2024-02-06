<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics - Edit Comics</title>
</head>

<body>

    <body>
        <h1>Edit Comic</h1>
        <form action="{{ route('comics.update', $comicEdit->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $comicEdit->title }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description">{{ $comicEdit->description }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="thumb">{{ $comicEdit->thumb }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="text" class="form-control" name="price" value="{{ $comicEdit->price }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Series</label>
                <input type="text" class="form-control" name="series" value="{{ $comicEdit->series }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" class="form-control" name="type" value="{{ $comicEdit->type }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Sale Date</label>
                <input type="text" class="form-control" name="sale_date" value="{{ $comicEdit->sale_date }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Artists</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="artists">{{ $comicEdit->artists }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Writers</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="writers">{{ $comicEdit->writers }} </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </body>
</body>

</html>
