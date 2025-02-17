<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Timeline Banner</title>
    <style>
        /* CSS Styling */
        .banner-section {
            padding: 180px 0px;
            background: linear-gradient(rgba(44, 41, 41, 0.4), rgba(0, 0, 0, 0.4)),
                url('images/77.jpg') center bottom/cover no-repeat;
            color: white;
            position: relative;
        }

        .banner-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
        }

        .text-content {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Text adjustments */
        .hashtag {
            font-size: 3.4rem;
            letter-spacing: 1.2px;
            margin-bottom: 20px;
            font-family: "Work Sans", Arial, sans-serif;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }

        .date {
            font-size: 2.8rem;
            margin-bottom: 25px;
            line-height: 1.3;
            font-family: "Work Sans", Arial, sans-serif;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .date sup {
            font-size: 0.6em;
            vertical-align: super;
            margin-left: 2px;
        }

        .timeline-title {
            font-size: 2.6rem;
            letter-spacing: 2px;
            margin-bottom: 35px;
            position: relative;
            padding-bottom: 15px;
            display: inline-block;
            font-family: "Work Sans", Arial, sans-serif;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .timeline-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: #ffffff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .banner-section {
                padding: 50px 0;
            }

            .hashtag {
                font-size: 2.8rem;
            }

            .date {
                font-size: 2.4rem;
            }

            .timeline-title {
                font-size: 2.6rem;
            }
        }

        @media (max-width: 480px) {
            .hashtag {
                font-size: 1.5rem;
            }

            .date {
                font-size: 1.2rem;
            }

            .timeline-title {
                font-size: 1.3rem;
                padding-bottom: 10px;
            }

            .timeline-title::after {
                width: 60px;
                height: 2px;
            }
        }
    </style>
</head>
<body>
    <section class="banner-section">
        <div class="banner-content">
            <div class="text-content">
                <div class="hashtag">#KartiKeyAmanat</div>
                <div class="date">MARCH 4<sup>th</sup> - 6<sup>th</sup>, 2025</div>
                <div class="timeline-title">Timeline of Events</div>
            </div>
        </div>
    </section>
</body>
</html>