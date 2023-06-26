<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mining Consultancy | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mining-consultancy.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper  mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/mc-bg.png" alt="">
                    <div class="swiper-text">
                        <h4>Mining Consultancy</h4>
                    </div>
                </div>

            </div>
    </section>
    <section>
        <div class="mission-bg">
            <h1 class="text-center">Our Value Proposition and Consultancy</h1>
            <div class="card-grid">
                <div class="card">
                    <img class="card-img-top" src="images/High.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">High Quality Competitive Mines</h4>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Read more <i class="fas fa-angle-double-right"></i> </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel" style="color:#000;">Our Value Proposition and Consultancy</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="color:#000;">
                                <p>
                                    We have <b>high quality competitive Mines</b> with strong margins at all operations.
                                    Our mines have demonstrated operational excellence and a culture of continous
                                    improvemnt throughout the cycle.
                                </p>
                            </div>
                            <div class=" modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img class="card-img-top" src="images/growth.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Financial Strength </h4>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                            Read more <i class="fas fa-angle-double-right"></i> </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel" style="color:#000;">Our Value Proposition and Consultancy</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="color:#000;">
                                <p>
                                    Our proven track record for rigorous investment approach is
                                    focused on value creation. Our <b>Financial Strength</b> gives
                                    us substantial flexibility to respond to opportunities. Choose
                                    us and get the best trade.
                                </p>
                            </div>
                            <div class=" modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="./images/Meaningful.png" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">Meaningful Scale Growth-Oriented</h4>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                            Read more <i class="fas fa-angle-double-right"></i> </button>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel" style="color:#000;">Our Value Proposition and Consultancy</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="color:#000;">
                                <p>
                                    We have
                                    <b> Meaningful Scale and are Growth-Oriented. </b> We are focusing on exploration upside and high value expansion projects at our operations,
                                    while advancing external acquisition initiatives with disciplined criteria.
                                </p>
                            </div>
                            <div class=" modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            }

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>