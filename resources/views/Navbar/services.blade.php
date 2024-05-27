<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .football img{
        height: 15em;
        width: 20em;
    }
    .fitness img{
        height: 15em;
        width: 20em;
    }
    .tennis img{
        height: 15em;
        width: 100%;
    }
    .content_service{
      margin-top: 10px !important;
    }
  </style>
</head>
<body>

    @extends('layouts.layout')
    @section("content")

  <!-- Hero Section -->
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Our Services</h1>
      <p class="lead text-muted">Discover our range of premium services designed to meet your needs.</p>
    </div>
  </section>

  <!-- Services Section -->
  <section class="container content_service">

    <div class="row">
      @foreach ($services as $service)
      <div class="card col-md-4">
        <div class="card-header football">
          <img src="{{$service->image}}" alt="">
        </div>
        <h4 class="card-title">{{$service->titre}}</h4>
        <p class="card-body">
          {{$service->description}}
        </div>
      @endforeach
        </div>
  </section>


@endsection
</body>
</html>
