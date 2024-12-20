<style>
    .carousel-caption-center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 2;
        color: white;
        max-width: 80%;
    }
    .carousel-caption-center h1 {
        font-size: 3.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    .carousel-caption-center p {
        font-size: 1.5rem;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }
    .carousel-item {
        border-radius: 10px;
        overflow: hidden;
    }
    .carousel-image {
        transition: transform 0.5s ease-in-out;
        object-fit: cover;
        height: 500px;
        width: 100%;
        border-radius: 10px;
    }
    .carousel-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.6);
        z-index: 1;
    }
    

    #carouselExampleAutoplaying {
        margin-top: 50px;
        margin-bottom: 50px; 
        border-radius: 20px;
        overflow: hidden;
    }


    .features .feature {
        background-color: rgba(76, 127, 112, 0.7); /* Sedikit transparan */
        transition: background-color 0.3s ease;
    }
    .features .feature:hover {
        background-color: rgba(76, 127, 112, 0.9);
    }
    .features {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 20px;
    }
    .feature {
        background-color: #4C7F70;
        border-radius: 10px;
        padding: 20px;
        margin: 10px;
        flex: 1;
        min-width: 200px;
        display: flex;
        align-items: center;
    }
    .feature img {
        width: 50px;
        height: 50px;
        margin-right: 20px;
    }
    .feature h3 {
        font-size: 18px;
        margin: 0;
    }
    .feature p {
        font-size: 14px;
        margin: 5px 0 0 0;
    }


    .header {
        background: rgba(0,0,0,0.3);
        text-align: center;
        padding: 80px 20px;
        color: white;
        border-radius: 15px;
    }
    .header h1 {
        font-family: 'Fredoka One', cursive;
        font-size: 48px;
        color: #fff;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    .header p {
        font-size: 18px;
        color: #fff;
        margin-bottom: 30px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }
    .header button {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 12px 24px;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }
    .header button:hover {
        background-color: #45a049;
    }


    .image-container {
        text-align: center;
        margin-top: 20px;
    }
    .image-container img {
        width: 100%;
        max-width: 500px;
        border-radius: 10px;
    }


    .left-content, .right-content {
        flex: 1;
        min-width: 300px;
        margin: 10px;
    }
    .left-content h2 {
        font-family: 'Fredoka One', cursive;
        font-size: 36px;
        color: #fff;
    }
    .left-content p {
        font-size: 16px;
        color: #fff;
    }

    
    .main-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 20px;
    }


    .video-player {
        background-color: #6c757d;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        font-size: 24px;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .carousel-image {
            height: 300px;
        }
        .carousel-caption-center h1 {
            font-size: 2rem;
        }
        .carousel-caption-center p {
            font-size: 1rem;
        }
        #carouselExampleAutoplaying {
            margin-top: 15px; 
            margin-bottom: 15px;
            border-radius: 10px; /* Menambahkan border radius pada carousel */
            overflow: hidden; 
        }
        .feature h3 {
            font-size: 16px;
        }
        .feature p {
            font-size: 12px;
        }
        .header {
            padding: 60px 15px;
        }
        .header h1 {
            font-size: 36px;
        }
        .header p {
            font-size: 16px;
        }
        .left-content h2 {
            font-size: 28px;
        }
        .left-content p {
            font-size: 14px;
        }
        .video-player {
            height: 150px;
            font-size: 20px;
        }
    }
</style><?php /**PATH C:\Users\ziyad\Downloads\finalproject\UAS-WebProg\resources\views/css_in_view/home_css.blade.php ENDPATH**/ ?>