<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Profolio| TLG Mining</title>
    <?php include 'cdn.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="company.css">
</head>

<body>
    <div class="overflow-hidden">

        <?php include 'navbar.php'; ?>
        <section>
            <div class="swiper  mySwiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="./images/about-bg.png" alt="">
                        <div class="swiper-text">
                            <h4>Our Profolio</h4>
                        </div>
                    </div>

                </div>
        </section>
        <!-- <style>
        .construction-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
            padding: 0 5%;
            background-color: salmon;
        }

        .construction-box{
            border: 2px solid ;
            text-align: center;
            display: flex;
            justify-items: center;
            align-items: center;
        }
        .construction-box h3{
            width: 100%;
            text-align: center;
        }
    </style>

    <section>
        <div class="construction-grid">

            <div class="construction-box">
                <h3>Project</h3>
            </div>

            <div class="construction-box">
                <h3>Name of Client & Contact Person</h3>
            </div>

            <div class="construction-box">
                <h3>Value of the Project (US$)</h3>
            </div>

            <div class="construction-box">
                <h3>Contractual Date</h3>
            </div>

            <div class="construction-box">
                <h3>Intended Completed Date</h3>
            </div>

            <div class="construction-box">
                <h3>Actutal Completion Date</h3>
            </div>

        </div>
    </section> -->

        <style>
            #profolio {
                padding: 0 5%;
                margin-top: 50px;
            }

            table {
                width: 100%;
            }

            .table,
            tr,
            th,
            td {
                border: 2px solid;
            }
        </style>

        <section id="profolio">
            <h1>Construction Past Experiences</h1>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Project</th>
                        <th scope="col">Name of Client & Contact Person</th>
                        <th scope="col">Value of Project (US$)</th>
                        <th scope="col">Contractual date</th>
                        <th scope="col">Intended Completion Date</th>
                        <th scope="col">Actual Completion Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"> Construction of 2 Storey Office Block at Asiakwa</th>
                        <td>Agric Development Bank Head Office, Accra</td>
                        <td>358,912.23</td>
                        <td>August, 2010</td>
                        <td>April, 2011</td>
                        <td>May, 2011</td>
                    </tr>


                    <tr>
                        <th scope="row">
                            Construction of 7 No. 3 Units Classroom Block/ Headmaster's Office and 6 No. 3 seater KVIP</th>

                        <td>Japan International Cooperation System</td>
                        <td>408,487.60</td>
                        <td>February, 2010</td>
                        <td>November, 2010</td>
                        <td>February, 2012</td>
                    </tr>

                    <tr>
                        <th scope="row">
                            Construction of 4 Storey Block of flats at OLA Cape Coast</th>

                        <td>Regional Coordinating Council - Cape Coast</td>
                        <td>785,222.08</td>
                        <td>August, 2008</td>
                        <td>February, 2011</td>
                        <td>August, 2010</td>
                    </tr>


                    <tr>
                        <th scope="row">
                            Renovation and Rehabilation 2 Laboratories for Plant Ghana</th>

                        <td>Millennium Development Authority</td>
                        <td>138,080</td>
                        <td>July, 2011</td>
                        <td>October, 2011</td>
                        <td>November, 2011</td>
                    </tr>
                </tbody>

            </table>
        </section>
        <style>
            #mining-- {
                padding: 0 5%;
                margin-top: 50px;

            }
        </style>
        <section id="mining--">
            <h1>Completed Mining Projects</h1>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th scope="col">Customer</th>
                        <th scope="col">Projects</th>
                        <th scope="col">Contact Details</th>

                    </tr>
                </thead>

                <tr>
                    <th scope="row">
                        Edmac Company Limited</th>

                    <td>Filling of Mining Pit for Golden Star Resources Company Limited, Hauling of mining Ore</td>
                    <td>P.O Box AN 12846, Accra North, Tel No:024 4819 526 </td>
                </tr>


                <tr>
                    <th scope="row">
                        Thonket Company Limited </th>

                    <td>Filling of Mining Pit for Golden Star Resources Company Limited</td>
                    <td>P.O Box AN 12846,Kumasi, Tel No:026 8373 305 </td>
                </tr>

                <tr>
                    <th scope="row">
                        Swala Ghana Limited - Small Mining Firm</th>

                    <td>Hiring of Excavator to Excavate Mining Pit</td>
                    <td>P.O Box 16141, Accra, Tel No:020 2221 040, 020 4330 009 </td>
                </tr>
                <tr>
                    <th scope="row">
                        E K Agyeman Mining Company Limited</th>

                    <td>Hauling of mining Ore</td>

                </tr>

            </table>
        </section>
    </div>

    <style>
        @media only screen and (max-width: 848px) {
            table {
                width: 100%;

            }

            #profolio{
                overflow-x: scroll;
            }
            /* th,
            td {
                display: block;
                text-align: left;
            }

            th::before {
                content: attr(data-label);
                font-weight: bold;
            } */
        }
    </style>