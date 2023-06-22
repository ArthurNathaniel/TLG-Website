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
                        <h4>Governance</h4>
                    </div>
                </div>

            </div>
    </section>

    <section>
        <div class="guide">
            <h1 class="text-center">Governance</h1>
        </div>
    </section>
    <section class="mt-5">
        <div class="guidelines">
            <h3>Board of Directors</h3>
            <p>
                The board of directors (the "Board") is primarily responsible for supervising the management of
                the Corporation's business and affairs. Its authority is determined by the provisions of the Canada
                Business Corporations Act and by the Corporation's By-laws. In addition, the Board's activities are
                governed by a set of procedural rules which are adopted by the Board. The Board regularly reviews its
                guidelines and policies and, not less than annually, considers how its corporate governance practices
                align with guidelines established by the Canadian regulatory authorities having authority, including
                the Toronto Stock Exchange.
                <br>
                The Board meets as required to conduct its business, which includes the approval of the quarterly and
                annual audited consolidated financial statements of the Corporation.
                <br>
                The Board's Chairman, together with the lead director, is responsible for the management, development
                and effective performance of the Board, for monitoring the Corporation's development through regular
                contact with the President and CEO, and for ensuring that the Board regularly receives reports
                concerning the development of the Company's business and operations, including progress in respect of
                profits, liquidity and significant contractual matters.
            </p>
        </div>
        <div class="guidelines">
            <h3>Chairman and Lead Director Position Description</h3>
            <p>
                The Chairman of the Board (the "Chairman") is responsible for the management, the development and the
                effective performance of the Board of Directors and for providing leadership to the Board for all aspects
                of its work. The Chairman acts in an advisory capacity to the Chief Executive Officer (hereinafter also
                referred to as the "CEO") and to other officers on all matters concerning the interests and management of
                the Corporation and, in coordination with the CEO, may play a role in the Corporation's external relationships.
            </p>
        </div>
        <div class="guidelines">
            <h3>Audit Committee</h3>
            <p>
                The Audit Committee consists of three Board members, each of whom is independent and financially literate. The audit
                committee reviews and reports to the Board on the integrity of the consolidated financial statements of the
                Company. The Audit Committee ensures the Company has designed and implemented effective internal financial
                controls and reviews the compliance with regulatory and statutory requirements as they related to the financial
                statements, taxation matters and disclosure of material facts.
            </p>
        </div>
        <div class="guidelines">
            <h3>Corporate Governance and Nominating Committee</h3>
            <p>
                This Committee is comprised of three non-executive Board members and assists the Board in identifying
                qualified individuals for Board membership, develops and implements corporate governance guidelines,
                and reports annually to the Corporation's shareholders on the Corporation's system of corporate
                governance.
            </p>
        </div>

        <div class="guidelines">
            <h3>Health, Safety, Environment and Community Committee</h3>
            <p>
                This Committee is comprised of three Board members, a majority of whom are non-executive Board members.
                This Committee assists the Board in its oversight of health, safety, environment and community risks,
                the Corporation's performance in relation to health, safety, environmental and community matters, and
                the Corporation's compliance with applicable legal and regulatory requirements associated with health,
                safety, environmental and community matters.
            </p>
        </div>

        <div class="guidelines">
            <h3>Human Resources / Compensation Committee</h3>
            <p>
                The Human Resources/Compensation Committee is comprised of three non-executive members of the Board.
                The Human Resources/Compensation Committee is responsible for administering the Corporation's
                executive compensation program and implements and oversees human resources and compensation policies
                approved by the Board. The Committee meets not less than annually.
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