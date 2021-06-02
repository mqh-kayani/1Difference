<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <title>1 Difference</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/font-awesome-4.7.0/css/font-awesome.min.css')}}"></link>
</head>
<body>
<div class="container-fluid m-0 p-0" id="header-wrapper">
    <section id="header" style="background-image: url('{{asset('assets/images/img1.jpg')}}')">
        <div id="home-bg-overlay"></div>
        <div class="hero-text text-center">
            <h1 class="text-center">Do The Work You Love.</h1>
            <h1 class="text-center">Make A Difference In The World.</h1>
            <p class="px-5">Through the power of giving, we make the world a better place.
                Join today in our effort to make someone feel blessed today.</p>
            <button class="btn btn-info mx-3">Get Started</button>
            <button class="btn btn-primary mx-3">Donate Now</button>
        </div>
    </section>
    <section id="header-nav-wrapper">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand pl-0 pl-md-5 pl-xl-5" href="#">
                <img src="{{asset('assets/images/logo/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                1 Difference
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
{{--                <span class="navbar-toggler-icon"></span>--}}
                <i class="fa fa-bars" style="color: #ffffff" aria-hidden="true"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" id="top-nav-bar">
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Explore <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Option 1</a>
                            <a class="dropdown-item" href="#">Option 2</a>
                            <a class="dropdown-item" href="#">Option 3</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">How it Work <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Fundraise For <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Option 1</a>
                            <a class="dropdown-item" href="#">Option 2</a>
                            <a class="dropdown-item" href="#">Option 3</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i style="color: #ffd857; font-size: 20px" class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item btn-signin">
                        <a  class="nav-link btn btn-outline-info px-md-4 px-xl-4 px-0" href="#">Sign In
                        </a>
                    </li>
                    <li class="nav-item btn-create-campaign mx-2">
                        <a  class="nav-link btn btn-outline-info px-0 px-md-4 px-lg-4" href="#">Create campaign
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</div>
<section id="fr-category">
   <div class="container">
       <h3 class="text-center py-3 default-heading-text-color">Browse by fundraising category</h3>
       <p class="text-center default-p-text-color">People around the world are raising money for what <br> they are passionate about.</p>
       <div class="row justify-content-center">
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-2">
               <div class="card border py-4 text-center">
                   <img src="{{asset('assets/images/categories/medical_48-18-removebg-preview.png')}}"  class="mx-auto">
                   <p class=" text-brown" style="text-align: center">Medical</p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-2">
               <div class="card border py-4 text-center">
                   <img src="{{asset('assets/images/categories/food_48-11-removebg-preview.png')}}"  class="mx-auto">
                   <p class=" text-brown" style="text-align: center">Food</p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-2">
               <div class="card border py-4 text-center">
                   <img src="{{asset('assets/images/categories/EMERGENCY_48-7-removebg-preview.png')}}"  class="mx-auto">
                   <p class=" text-brown" style="text-align: center">Emergency</p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-2">
               <div class="card border py-4 text-center bg-green">
                   <img src="{{asset('assets/images/categories/nonprofit_1-1119-removebg-preview.png')}}"  class="mx-auto">
                   <p class=" text-brown" style="text-align: center;color: #ffffff">Nonprofit</p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-2">
               <div class="card border py-4 text-center">
                   <img src="{{asset('assets/images/categories/educationa_48-4-removebg-preview.png')}}"  class="mx-auto">
                   <p class=" text-brown" style="text-align: center">Education</p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-2">
               <div class="card border py-4 text-center">
                   <img src="{{asset('assets/images/categories/CHILDREN_48-2-removebg-preview.png')}}"  class="mx-auto">
                   <p class=" text-brown" style="text-align: center">Children</p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-2">
               <div class="card border py-4 text-center">
                   <img src="{{asset('assets/images/categories/enterpreneurship_1-9-removebg-preview.png')}}"  class="mx-auto">
                   <p class=" text-brown" style="text-align: center">Entrepreneurship</p>
               </div>
           </div>
           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-2">
               <div class="card border py-4 text-center">
                   <img src="{{asset('assets/images/categories/home_48-14-removebg-preview.png')}}"  class="mx-auto">
                   <p class=" text-brown" style="text-align: center">Home</p>
               </div>
           </div>
           <a href="#" class="btn btn-info my-3 default-button-background">Browse All Categories</a>
       </div>
   </div>
