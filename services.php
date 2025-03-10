<?php include 'navbar.php'; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .service_heading {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
        }

        .img-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .badge-info {
            background-color: #17a2b8;
            color: white;
        }

        .firstImage {
            display: flex;
            justify-content: center
        }

        .serviceImages {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }


        .serviceImages:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="service py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-11 mx-auto">
                    <div class="col-lg-12">
                        <div class="firstImage">
                            <img src="Image/s1.png" height='350' width='700' />
                        </div>
                    </div>
                    <div class="mt-2 mb-5 text-center">
                        <h1 class="service_heading">OUR SERVICES</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-md-2 m-0">
                            <span class="badge badge-info rounded-pill px-3 py-1 my-2 font-weight-light">What We
                                Do</span>
                            <h4>Awesome with Extra Ordinary Flexibility Features</h4>
                            <h6 class="font-weight-light subtitle">
                                You can rely on our amazing features list and also our customer services will be a great
                                experience for you without doubt and in no-time.
                            </h6>
                            <div class="row mt-md-5">
                                <div class="col-md-6 mt-3">
                                    <h6 class="font-weight-medium">Quick Services</h6>
                                    <p>Our customer service is very quick and we respond within 10 minutes after login.
                                    </p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <h6 class="font-weight-medium">Easy Booking</h6>
                                    <p>No more complications, book easily and email us for assistance.</p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <h6 class="font-weight-medium">Travel Safety</h6>
                                    <p>We will look after you as we consider our travelers as family.</p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <h6 class="font-weight-medium">Quick Responses</h6>
                                    <p>Our responses are quick and efficient. Check out our reviews for more
                                        information.</p>
                                </div>
                                <div class="col-lg-12 my-4">
                                    <a href="about.php" class="btn btn-sm btn-info">Check More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-md-5 m-0">
                            <div class="row wrap-service">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12 mb-4 serviceImages">
                                            <img alt="ux" class="rounded img-shadow img-fluid" src="Image/sf1.png" />
                                        </div>
                                        <div class="col-md-12 mb-4 serviceImages">
                                            <img alt="ux" class="rounded img-shadow img-fluid" src="Image/sf2.png" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 uneven-box">
                                    <div class="row">
                                        <div class="col-md-12 mb-4 serviceImages">
                                            <img alt="ux" class="rounded img-shadow img-fluid" src="Image/sf3.png" />
                                        </div>
                                        <div class="col-md-12 mb-4 serviceImages">
                                            <img alt="ux" class="rounded img-shadow img-fluid" src="Image/sf4.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact3 py-5 container">
        <div class="row no-gutters">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-shadow">
                            <img src="Image/s2.png" height='450' width='600' />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-box ml-3">
                            <h1 class="font-weight-light mt-2 text-center">Quick Contact</h1>
                            <p class='font-weight-light text-center'>Always Be In touch With US</p>

                            <form>
                                <div class="form-group mt-2">
                                    <input class="form-control" type="text" placeholder="Name" />
                                </div>
                                <div class="form-group mt-2">
                                    <input class="form-control" type="email" placeholder="Email Address" />
                                </div>
                                <div class="form-group mt-2">
                                    <input class="form-control" type="text" placeholder="Phone" />
                                </div>
                                <div class="form-group mt-2">
                                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                                </div>
                                <form action="contact.php" method="post">
                                    <button type="submit"
                                        class="btn btn-danger mt-3 text-light border-0 px-3 py-2">SUBMIT</button>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 d-flex justify-content-around">
        <div class="card mt-4 border-0 mb-4 d-flex ms-5">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card-body d-flex align-items-center c-detail pl-0">
                        <div class="mr-3 align-self-center me-3">
                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon1.png" />
                        </div>
                        <div class="">
                            <h6 class="font-weight-medium">Address</h6>
                            <p class="">123 Road, City
                                <br /> Country
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card-body d-flex align-items-center c-detail">
                        <div class="mr-3 align-self-center me-3">
                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon2.png" />
                        </div>
                        <div class="">
                            <h6 class="font-weight-medium">Phone</h6>
                            <p class="">+91 12345 98765
                                <br /> 65432 18976
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card-body d-flex align-items-center c-detail">
                        <div class="mr-3 align-self-center me-3">
                            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/contact/icon3.png" />
                        </div>
                        <div class="">
                            <h6 class="font-weight-medium">Email</h6>
                            <p class="">
                                contact@hdt.com
                                <br /> rima@hdt.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
</body>

</html>