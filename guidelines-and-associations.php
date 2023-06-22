<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guidelines & Associations | TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="guidelines-and-associations.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <section>
        <div class="swiper  mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="./images/home-one.jpg" alt="">
                    <div class="swiper-text">
                        <h4>Guidelines & Associations </h4>
                    </div>
                </div>

            </div>
    </section>

    <section>
        <div class="guide">
            <h1 class="text-center">Our Guidelines, Memberships and Associations</h1>
            <p>
                Under the Responsible Mining Framework we commit to develop and implement management systems
                and operating practices that take into consideration applicable international guidelines,
                including:
            </p>
        </div>
    </section>

    <section>
        <div class="guidelines">
            <h3>Guidelines</h3>
            <p>
                <i class="fa-solid fa-square-check"></i>
                OECD Guidelines for Multinational Enterprises
            </p>
            <p>
                <i class="fa-solid fa-square-check"></i>
                UN Global Compact
            </p>
            <p>
                <i class="fa-solid fa-square-check"></i>
                UN Guiding Principles on Business and Human Rights
            </p>
            <p>
                <i class="fa-solid fa-square-check"></i>
                CDP Climate Change (aligned with the voluntary Task Force on Climate-related Financial Disclosures (TCFD) recommendations)
            </p>
            <p>
                <i class="fa-solid fa-square-check"></i>
                Principles on Security and Human Rights
            </p>
            <p>
                <i class="fa-solid fa-square-check"></i>
                Ghana Forest Ministry Assesment
            </p>
            <p>
                <i class="fa-solid fa-square-check"></i>
                International Finance Corporation (IFC) Performance Standards on Social and Environmental Sustainability
            </p>
            <p>
                <i class="fa-solid fa-square-check"></i>
                Global Reporting Initiative
            </p>
            <p>
                <i class="fa-solid fa-square-check"></i>
                Prospectors and Developers Association of Canada
            </p>
        </div>
    </section>

    <div class="guide">
        <p>
            Involvement with memberships and industry associations enables TLG Trans Company Limited to keep current regarding matters of public policy, emerging-sector and sustainability trends, regulatory updates, and the sharing of industry best practices.
        </p>
    </div>


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