</section>
<section id="fr-top" style="background-color: #fafafa">
    <div class="container">
        <h3 class="text-center py-3 default-heading-text-color">Explore Top Fundraisers</h3>
        <p class="text-center default-p-text-color">Discover projects just for you and great recommendations <br> when you select your interest.</p>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-3">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/x1.png')}}" alt="Card image cap">
                    <div class="card-body pb-0">
                        <p class="card-text text-green">New York, NY</p>
                        <h5 class="card-title text-brown">Covid 19 donations</h5>
                        <p class="card-text default-p-text-color"><small class="text-muted">In the amidst of ongoing Pandemic many homes and families are facin..</small></p>
                        <div class="mb-2" style="height: 3px; background-color: #f0edeb; width: 100%">
                            <div style="height: 100%; width: 96%; background-color: #00b964"></div>
                        </div>
                        <h6 class="card-text text-brown float-left">$47,000<br>
                            <p style="font-size: 12px !important;" class="default-p-text-color">raised of $50,000</p></h6>
                        <h6 class="card-text text-brown float-right">96%</h6>
                        <hr class="mt-5">
                        <p class="card-text default-p-text-color"><small class="text-muted"><i class="fa fa-clock-o text-green" style="font-size: 15px" aria-hidden="true"></i>17 Remaining Days</small></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-3">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/x2.png')}}" alt="Card image cap">
                    <div class="card-body pb-0">
                        <p class="card-text text-green">Islamabad, Pakistan</p>
                        <h5 class="card-title text-brown">Creating Hospital</h5>
                        <p class="card-text default-p-text-color"><small class="text-muted">Hello everyone I want to tell you something I belong to a Village all...</small></p>
                        <div class="mb-2" style="height: 3px; background-color: #f0edeb; width: 100%">
                            <div style="height: 100%; width: 96%; background-color: #00b964"></div>
                        </div>
                        <h6 class="card-text text-brown float-left">$47,000<br>
                            <p style="font-size: 12px !important;" class="default-p-text-color">raised of $50,000</p></h6>
                        <h6 class="card-text text-brown float-right">96%</h6>
                        <hr class="mt-5">
                        <p class="card-text default-p-text-color"><small class="text-muted"><i class="fa fa-clock-o text-green" style="font-size: 15px" aria-hidden="true"></i>17 Remaining Days</small></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-3">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/x3.png')}}" alt="Card image cap">
                    <div class="card-body pb-0">
                        <p class="card-text text-green">New York, NY</p>
                        <h5 class="card-title text-brown">Justic for George Floyd</h5>
                        <p class="card-text default-p-text-color"><small class="text-muted">On May 25, 2020, my life shattered as I learned of the tragic passing of ...</small></p>
                        <div class="mb-2" style="height: 3px; background-color: #f0edeb; width: 100%">
                            <div style="height: 100%; width: 20%; background-color: #00b964"></div>
                        </div>
                        <h6 class="card-text text-brown float-left">$1.5 M<br>
                            <p style="font-size: 12px !important;" class="default-p-text-color">raised of $13.7 M</p></h6>
                        <h6 class="card-text text-brown float-right">20%</h6>
                        <hr class="mt-5">
                        <p class="card-text default-p-text-color"><small class="text-muted"><i class="fa fa-clock-o text-green" style="font-size: 15px" aria-hidden="true"></i>17 Remaining Days</small></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-3">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/x4.png')}}" alt="Card image cap">
                    <div class="card-body pb-0">
                        <p class="card-text text-green">Toronto, Canada</p>
                        <h5 class="card-title text-brown">Study free Donation</h5>
                        <p class="card-text default-p-text-color"><small class="text-muted">I need money for my upcomming semester, as I'm out of mone...</small></p>
                        <div class="mb-2" style="height: 3px; background-color: #f0edeb; width: 100%">
                            <div style="height: 100%; width: 96%; background-color: #00b964"></div>
                        </div>
                        <h6 class="card-text text-brown float-left">$47,000<br>
                            <p style="font-size: 12px !important;" class="default-p-text-color">raised of $50,000</p></h6>
                        <h6 class="card-text text-brown float-right">96%</h6>
                        <hr class="mt-5">
                        <p class="card-text default-p-text-color"><small class="text-muted"><i class="fa fa-clock-o text-green" style="font-size: 15px" aria-hidden="true"></i>17 Remaining Days</small></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-3">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/x5.png')}}" alt="Card image cap">
                    <div class="card-body pb-0">
                        <p class="card-text text-green">New York, NY</p>
                        <h5 class="card-title text-brown">Maria Walks for Life</h5>
                        <p class="card-text default-p-text-color"><small class="text-muted">Meet Maria, Maria is 9 year old, She is bright, kind-hearted and full...</small></p>
                        <div class="mb-2" style="height: 3px; background-color: #f0edeb; width: 100%">
                            <div style="height: 100%; width: 96%; background-color: #00b964"></div>
                        </div>
                        <h6 class="card-text text-brown float-left">$47,000<br>
                            <p style="font-size: 12px !important;" class="default-p-text-color">raised of $50,000</p></h6>
                        <h6 class="card-text text-brown float-right">96%</h6>
                        <hr class="mt-5">
                        <p class="card-text default-p-text-color"><small class="text-muted"><i class="fa fa-clock-o text-green" style="font-size: 15px" aria-hidden="true"></i>17 Remaining Days</small></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-3">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/x6.png')}}" alt="Card image cap">
                    <div class="card-body pb-0">
                        <p class="card-text text-green">Islamabad, Pakistan</p>
                        <h5 class="card-title text-brown">Medical Bill Payment</h5>
                        <p class="card-text default-p-text-color"><small class="text-muted">Hello everyone You are requested to please send me Donation for this...</small></p>
                        <div class="mb-2" style="height: 3px; background-color: #f0edeb; width: 100%">
                            <div style="height: 100%; width: 96%; background-color: #00b964"></div>
                        </div>
                        <h6 class="card-text text-brown float-left">$47,000<br>
                            <p style="font-size: 12px !important;" class="default-p-text-color">raised of $50,000</p></h6>
                        <h6 class="card-text text-brown float-right">96%</h6>
                        <hr class="mt-5">
                        <p class="card-text default-p-text-color"><small class="text-muted"><i class="fa fa-clock-o text-green" style="font-size: 15px" aria-hidden="true"></i>17 Remaining Days</small></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-3">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/x7.png')}}" alt="Card image cap">
                    <div class="card-body pb-0">
                        <p class="card-text text-green">New York, NY</p>
                        <h5 class="card-title text-brown">Help Lisa Edwards</h5>
                        <p class="card-text default-p-text-color"><small class="text-muted">I'm looking for financial help because recently I injuired my spine...</small></p>
                        <div class="mb-2" style="height: 3px; background-color: #f0edeb; width: 100%">
                            <div style="height: 100%; width: 20%; background-color: #00b964"></div>
                        </div>
                        <h6 class="card-text text-brown float-left">$1.5 M<br>
                            <p style="font-size: 12px !important;" class="default-p-text-color">raised of 13.7 M</p></h6>
                        <h6 class="card-text text-brown float-right">20%</h6>
                        <hr class="mt-5">
                        <p class="card-text default-p-text-color"><small class="text-muted"><i class="fa fa-clock-o text-green" style="font-size: 15px" aria-hidden="true"></i>17 Remaining Days</small></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 py-3">
                <div class="card border-0">
                    <img class="card-img-top" src="{{asset('assets/images/x8.png')}}" alt="Card image cap">
                    <div class="card-body pb-0">
                        <p class="card-text text-green">Toronto, Canada</p>
                        <h5 class="card-title text-brown">Covid-19 Relief Fund</h5>
                        <p class="card-text default-p-text-color"><small class="text-muted">If you have had the pleasure of knowing the Coetho family...</small></p>
                        <div class="mb-2" style="height: 3px; background-color: #f0edeb; width: 100%">
                            <div style="height: 100%; width: 96%; background-color: #00b964"></div>
                        </div>
                        <h6 class="card-text text-brown float-left">$47,000<br>
                            <p style="font-size: 12px !important;" class="default-p-text-color">raised of $50,000</p></h6>
                        <h6 class="card-text text-brown float-right">96%</h6>
                        <hr class="mt-5">
                        <p class="card-text default-p-text-color"><small class="text-muted"><i class="fa fa-clock-o text-green" style="font-size: 15px" aria-hidden="true"></i>17 Remaining Days</small></p>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-info my-3 default-button-background">Browse More Fundraisers</a>
        </div>
    </div>
