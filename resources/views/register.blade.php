<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <title>Pojok Lelang - Daftar</title>
=======
    <title>Sign Up</title>
>>>>>>> ed92589a0682f113765d92d635393258187dc08b
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
<<<<<<< HEAD

    <style>
      body{
        font-family: 'Montserrat', sans-serif;
      }
      @media (min-width: 768px) {
        .gradient-form {
          height: 110vh !important;
        }
      }
      @media (min-width: 769px) {
        .gradient-custom-2 {
          border-top-right-radius: .3rem;
          border-bottom-right-radius: .3rem;
        }
      }
    </style>
  </head>
  <body style="background-image:url('https://media.istockphoto.com/id/1209088835/photo/back-view-of-buyers-raising-hands-to-auctioneer-during-auction.jpg?s=612x612&w=0&k=20&c=OKZMX3No-OcsyCIMB2ibwKVoIx3M-fyor4MvCq2de80='); background-repeat: no-repeat; position:relative;background-size:cover">
=======
    <style>
        body{
    font-family: 'Montserrat', sans-serif;
}


    @media (min-width: 768px) {
    .gradient-form {
    height: 110vh !important;
    }
    }
    @media (min-width: 769px) {
    .gradient-custom-2 {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem;

    }

    }


    </style>
  </head>
  <body style="background-color:#055E68">
>>>>>>> ed92589a0682f113765d92d635393258187dc08b
    <section class="h-100 gradient-form">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-9">
<<<<<<< HEAD
            <div class="card text-black mb-5" style="border-radius:20px">
              <div class="card-body py-5 px-md-5" style="background-color: 055E68">
                <div class="row d-flex justify-content-center">
                  <div class="col-lg-10">
                    <h2 class="mb-5 text-center">Daftar Akun</h2>
                    <form>
                      <div class="row">
                        <div class="col-md-6 mb-1">
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                          </div>
                        </div>
                        <div class="col-md-6 mb-1">
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleFormControlInput1">
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telepon</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-4">
                          <button type="submit" class="btn text-white btn-block mb-4" style="background-color: #00ADB5">Daftar</button>
                        </div>
                        <div class="col-8 mt-1" >
                          <p style="display:block">Sudah punya akun? <a href="{{ url('login') }}">Masuk</a></p>
                       </div>
                      </div>
                    </form>
                  </div>
                </div>
=======
            <div class="card text-black" style="border-radius:0px">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">
                    <!--<div class="text-center">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                        style="width: 185px;" alt="logo">
                    </div>-->
                    <div class="mb-5">
                      <h2>Sign Up</h2>
                    </div>

                    <form>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Nama Lengkap</label>
                            <input type="email" id="form2Example11" class="form-control"
                              placeholder="enter a username" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Nomor Telp</label>
                            <input type="number" id="form2Example11" class="form-control"
                              placeholder="enter a telp" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Username</label>
                            <input type="email" id="form2Example11" class="form-control"
                            placeholder="enter a username" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Password</label>
                            <input type="password" id="form2Example22" class="form-control" placeholder="enter a password" />
                        </div>

                        <div class=" pt-1 mb-5 pb-1">
                            <button class="btn btn-block fa-lg text-white" style="background-color:#00ADB5" type="button">Sign Up</button>
                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p>Sudah punya akun? <a href="{{ url('log') }}">Masuk</a></p>
                        </div>

                    </form>

                  </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                  <img src="https://images.ctfassets.net/cnu0m8re1exe/1sQ6sM77cCEqhr3M1ryLAD/3e0609f58199c35aab3c51c967dcc4d6/shutterstock_1065318299__1_.jpg"
                    alt="Login image" class="w-100" style="object-fit: cover;height: 100%; ">
                </div>
>>>>>>> ed92589a0682f113765d92d635393258187dc08b
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> ed92589a0682f113765d92d635393258187dc08b