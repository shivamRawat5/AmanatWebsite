
<?php include 'CardHeader.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultural Event Slider</title>
    <style>
        /* :root {
            --primary-color: #902a2a;
            --secondary-color: #e6d5c3;
            --card-width: min(90vw, 340px);
        } */

        .slider-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
            position: relative;
            overflow: hidden;
        }

        .slider-wrapper {
            display: flex;
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            will-change: transform;
        }

        .card {
            flex: 0 0 340px;
            min-height: 600px;
            background: transparent;
            margin: 0 10px;
            position: relative;
            overflow: visible;
        }

        .card-content {
            padding: 20px;
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-heading {
            font-size: 16px;
            color: #b14c4c;
            margin-bottom: 15px;
            text-align: center;
            font-weight: 600;
            font-family: "Work Sans", Arial, sans-serif;
        }

        .card-image {
            width: 100%;
            height: 190px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .card-text {
          
            padding: 15px;
            border-radius: 8px;
            font-size: 13px;
            color: #b14c4c;
            line-height: 1.6;
            text-align: center;
            padding: 0 10px;
            font-family: "Work Sans", Arial, sans-serif;
        }

        .background-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            border-radius: 15px;
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(243, 234, 225, 0.9);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            border: none;
            cursor: pointer;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .prev-btn { left: 1.5rem; }
        .next-btn { right: 1.5rem; }

        @media (max-width: 768px) {
            .slider-container {
                padding: 0 10px;
            }
            
            .card {
                min-height: 500px;
                margin: 0 5px;
            }
            
            .card-image {
                height: 25vh;
            }
            
            .slider-btn {
                width: 35px;
                height: 35px;
            }
        }

        /* Lazy loading styles */
        .lazy-load {
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        
        .lazy-load.loaded {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="slider-container">
        <div class="slider-wrapper">
            <!-- Card 1 -->
            <!-- <div class="card">
                <img data-src="77.jpg" class="background-img lazy-load" alt="Background">
                <div class="card-content">
                    <h2 class="card-heading">TUESDAY, MARCH 4TH 2025</h2>
                    <img data-src="4.jpg" class="card-image lazy-load" alt="Event">
                    <div class="card-text">
                        <span style="color:rgb(94, 5, 5);">RISHTON KI SHURUAAT</span><br>
                        Lunch: 1:00 PM to 3:00 PM<br>
                        Venue: Fountain Courtyard, Umaid Bhawan Palace
                    </div>
                </div>
            </div> -->

            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> TUESDAY, MARCH 4TH 2025</h2>
                    <img src="Gallary/4.1.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                     <span style="color:rgb(94, 5, 5); font-size: 16px;"> RISHTON KI SHURUAAT</span> <br>
                      Lunch: 1:00 PM to 3:00 PM  <br>
                      Venue: Fountain Courtyard, Umaid Bhawan Palace<br>
                  </div>
                <img src=" images/4.jpeg" alt="Nature" class="background-img" >
            </div>


            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> TUESDAY, MARCH 4TH 2025</h2>
                    <img src="Gallary/4.2.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  KAMAL KA CRICKET</span> <br>
                       Match: 3:00 PM to 5:00 PM  <br> 
                       Venue: Peacock Lawn, Umaid Bhawan Palace <br>  
                </div>
                <img src="images/4.1.jpeg" alt="Nature" class="background-img">
            </div>


            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading">TUESDAY, MARCH 4TH 2025</h2>
                    <img src=" Gallary/11.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  AOBHAGAT </span><br>
                        Dinner: 8:00 PM to 11:00 PM <br> 
                        Venue: Marwar & Rathore Hall, Umaid Bhawan Palace<br>
                </div>
                <img src="images/4.2.jpeg" alt="Nature" class="background-img">
            </div>



            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> WEDNESDAY, MARCH 5TH 2025</h2>
                    <img src=" Gallary/21.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  HARSHOTSAVA </span><br>
                          Breakfast & Tree Plantation: 7:00 AM to 9:00 AM <br>
                          Venue: Pillars & Front Lawns, Umaid Bhawan Palace  <br>
                </div>
                <img src="images/5.1.jpeg" alt="Nature" class="background-img">
            </div>
            
            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> WEDNESDAY, MARCH 5TH 2025</h2>
                    <img src=" Gallary/24.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  RANGILO SWAGAT </span><br>
                      Lunch & Carnival: 12:30 to 3:00 PM  <br>
                      Venue: Front Lawns, Umaid Bhawan Palace <br>
                </div>
                <img src=" images/5.2.jpeg" alt="Nature" class="background-img">
            </div>

            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> WEDNESDAY, MARCH 5TH 2025</h2>
                    <img src=" Gallary/20.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  JHOOMTE SUR</span> <br>
                      Departure from Respective Hotels: 5:00 PM onwards <br> 
                      Venue:  Mehrangarh Fort, Jodhpur <br> 

                </div>
                <img src=" images/5.3.jpeg" alt="Nature" class="background-img">
            </div>


            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> WEDNESDAY, MARCH 5TH 2025</h2>
                    <img src=" Gallary/17.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  JHOOMTE SUR </span><br>
                    Regal High Tea: 6:00 PM to 8:00 PM<br>  
                    Venue: Mehrangarh Fort, Jodhpur<br>
                </div>
                <img src=" images/5.4.jpeg" alt="Nature" class="background-img">
            </div>

            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> WEDNESDAY, MARCH 5TH 2025</h2>
                    <img src=" Gallary/17.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;"> JHOOMTE SUR </span><br>
                    Dance & Dinner: 8:00 PM onwards <br>  
                    Venue: Mehrangarh Fort, Jodhpur<br>
                </div>
                <img src=" images/5.jpeg" alt="Nature" class="background-img">
            </div>



            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading">THURSDAY, MARCH 6TH 2025</h2>
                    <img src=" Gallary/6.3.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">   SNEH BHAAT </span><br> 
                      Brunch: 10:00 AM to 1:00 PM  <br> 
                      Venue: Courtyard and Marwar & Rathore Hall  <br> 
                </div>
                <img src=" images/6.jpeg" alt="Nature" class="background-img">
            </div>


            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading">THURSDAY, MARCH 6TH 2025</h2>
                    <img src=" Gallary/7.1.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;"> VIVAAH SAMAROH </span> <br>
                     Qurat: 3:30 PM   <br>
                     Venue: Lancer Lawns<br>
                       
                </div>
                <img src="  images/6.1.jpeg" alt="Nature" class="background-img">
            </div>


            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading">THURSDAY, MARCH 6TH 2025</h2>
                    <img src=" Gallary/7.3.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  VIVAAH SAMAROH </span> <br>
                    Baraat: 4:00 PM to 5:30 PM   <br>
                    Venue: Lancer Lawns<br>
                </div>
                <img src="  images/6.2.jpeg" alt="Nature" class="background-img">
            </div>


            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> THURSDAY, MARCH 6TH 2025</h2>
                    <img src="Gallary/27.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  VIVAAH SAMAROH </span> <br>
                    Varmala: 6:00 PM  <br>  
                    Venue: Baradari Lawns <br>
                </div>
                <img src="  images/6.3.jpeg" alt="Nature" class="background-img">
            </div>

            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading">THURSDAY, MARCH 6TH 2025</h2>
                    <img src=" Gallary/31.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  VIVAAH SAMAROH </span> <br>
                    Magical Pheras: 7:00 PM to 9:00 PM <br>
                    Venue: Baradari Lawns <br>
                </div>
                <img src="  images/6.4.jpeg" alt="Nature" class="background-img">
            </div>

            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> THURSDAY, MARCH 6TH 2025</h2>
                    <img src=" Gallary/6.2.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">  VIVAAH SAMAROH </span><br>
                    Sajan Got: 9:00 PM to 11:00 PM <br>
                    Venue: Baradari Lawns<br>
                </div>
                <img src=" images/6.5.jpeg" alt="Nature" class="background-img">
            </div>

            <div class="card">
                <div class="card-content">
                    <h2 class="card-heading"> THURSDAY, MARCH 6TH 2025</h2>
                    <img src="  Gallary/35.jpg" alt="Nature" class="card-image">
                    <p class="card-text">
                    <span style="color:rgb(94, 5, 5); font-size: 16px;">   VIVAAH SAMAROH </span> <br>
                    Bidaai: 11:00 PM onwards <br> 
                    Venue: Baradari Lawns <br>
                </div>
                <img src=" images/6.6.jpeg" alt="Nature" class="background-img">
            </div>


           
            <!-- Repeat other cards with same structure -->
            
        </div>
        <button class="slider-btn prev-btn">❮</button>
        <button class="slider-btn next-btn">❯</button>
    </div>

    <script>
        // Lazy Loading with Intersection Observer
        const lazyLoadObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
    
        document.querySelectorAll('.lazy-load').forEach(img => {
            lazyLoadObserver.observe(img);
        });
    
        // Slider Logic
        const sliderWrapper = document.querySelector('.slider-wrapper');
        const cards = document.querySelectorAll('.card');
        let currentIndex = 0;
        let autoSlideInterval;
    
        function updateSlider() {
            const cardWidth = cards[0].offsetWidth + 20; // Include margins
            sliderWrapper.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }
    
        function nextSlide() {
            currentIndex = (currentIndex + 1) % cards.length;
            updateSlider();
        }
    
        function prevSlide() {
            currentIndex = (currentIndex - 1 + cards.length) % cards.length;
            updateSlider();
        }
    
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 3000);
        }
    
        function handleResize() {
            currentIndex = Math.max(0, Math.min(currentIndex, cards.length - 1));
            updateSlider();
        }
    
        // Event listeners
        document.querySelector('.next-btn').addEventListener('click', () => {
            nextSlide();
            clearInterval(autoSlideInterval);
            startAutoSlide();
        });
    
        document.querySelector('.prev-btn').addEventListener('click', () => {
            prevSlide();
            clearInterval(autoSlideInterval);
            startAutoSlide();
        });
    
        // Initialize
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(handleResize, 100);
        });
    
        startAutoSlide();
        updateSlider();
    </script>
</body>
</html>