</section>
<section id="fr-index" class="my-3" style="background-image: url('{{asset('assets/images/hands.jpg')}}'); background-repeat: no-repeat; background-size: cover; position: relative">
    <div id="fr-index-overlay"></div>
    <div class="container">
        <div class="row py-5 mx-auto">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <h1 class="text-white" style="font-size: 60px">20k</h1>
                <small style="color: #ffffff">Causes are completed</small>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <h1 class="text-white" style="font-size: 60px">45m</h1>
                <small style="color: #ffffff">Causes Raised Funds</small>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <h1 class="text-white" style="font-size: 60px">20+</h1>
                <small style="color: #ffffff">Categories Served</small>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6">
                <h1 class="text-white" style="font-size: 60px">200k</h1>
                <small style="color: #ffffff">Happy Customer</small>
            </div>
        </div>
    </div>
</section>
<section id="fr-trusted">
    <div class="container">
        <div class="row mx-auto">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <h2 class="text-brown">Over 50,000 people have <br>used and trusted 1 Difference</h2>
                <p class="default-p-text-color">
                    Through the power of giving, we make the world a better place,join<br>
                    today in our effort to make some feel blessed today and Donate<br>
                    as little as $1 to avoid the scam donations.
                </p>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                        <i class="fa fa-check" aria-hidden="true" style="color: #00b964"></i>&nbsp;Safe and secure
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                        <i class="fa fa-check" aria-hidden="true" style="color: #00b964"></i>&nbsp;Fast easy and simple to use..
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                        <i class="fa fa-check" aria-hidden="true" style="color: #00b964"></i>&nbsp;Raise fund with 1 Difference
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                        <i class="fa fa-check" aria-hidden="true" style="color: #00b964"></i>&nbsp;Fast track to the global market
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                        <i class="fa fa-check" aria-hidden="true" style="color: #00b964"></i>&nbsp;Donate as little as $1
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 py-2">
                        <i class="fa fa-check" aria-hidden="true" style="color: #00b964"></i>&nbsp;Most Money Raised
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <img src="{{asset('assets/images/trusted.png')}}" class="img-fluid float-right" style="border-radius: 10px">
            </div>
        </div>
    </div>
