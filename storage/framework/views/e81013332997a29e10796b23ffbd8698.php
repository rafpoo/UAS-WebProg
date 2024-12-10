<style>
    .alert {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #4CAF50;
        color: white;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        z-index: 1000;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .alert-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 999;
    }


    .form-container {
        background-color: #4db6ac;
        padding: 40px;
        border-radius: 10px;
        display: flex;
        justify-content: space-between;
        align-items: start;
    }
    .form-container form {
        width: 50%;
    }
    .form-container h2 {
        color: white;
        margin-bottom: 20px;
    }
    .form-container label {
        color: white;
        display: block;
        margin-bottom: 5px;
    }
    .form-container input, .form-container select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
    }
    .form-container button {
        background-color: #ffca28;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }
    .form-container img {
        width: 40%;
    }


    
     
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #4F998A;
        padding: 10px 20px;
    }

    
    .illustration {
        padding-top: 20px; /* Memberikan ruang atas */
        padding-bottom: 20px; /* Memberikan ruang bawah */
        display: flex; /* Gunakan flexbox untuk pengaturan vertikal */
        flex-direction: column; /* Tumpuk gambar secara vertikal */
        align-items: center; /* Agar gambar rata tengah */
        gap: 35px; /* Jarak antar gambar */
    }
    .illustration img {
        width: 270px; /* Tentukan lebar gambar */
        height: auto; /* Sesuaikan tinggi untuk menjaga rasio */
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }


    .logo-container {
        display: flex;
        align-items: center;
    }

    .logo-container img {
        margin-right: 10px;
    }

    .logo-text {
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
    }


    @media (max-width: 768px) {
        .form-container {
            flex-direction: column;
            align-items: center;
        }
        .form-container form, .form-container img {
            width: 100%;
        }
    }
</style>
<?php /**PATH C:\Users\ziyad\Downloads\uaswebprog\UAS-WebProg\resources\views/css_in_view/ppdb_css.blade.php ENDPATH**/ ?>