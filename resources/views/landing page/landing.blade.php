<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafe Bdp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand-img" href="#">
                <img src="{{ asset('assets/images/logo wikrama.png') }}" alt="logo" width="30" height="30"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                < class="navbar-toggler-icon"></>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- end navbar --}}

    {{-- jumbotron --}}
    <div class="bg">
        <div class="container mt-5 mb-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-8">
                    <h6  style="margin-top: 40px; color: #fff;" class="pb-3 pe-5" style="color:#fff">WELCOME TO</h6>
                    <h1 class="pb-2 pe-4" style="color: #fff">Cafe Wikrama</h1>
                    <h3 class="pb-3 pe-4" style="color: #EB455F">
                        Fresh And Delicious Food Every Day
                    </h3>
                    <a type="submit" class="index btn btn-outline-danger" style="border-radius: 50px ">Order Now</a>
                </div>
                <div class="col-4">
                    <img  class="food" src="{{ asset('assets/images/food.png') }}" alt="makanan" 
                        class="d-inline-block align-text-top">
                </div>
            </div>
        </div>
    </div>
    {{-- end jumbotron --}}

      {{-- drinks --}}
      <section class="pt-2">
        <div class="container ms-5 my-5">
            <div class="row my-4 ms-5 text-center">
                <h4 class="pb-3 pe-5" style="color: #b81717; font-weight: 600;"> Menu's Drinks </h4>
                <hr class="solid mb-3">
            </div>
            <div class="row mb-3 ps-5">
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/minum.png') }}"
                            class="card-img-top" alt="..." style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 600;">Ice/hot Chocolate</h5>
                            <p class="card-text">Rp.5000</p>
                            <a href="#" class="btn btn-outline-danger w-100">Order Here</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/coffee.png') }}"
                            class="card-img-top" alt="..." style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 600;">School horor</h5>
                            <p class="card-text">Rp/10.000</p>
                            <a href="#" class="btn btn-outline-danger w-100">Order Here</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/images/coklat.png') }}"
                            class="card-img-top" alt="..." style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title" style="font-weight: 600;">The invansion</h5>
                            <p class="card-text">Rp.15.000</p>
                            <a href="#" class="btn btn-outline-danger w-100">Order Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    </div>

    {{-- foods --}}
    <section class="bg-warning pt-2">
        <div class="container ms-5 my-5">
            <div class="row my-4 ms-5 text-center">
                <h4 class="menu" style="color: #b81717">Menu's Food</h4>
                <hr class="solid mb-3">
            </div>
            <div class="food">
                <div class="col-md-4 mb-3 display-flex">
                    <img src="{{ asset('assets/images/mie.png') }}" style="margin-left: -100px ; margin-top: -50px;" alt="food" height="280px">
                </div>
                <div class="delivery-text">
                    <h1>Mie Ayam</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Non placeat facere est maiores esse nostrum, 
                        molestiae veniam pariatur nulla, harum quisquam fugit. 
                        Molestias, laboriosam aperiam architecto dolor aliquid inventore laudantium?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus incidunt repellat numquam tenetur odit. 
                        Ullam et praesentium cum nulla assumenda possimus vitae aliquid tenetur. Accusamus rem ratione impedit omnis accusantium!
                    </p>
                    <button typ></button>
                </div>
            </div>
        </div>
    </section>
    {{-- end foods --}}

    {{-- message --}}
    
    <div class="container">
        <div class="row text-center">
            <h2>Message</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="name" class="form-label"></label>
                            <input type="text" class="form-control" name="name" placeholder="input your name">
                        </div>
                        <label for="message" class="form-label">Message :</label>
                        <textarea name="message" class="form-control" placeholder="Input Message..">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Send</button>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
    {{-- end message --}}

     {{-- footer --}}
     <footer class="bg-light text-center" style="height: 40px;">
        <p class="pt-2" style="color: #000;"> &copy; 2023 by <a style="text-decoration: none; color: #000;" href="https://github.com/alezafazriliyadisudrajat"
                style="text-decoration: none; color: white;" target="_blank">
                 Aleza
            </a>
        </p>
    </footer>
    {{-- end footer --}}




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