</section>
<section id="fr-testimonial" class="my-5" style="background-color: #fafafa">
    <div class="container py-4">
        <b class="text-green">Testimonial</b><br>
        <span>
            <b class="text-brown " style="font-size: 35px">Fundraising Stories</b>
             <span class="float-right">
                 <i class="fa fa-arrow-left p-2 mx-2" style="background-color: #00b964;color: #ffffff;border-radius: 5px"></i><i class="fa fa-arrow-right p-2"  style="background-color: #00b964;color: #ffffff;border-radius: 5px"></i>
             </span>
        </span>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{asset('assets/images/user.jpg')}}" width="50" height="50" style="border-radius: 25px">
                        </div>
                        <div class="col-10">
                            <b class="text-brown">Jaquan Hart</b><br>
                            <small class="default-p-text-color">VP Manager - Lizlle Company</small>
                        </div>
                        <div class="col-12 py-2">
                            <small class="default-p-text-color">These companies release their own version of the operating system with minor changes and yet.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{asset('assets/images/user.jpg')}}" width="50" height="50" style="border-radius: 25px">
                        </div>
                        <div class="col-10">
                            <b class="text-brown">Jaquan Hart</b><br>
                            <small class="default-p-text-color">VP Manager - Lizlle Company</small>
                        </div>
                        <div class="col-12 py-2">
                            <small class="default-p-text-color">These companies release their own version of the operating system with minor changes and yet.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card p-3">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{asset('assets/images/user.jpg')}}" width="50" height="50" style="border-radius: 25px">
                        </div>
                        <div class="col-10">
                            <b class="text-brown">Jaquan Hart</b><br>
                            <small class="default-p-text-color">VP Manager - Lizlle Company</small>
                        </div>
                        <div class="col-12 py-2">
                            <small class="default-p-text-color">These companies release their own version of the operating system with minor changes and yet.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="fr-ready" class="mt-3" style="background-image: url('{{asset('assets/images/start-bg.png')}}'); background-repeat: no-repeat; background-size: cover; position: relative">
    <div id="fr-ready-overlay"></div>
    <div class="container">
        <div class="row py-5 mx-auto">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <h1 class="text-white">Ready to start fundraising?</h1>
                <p style="color: #ffffff">Find a cause yu believe in and make good thing happen.</p>
                <a href="#" style="background-color: #ffffff;color: #00b964;border: none; border-radius: 10px" class="btn btn-success px-4">Get Started</a>
            </div>
        </div>
    </div>
