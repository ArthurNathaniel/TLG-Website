<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Environment | TLG Mining</title>
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
                        <h4>Environment</h4>
                    </div>
                </div>

            </div>
    </section>


    <section class="mt-5">
        <div class="guidelines">
            <h3> <i class="fas fa-globe"></i> Environment</h3>
            <p>
                We observe Effective environmental management that is integral to the success
                of TLG TRANS COMPANY LIMITED Mining’s operations, from day to-day activities on-site,
                to corporate strategic planning. TLG Mining’s operations are committed to compliance
                with applicable laws and regulations.
                <br>
                <br>
                Our Responsible Mining Policy and framework and our Responsible Mining Management System (RMMS).
                This standard replaces the former integrated set of TLG Management System Standards, is an auditable
                specification outlining mandatory requirements for management systems to be implemented at all TLG
                Mining Sites for the management of the TLG aspects of our business.
                <br>
                <br>
                environmental management controls and procedures that are tailored to meet the individual needs
                of each of our operations in their unique environmental settings. We achieve this through effective
                use of environmental impact assessment to identify, quantify, and eliminate or mitigate impacts;
                integration of environmental controls within our operations, with monitoring to evaluate their
                reliability and effectiveness, and to identify potential opportunities for improvement; employment
                of risk assessment and management techniques to minimize the potential for unforeseen environmental
                impacts or incidents; and routine checking and continuous improvement through the annual environmental
                audit process.
            </p>
        </div>

        <div class="guidelines">
            <h3> <i class="fas fa-tint"></i> 
            Water Management</h3>
            <p>
                At TLG Mining, we implement a comprehensive water management planning process to allow us to operate
                without conflict with other water users and associated ecosystems, in accordance with the TLG Mining
                Water Management Group Procedure.
            </p>
        </div>

        <div class="guidelines">
            <h3> 
                <i class="fas fa-trash-alt"></i>
                Waste Management</h3>
            <p>
                Our operations have developed comprehensive waste management plans that specify how the different types
                of non-mineral waste produced by our activities are to be managed, including identification of
                opportunities for waste minimization, recycling and re-use.
            </p>
        </div>

        <div class="guidelines">
            <h3> <i class="fas fa-bolt"></i>
                Energy & Emissions</h3>
            <p>
                At TLG Mining, we seek opportunities to improve our energy use efficiency and decrease our greenhouse
                gas (GHG) emissions. We are also committed to managing other emissions that can be significant
                environmental/social issues for the mining sector, including gaseous emissions, particulates,
                noise and vibration.
            </p>
        </div>

        <div class="guidelines">
            <h3> <i class="fas fa-paw"></i>
                Biodiversity</h3>
            <p>
                The loss of natural habitats in the world has become one of the major threats for biodiversity
                conservation. TLG Mining contributes to biodiversity conservation through the minimization of
                habitat degradation and contributions to habitat restoration during the life of mine cycle.
            </p>
        </div>

        <div class="guidelines">
            <h3>
                <i class="fas fa-cloud"></i>
                Climate Change
            </h3>
            <p>
                Risks and opportunities associated with climate change at our operations have been considered in
                accordance with the Forest Ministry Special Report , which considers a balance across all sources
                of climate change. The potential influence of these changes on our operations, and our approach to
                reducing and/or mitigating these influences can be viewed in our Sustainability Report.
            </p>
        </div>

        <div class="guidelines">
            <h3>
                <i class="fa-solid fa-tree"></i>
                Mine Closure
            </h3>
            <p>
                TLG Mining takes a responsible and integrated approach to mine closure planning, with the principal
                aim being to design, develop, and operate our facilities to minimize their overall social and
                environmental impact and take into consideration their eventual closure. TLG Mining’s sites have
                approved mine closure plans (MCPs), as required by TLG's Group Procedure for Mine Closure Planning.
                The MCPs are developed to a level of detail that reflects the stage of each mine’s lifecycle, and
                they are updated at least every five years, or when required due to operational changes.
            </p>
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