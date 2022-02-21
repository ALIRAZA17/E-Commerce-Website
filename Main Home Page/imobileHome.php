<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../HTML & CSS/Main Home Page/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!---Icons Libabrary-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>iMobile</title>
</head>

<body>
    <?php
  include 'C:\xampp\htdocs\HTML & CSS\Partials\navbar.php';
  ?>

        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">User Login</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="loginInputEmail1"
                    aria-describedby="emailHelp"
                  />
                </div>
                <div class="mb-3">
                  <label for="loginPassword" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="loginPassword" />
                                    <a href="#"><small class="text-primary">Forget Password?</small></a
                  >
                  <br />
                  <button type="button" class="btn btn-primary float-end">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <div class="container signupoption">
              <small class="text-muted"
                >New Customer? <a href="../SignUp/signup.php"> SignUp</a></small>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <!---Carousal Slider-->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/1.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Smart Phones</h2>
                            <p>Iphones, Samsung, Xioami, Vivo etc.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/2.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Smart Phones</h2>
                            <p>Iphones, Samsung, Xioami, Vivo etc.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/3.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Smart Phones</h2>
                            <p>Iphones, Samsung, Xioami, Vivo etc.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/4.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Tablets</h2>
                            <p>I Pads, Samsung Tablets, Huawei Tabs etc.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/5.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Mobile Accessories</h2>
                            <p>Earphones, Headphones, Power Bank, Battery, Screen Protector</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../images/6.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Mobile Accessories</h2>
                            <p>Earphones, Headphones, Power Bank, Battery, Screen Protector</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
            </div>

            <!--Hot Topics Container-->
            <div class="container">
                <h1 class="mx-4 my-4">Trending</h1>
                <div class="d-flex">
                    <div class="p-2">
                        <img src="../images/hottopic.jpg" alt="" />
                    </div>

                    <div class="container-fluid" id="caroualHottopicouterContainer">
                        <div id="carouselHotTopics" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="d-flex">
                                        <div class="p-2">
                                            <div class="card" style="width: 18rem">
                                                <img src="../images/iphone13.jpg" class="card-img-top" alt="..." />
                                                <div class="card-body">
                                                    <h5 class="card-title">iPhone 13</h5>
                                                    <p class="card-text">
                                                        APPLE IPHONE13 (SINGLE SIM + ESIM PTA APPROVED) WITH OFFICIAL AND INTERNATIONAL WARRANTY
                                                    </p>
                                                    <h6>Rs: 206,000</h6>
                                                    <a href="#" class="btn btn-primary">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="card" style="width: 18rem">
                                                <img src="../images/iphone13pro.jpg" class="card-img-top" alt="..." />
                                                <div class="card-body">
                                                    <h5 class="card-title">iPhone13 Pro</h5>
                                                    <p class="card-text">
                                                        APPLE IPHONE13 PRO (SINGLE SIM + ESIM PTA APPROVED) WITH OFFICIAL AND INTERNATIONAL WARRANTY
                                                    </p>
                                                    <h6>Rs: 294,000</h6>
                                                    <a href="#" class="btn btn-primary">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex">
                                        <div class="p-2">
                                            <div class="card" style="width: 18rem">
                                                <img src="../images/iphone12promax.jpg" class="card-img-top" alt="..." />
                                                <div class="card-body">
                                                    <h5 class="card-title">iPhone12 Pro Max</h5>
                                                    <p class="card-text">
                                                        APPLE IPHONE12 PRO MAX (SINGLE SIM + ESIM PTA APPROVED) WITH OFFICIAL AND INTERNATIONAL WARRANTY
                                                    </p>
                                                    <h6>Rs: 233,770</h6>
                                                    <a href="#" class="btn btn-primary">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="card" style="width: 18rem">
                                                <img src="../images/iphone12pro.jpg" class="card-img-top" alt="..." />
                                                <div class="card-body">
                                                    <h5 class="card-title">iPhone12 Pro</h5>
                                                    <p class="card-text">
                                                        APPLE IPHONE12 PRO (SINGLE SIM + ESIM PTA APPROVED) WITH OFFICIAL AND INTERNATIONAL WARRANTY
                                                    </p>
                                                    <h6>Rs: 218,735</h6>
                                                    <a href="#" class="btn btn-primary">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="d-flex">
                                        <div class="p-2">
                                            <div class="card" style="width: 18rem">
                                                <img src="../images/iphone12.jpg" class="card-img-top" alt="..." />
                                                <div class="card-body">
                                                    <h5 class="card-title">iPhone12</h5>
                                                    <p class="card-text">
                                                        APPLE IPHONE12 (SINGLE SIM + ESIM PTA APPROVED) WITH OFFICIAL AND INTERNATIONAL WARRANTY
                                                    </p>
                                                    <h6>Rs: 173,630</h6>
                                                    <a href="#" class="btn btn-primary">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="card" style="width: 18rem">
                                                <img src="../images/iphone12mini.jpg" class="card-img-top" alt="..." />
                                                <div class="card-body">
                                                    <h5 class="card-title">iPhone12 Mini</h5>
                                                    <p class="card-text">
                                                        APPLE IPHONE12 MINI (SINGLE SIM + ESIM PTA APPROVED) WITH OFFICIAL AND INTERNATIONAL WARRANTY
                                                    </p>
                                                    <h6>Rs: 155,599</h6>
                                                    <a href="#" class="btn btn-primary">Quick View</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
                        </div>
                    </div>
                </div>
            </div>

            <di class="container">
                <h2 class="mt-4 mx-4 px-4">On Sale</h2>
                <hr class="featurette-divider mx-5" />
                <!--Container 1 for samsung-->
                <div class="card container salescontainer py-4">
                    <div class="row featurette container1">
                        <div class="col-md-7">
                            <h2 class="featurette-heading text-primary">
                                SAMSUNG GALAXY S20 ULTRA 5G 512GB 16GB RAM
                            </h2>
                            <p class="mt-2 px-2 py-1 bg-danger text-light discounttag">
                                Save Rs. 10,000
                            </p>
                            <small class="text-muted"><ul>
                <li>Display 6.90-inch (1440x3200)</li>
                <li>OS Android 10.</li>
                <li>Processor Samsung Exynos 990.</li>
                <li>Front Camera 40MP.</li>
                <li>Rear Camera 108MP + 48MP + 12MP + Depth.</li>
                <li>RAM 16GB.</li>
                <li>Storage 512GB.</li>
                <li>Battery Capacity 5000mAh.</li>
              </ul>
            </small>
                            <hr class="featurette-divider my-2" />
                            <p id="oppochoosedcolor" class="mt-2 mx-4">Color:</p>
                            <div class="container">
                                <input type="radio" class="btn-check" name="colorchoice" id="color1" autocomplete="off" checked />
                                <label class="btn btn-outline-info" for="color1">Cosmic Gray</label
              >

              <input
                type="radio"
                class="btn-check"
                name="colorchoice"
                id="color2"
                autocomplete="off"
              />
              <label class="btn btn-outline-info" for="color2"
                >Cloud Blue</label
              >
              <input
                type="radio"
                class="btn-check"
                name="colorchoice"
                id="color3"
                autocomplete="off"
              />
              <label class="btn btn-outline-info" for="color3"
                >Cloud White</label
              >
            </div>
            <h5 class="mx-4 mt-4">
              Price:<span class="mx-4 text-danger" id="pricetag"
                >118,000
                <small class="mx-5 text-decoration-line-through text-muted"
                  >125,000</small
                ></span
              >
            </h5>
            <div class="container d-flex">
              <div class="py-4">
                <button type="button" class="btn btn-outline-dark">
                  Add To Cart
                </button>
              </div>
              <div class="mx-4 py-4">
                <button type="button" class="btn btn-outline-dark">
                  Purchase Now
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <img
              src="../images/samsung500x500.jpg"
              class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
              width="500"
              height="500"
              aria-label="Placeholder: 500x500"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              alt=""
            />
          </div>
        </div>
      </div>

      <!--Container 2 for oppo-->
      <div class="container card">
        <!-- <hr class="featurette-divider my-5" /> -->
        <div class="row featurette container2 py-4">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading text-primary">
              OPPO RENO 6 128GB 8GB RAM
            </h2>
            <p class="mt-2 px-2 py-1 bg-danger text-light discounttag">
              Save Rs. 10,000
            </p>
            <small class="text-muted"
              ><ul>
                <li>Display 6.40-inch (1080x2340)</li>
                <li>Processor Qualcomm Snapdragon 710</li>
                <li>Front Camera 16MP</li>
                <li>Rear Camera 48MP + 5MP</li>
                <li>RAM 8GB</li>
                <li>Storage 128GB</li>
                <li>Battery Capacity 3765mAh</li>
                <li>OS Android 9.0 Pie</li>
              </ul>
            </small>
            <hr class="featurette-divider my-2" />
            <p id="oppochoosedcolor" class="mt-2 mx-4">Color:</p>
            <div class="container mt-0">
              <input
                type="radio"
                class="btn-check"
                name="oppocolorchoice"
                id="oppocolor1"
                autocomplete="off"
                checked
              />
              <label class="btn btn-outline-info" for="oppocolor1"
                >Cosmic Gray</label
              >

              <input
                type="radio"
                class="btn-check"
                name="oppocolorchoice"
                id="oppocolor2"
                autocomplete="off"
              />
              <label class="btn btn-outline-info" for="oppocolor2"
                >Cloud Blue</label
              >
              <input
                type="radio"
                class="btn-check"
                name="oppocolorchoice"
                id="oppocolor3"
                autocomplete="off"
              />
              <label class="btn btn-outline-info" for="oppocolor3"
                >Cloud White</label
              >
            </div>

            <h5 class="mx-4 my-4">
              Price:<span class="mx-4 text-danger" id="pricetag"
                >118,000
                <small class="mx-5 text-decoration-line-through text-muted"
                  >125,000</small
                >
              </span>
            </h5>

            <div class="container d-flex">
              <div class="py-4">
                <button type="button" class="btn btn-outline-dark">
                  Add To Cart
                </button>
              </div>
              <div class="mx-4 py-4">
                <button type="button" class="btn btn-outline-dark">
                  Purchase Now
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <img
              src="../images/opporeno6_500x500.jpg"
              class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
              width="500"
              height="500"
              aria-label="Placeholder: 500x500"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
              alt=""
            />
          </div>
        </div>
      </div>
    </di>

    <!--Top Selling Products-->
    <div class="container topsells">
      <hr class="featurette-divider my-5" />
      <h2>Top Selling Products</h2>

      <div class="mt-4 d-flex flex-row">
        <div class="p-2">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="../images/iphone12.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">SAMSUNG GALAXY A70</h4>
                  <p class="card-text">
                    <span
                      >Storage: <small class="text-muted">128GB</small></span
                    >
                    <br />
                    <span>RAM: <small class="text-muted">8GB</small></span>
                    <br />

                    <span
                      >Battery:
                      <small class="text-muted">Li-Po 4500 mAh</small></span
                    >
                  </p>
                  <h5 class="bg-danger text-light text-center discounttag">
                    Rs. 70,000
                  </h5>
                  <small class="text-muted text-decoration-line-through"
                    >75,999</small
                  >

                  <a href="#" class="btn btn-outline-success float-end mb-3"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="../images/iphone12.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">SAMSUNG GALAXY A70</h4>
                  <p class="card-text">
                    <span
                      >Storage: <small class="text-muted">128GB</small></span
                    >
                    <br />
                    <span>RAM: <small class="text-muted">8GB</small></span>
                    <br />
                    <!-- <span
                      >Front Camera:
                      <small class="text-muted">45MP</small></span
                    ><br />
                    <span
                      >Selfie Camera:
                      <small class="text-muted">32MP</small></span
                    ><br /> -->
                    <span
                      >Battery:
                      <small class="text-muted">Li-Po 4500 mAh</small></span
                    >
                  </p>
                  <h5 class="bg-danger text-light text-center discounttag">
                    Rs. 70,000
                  </h5>
                  <small class="text-muted text-decoration-line-through"
                    >75,999</small
                  >

                  <a href="#" class="btn btn-outline-success float-end mb-3"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="../images/iphone12.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">SAMSUNG GALAXY A70</h4>
                  <p class="card-text">
                    <span
                      >Storage: <small class="text-muted">128GB</small></span
                    >
                    <br />
                    <span>RAM: <small class="text-muted">8GB</small></span>
                    <br />
                    <!-- <span
                      >Front Camera:
                      <small class="text-muted">45MP</small></span
                    ><br />
                    <span
                      >Selfie Camera:
                      <small class="text-muted">32MP</small></span
                    ><br /> -->
                    <span
                      >Battery:
                      <small class="text-muted">Li-Po 4500 mAh</small></span
                    >
                  </p>
                  <h5 class="bg-danger text-light text-center discounttag">
                    Rs. 70,000
                  </h5>
                  <small class="text-muted text-decoration-line-through"
                    >75,999</small
                  >

                  <a href="#" class="btn btn-outline-success float-end mb-3"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex flex-row">
        <div class="p-2">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="../images/iphone12.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">SAMSUNG GALAXY A70</h4>
                  <p class="card-text">
                    <span
                      >Storage: <small class="text-muted">128GB</small></span
                    >
                    <br />
                    <span>RAM: <small class="text-muted">8GB</small></span>
                    <br />
                    <!-- <span
                      >Front Camera:
                      <small class="text-muted">45MP</small></span
                    ><br />
                    <span
                      >Selfie Camera:
                      <small class="text-muted">32MP</small></span
                    ><br /> -->
                    <span
                      >Battery:
                      <small class="text-muted">Li-Po 4500 mAh</small></span
                    >
                  </p>
                  <h5 class="bg-danger text-light text-center discounttag">
                    Rs. 70,000
                  </h5>
                  <small class="text-muted text-decoration-line-through"
                    >75,999</small
                  >

                  <a href="#" class="btn btn-outline-success float-end mb-3"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="../images/iphone12.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">SAMSUNG GALAXY A70</h4>
                  <p class="card-text">
                    <span
                      >Storage: <small class="text-muted">128GB</small></span
                    >
                    <br />
                    <span>RAM: <small class="text-muted">8GB</small></span>
                    <br />
                    <!-- <span
                      >Front Camera:
                      <small class="text-muted">45MP</small></span
                    ><br />
                    <span
                      >Selfie Camera:
                      <small class="text-muted">32MP</small></span
                    ><br /> -->
                    <span
                      >Battery:
                      <small class="text-muted">Li-Po 4500 mAh</small></span
                    >
                  </p>
                  <h5 class="bg-danger text-light text-center discounttag">
                    Rs. 70,000
                  </h5>
                  <small class="text-muted text-decoration-line-through"
                    >75,999</small
                  >

                  <a href="#" class="btn btn-outline-success float-end mb-3"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="../images/iphone12.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">SAMSUNG GALAXY A70</h4>
                  <p class="card-text">
                    <span
                      >Storage: <small class="text-muted">128GB</small></span
                    >
                    <br />
                    <span>RAM: <small class="text-muted">8GB</small></span>
                    <br />
                    <!-- <span
                      >Front Camera:
                      <small class="text-muted">45MP</small></span
                    ><br />
                    <span
                      >Selfie Camera:
                      <small class="text-muted">32MP</small></span
                    ><br /> -->
                    <span
                      >Battery:
                      <small class="text-muted">Li-Po 4500 mAh</small></span
                    >
                  </p>
                  <h5 class="bg-danger text-light text-center discounttag">
                    Rs. 70,000
                  </h5>
                  <small class="text-muted text-decoration-line-through"
                    >75,999</small
                  >

                  <a href="#" class="btn btn-outline-success float-end mb-3"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex flex-row">
        <div class="p-2">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="../images/iphone12.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">SAMSUNG GALAXY A70</h4>
                  <p class="card-text">
                    <span
                      >Storage: <small class="text-muted">128GB</small></span
                    >
                    <br />
                    <span>RAM: <small class="text-muted">8GB</small></span>
                    <br />
                    <!-- <span
                      >Front Camera:
                      <small class="text-muted">45MP</small></span
                    ><br />
                    <span
                      >Selfie Camera:
                      <small class="text-muted">32MP</small></span
                    ><br /> -->
                    <span
                      >Battery:
                      <small class="text-muted">Li-Po 4500 mAh</small></span
                    >
                  </p>
                  <h5 class="bg-danger text-light text-center discounttag">
                    Rs. 70,000
                  </h5>
                  <small class="text-muted text-decoration-line-through"
                    >75,999</small
                  >

                  <a href="#" class="btn btn-outline-success float-end mb-3"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="../images/iphone12.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">SAMSUNG GALAXY A70</h4>
                  <p class="card-text">
                    <span
                      >Storage: <small class="text-muted">128GB</small></span
                    >
                    <br />
                    <span>RAM: <small class="text-muted">8GB</small></span>
                    <br />
                    <!-- <span
                      >Front Camera:
                      <small class="text-muted">45MP</small></span
                    ><br />
                    <span
                      >Selfie Camera:
                      <small class="text-muted">32MP</small></span
                    ><br /> -->
                    <span
                      >Battery:
                      <small class="text-muted">Li-Po 4500 mAh</small></span
                    >
                  </p>
                  <h5 class="bg-danger text-light text-center discounttag">
                    Rs. 70,000
                  </h5>
                  <small class="text-muted text-decoration-line-through"
                    >75,999</small
                  >

                  <a href="#" class="btn btn-outline-success float-end mb-3"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-2">
          <div class="card mb-3" style="max-width: 540px">
            <div class="row g-0">
              <div class="col-md-4">
                <img
                  src="../images/iphone12.jpg"
                  class="img-fluid rounded-start"
                  alt="..."
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h4 class="card-title">SAMSUNG GALAXY A70</h4>
                  <p class="card-text">
                    <span
                      >Storage: <small class="text-muted">128GB</small></span
                    >
                    <br />
                    <span>RAM: <small class="text-muted">8GB</small></span>
                    <br />
                    <!-- <span
                      >Front Camera:
                      <small class="text-muted">45MP</small></span
                    ><br />
                    <span
                      >Selfie Camera:
                      <small class="text-muted">32MP</small></span
                    ><br /> -->
                    <span
                      >Battery:
                      <small class="text-muted">Li-Po 4500 mAh</small></span
                    >
                  </p>
                  <h5 class="bg-danger text-light text-center discounttag">
                    Rs. 70,000
                  </h5>
                  <small class="text-muted text-decoration-line-through"
                    >75,999</small
                  >

                  <a href="#" class="btn btn-outline-success float-end mb-3"
                    >View Details</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Footer-->
    <div class="container footer mt-5">
      <footer class="py-5">
        <div class="row">
          <div class="col-2">
            <h5>Section</h5>
            <ul class="nav flex-column footercontainers">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Features</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">FAQs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">About</a>
              </li>
            </ul>
          </div>

          <div class="col-2">
            <h5>Section</h5>
            <ul class="nav flex-column footercontainers">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Features</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">FAQs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">About</a>
              </li>
            </ul>
          </div>

          <div class="col-2">
            <h5>Section</h5>
            <ul class="nav flex-column footercontainers">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Home</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Features</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">Pricing</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">FAQs</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted">About</a>
              </li>
            </ul>
          </div>

          <div class="col-4 offset-1">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of whats new and exciting from us.</p>
              <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden"
                  >Email address</label
                >
                <input
                  id="newsletter1"
                  type="text"
                  class="form-control"
                  placeholder="Email address"
                />
                <button class="btn btn-primary" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex justify-content-between py-4 my-4 border-top">
          <p>© 2021 Company, Inc. All rights reserved.</p>
        </div>
      </footer>
    </div>
    <!---Chat Button-->
    <button
      tabindex="0"
      class="btn mb-4 fixed-bottom chatwithus bi bi-chat"
      role="button"
      data-bs-toggle="popover"
      data-bs-trigger="focus"
      title="Customer Service"
      data-bs-content="And here's some amazing content. It's very engaging. Right?"
    >
      <svg
        xmlns="www.w3.org/2000/svg"
        width="25"
        height="25"
        fill="currentColor"
        class="bi bi-chat-fill"
        viewBox="0 0 16 16"
        style="margin-right: 7px;"
      >
        <path
          d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"
        />
      </svg>
      Chat
    </button>

   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- Code to use popover buttons -->
    <script>
      var popoverTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="popover"]')
      );
      var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
      });
    </script>
    <script>
      var popover = new bootstrap.Popover(
        document.querySelector(".example-popover"),
        {
          container: "body",
        }
      );
    </script>
    <script>
      var popover = new bootstrap.Popover(
        document.querySelector(".popover-dismiss"),
        {
          trigger: "focus",
        }
      );
    </script>
  </body>
</html>