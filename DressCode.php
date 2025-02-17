<style>
    
.custom-rsvp-container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
        text-align: center;
        font-family: Arial, sans-serif;
        background-color:#f3eae1;
    }

    .custom-rsvp-container .custom-title {
        font-size: 2em;
        margin-bottom: 20px;
        color: #6a6a6a;
    }

    .custom-rsvp-container .custom-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .custom-rsvp-container .custom-card {
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .custom-rsvp-container .custom-card:hover {
        transform: scale(1.05);
    }

    .custom-rsvp-container .custom-card img {
        width: 100%;
        height: auto;
        max-height: 300px;
        object-fit: cover;
    }

    .custom-rsvp-container .custom-card-title {
        font-size: 1.2em;
        margin: 10px 0;
        color: #6a6a6a;
    }

</style>




<div class="custom-rsvp-container">
    <h1 class="custom-title">R.S.V.P</h1>
    <div class="custom-grid">
        <!-- <div class="custom-card">
            <img src="images/6.jpg" alt="Registry">
            <p class="custom-card-title">Registry</p>
        </div> -->
        <div class="custom-card">
            <img src="images/5.jpg" alt="Dress Code">
            <p class="custom-card-title">Dress Code</p>
        </div>
    </div>
</div>
