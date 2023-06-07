<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Andersen</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container py-5">
<form action="{{ route('contact') }}" method="POST" class="mb-5">
    @csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Name" required>
    </div>
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group">
        <textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<div>
    @foreach ($messages as $message)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $message->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $message->email }}</h6>
                <p class="card-text">{{ $message->message }}</p>
                <p class="card-text"><small class="text-muted">{{ $message->created_at }}</small></p>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>
