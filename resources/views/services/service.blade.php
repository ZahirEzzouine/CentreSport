<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Our Services</title>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .football{
        height: 15em;
        width: 20em;
        background-size: cover;
        background-image: url('images/img.jpg.avif')
    }
    .fitness{
        height: 15em;
        width: 20em;
        background-size: cover;
        background-image: url('images/fitness.jpg')
    }
    .tennis{
        height: 15em;
        width: 20em;
        background-size: cover;
        background-image: url('images/tennis.jpg')
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
  <section class="container">

    <div class="row">
        <div class="card col-md-4">
            <div class="card-header football">

            </div>
            <h4 class="card-title">Personal Training Sessions:</h4>
            <p class="p">
                Our personalized training sessions provide you with individualized attention and tailored workout plans to help you achieve your fitness goals effectively.
                Whether you're looking to lose weight, build muscle, improve athletic performance,
                or enhance overall health, our certified personal trainers are here to guide and support you every step of the way.
                With one-on-one coaching, personalized exercise routines, and ongoing motivation,
                you'll see real results and progress towards a healthier, stronger you</p>
          </div>



        <div class="card col-md-4 ">
          <div class="card">
            <div class="card-header fitness"></div>
            <h4 class="card-title"> Group Fitness Classes:
            </h4>
            <p class="card-text">Join our energizing group fitness classes led by experienced instructors who will inspire and challenge you to push your limits. From high-intensity interval training (HIIT) and circuit workouts to yoga, pilates, and spinning, we offer a diverse range of classes to suit all fitness levels and interests. Whether you prefer the camaraderie of group workouts or thrive on the motivation of a structured class environment, our group fitness programs provide a fun and effective way to get in shape, stay active, and have fun with like-minded individuals.</p>
          </div>
        </div>


          <div class="card col-md-4">
            <div class="card-header tennis"></div>
            <h4 class="card-title"> Tennis:
            </h4>
            <p class="card-text">Sharpen your skills and take your game to the next level with our expert sports coaching clinics. Led by experienced coaches and athletes,
                our clinics cover a variety of sports disciplines, including basketball, soccer, tennis, swimming, and more.
                 Whether you're a beginner looking to learn the fundamentals or an experienced athlete aiming for elite performance,
                 our clinics offer valuable insights, technical instruction, and strategic training to help you excel in your chosen sport. With small class sizes and personalized feedback,
                you'll receive the attention and guidance you need to reach your full potential and achieve success on the field, court, or pool.</p>

          </div>
        </div>
  </section>


@endsection
</body>
</html>
