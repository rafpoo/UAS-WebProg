<style>
    .about-section {
        background-color: #2e7d32;
        padding: 20px;
        border-radius: 10px;
        margin: 20px 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .about-section .text {
        width: 60%;
        text-align: left;
    }
    .about-section .text h2 {
        font-size: 2em;
        margin: 0 0 10px;
    }
    .about-section .text p {
        margin: 0;
    }
    .about-section .image {
        width: 30%;
    }
    .about-section .image img {
        width: 100%;
    }


    .staff-profiles {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }
    .staff-card {
        background-color: rgba(76, 127, 112, 0.7);
        border-radius: 10px;
        padding: 20px;
        transition: background-color 0.3s ease;
        text-align: left;
    }
    .staff-card:hover {
        background-color: rgba(76, 127, 112, 0.9);
    }
    .staff-card h2 {
        margin: 0 0 10px 0;
        font-size: 1.2em;
        color: white;
    }
    .staff-card .details {
        margin: 5px 0;
        color: #e0e0e0;
    }
    .staff-card .role {
        font-weight: bold;
        margin-bottom: 5px;
    }
    .staff-card .education {
        font-style: italic;
    }
    .staff-card .additional-info {
        font-size: 0.9em;
        color: #d0d0d0;
    }
    .staff-card .experience {
        font-size: 0.85em;
        color: #c0c0c0;
        margin-top: 10px;
    }


    .teacher-cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin: 20px 0;
    }
    .teacher-card {
        background-color: #2e7d32;
        border-radius: 10px;
        width: 200px;
        padding: 10px;
        color: #fff;
        text-align: left;
        position: relative;
    }
    .teacher-card img {
        width: 100%;
        border-radius: 10px;
    }
    .teacher-card h2 {
        font-size: 1.5em;
        margin: 10px 0 5px;
    }
    .teacher-card p {
        margin: 5px 0;
    }
    .teacher-card .pin {
        position: absolute;
        top: -10px;
        left: 10px;
        width: 30px;
    }
    .teacher-card .star {
        position: absolute;
        top: -10px;
        right: 10px;
        width: 30px;
    }


    @media (max-width: 768px) {
        .about-section {
            flex-direction: column;
            text-align: center;
        }
        .about-section .text, .about-section .image {
            width: 100%;
        }
        .teacher-cards {
            flex-direction: column;
            align-items: center;
        }
    }
</style>