</section>
<section id="footer" style="background-color: #2e3c4b">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('assets/images/logo/logo.png')}}" class="img-fluid pb-2">
                <b style="color: #ffffff; font-size: 25px">1 Difference</b>
                <p class="pt-3" style="color: #ffffff">Through the power of giving we make the<br> world best place, join today in our<br> effort to make someone feel blessed today.</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-facebook-square" style="color: #e2e8f0 !important;font-size: 25px"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-twitter" style="color: #e2e8f0 !important;font-size: 25px"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-instagram" style="color: #e2e8f0 !important;font-size: 25px"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa fa-pinterest" style="color: #e2e8f0 !important;font-size: 25px"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <b style="color: #ffffff;">Quick Links</b>
                        <ul class="list-group pt-4" style="list-style-type: none;">
                            <li class="pb-1"><a href="#" style="color: #ffffff">How its Works</a></li>
                            <li class="pb-1"><a href="#" style="color: #ffffff">Login</a></li>
                            <li class="pb-1"><a href="#" style="color: #ffffff">Register</a></li>
                            <li class="pb-1"><a href="#" style="color: #ffffff">Success Stories</a></li>
                            <li class="pb-1"><a href="#" style="color: #ffffff">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <b style="color: #ffffff;">Help</b>
                        <ul class="list-group pt-4" style="list-style-type: none;">
                            <li class="pb-1"><a href="#" style="color: #ffffff">Terms & Conditions</a></li>
                            <li class="pb-1"><a href="#" style="color: #ffffff">Privacy & Policy</a></li>
                            <li class="pb-1"><a href="#" style="color: #ffffff">FAQ</a></li>
                            <li class="pb-1"><a href="#" style="color: #ffffff">Tutorials</a></li>
                            <li class="pb-1"><a href="#" style="color: #ffffff">How it works</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                        <b style="color: #ffffff;">Newsleter</b>
                        <p class="pt-3" style="color: #ffffff; font-size: 15px">Join us in our mission! Subscribe<br> to our weekly email campaign</p>
                        <form method="post" action="#" style="position: relative">
                            <input type="text" name="newsleter" class="form-control" placeholder="Your email" style="background-color: #2a3746; border: none">
                            <button type="button" class="btn p-0" style="border: none; position: absolute; right: 0;top: 0;width: 35px;height: 35px;">
                                <img src="{{asset('assets/images/email.png')}}" style="height: 100%; width: 100%; border-radius: 4px">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr style="background-color: #d5d8db">
                <p style="text-align: center; color: #d5d8db">
                    &copy; 2021 Copyright All Rights Reserved by Waleed Shabbir
                </p>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>
