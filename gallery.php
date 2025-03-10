<?php include 'include/navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 15px;
            padding: 20px;
            max-width: 1300px;
            margin: auto;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0px 5px 10px rgba(255, 255, 255, 0.2);
        }
        .gallery img:hover {
            transform: scale(1.1);
            box-shadow: 0px 8px 15px rgba(255, 255, 255, 0.3);
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .modal img {
            width: 85%;
            max-width: 900px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(255, 255, 255, 0.3);
        }
        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 45px;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Exclusive Travel Gallery</h2>
    <div class="gallery">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">

        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
        <img src="image/pg4.jpg" alt="Attraction 1" onclick="showModal(this.src)">
    </div>
    
    <div id="imageModal" class="modal" onclick="closeModal()">
        <span class="close">&times;</span>
        <img id="modalImage" src="" alt="">
    </div>
    
    <script>
        function showModal(src) {
            document.getElementById('modalImage').src = src;
            document.getElementById('imageModal').style.display = 'flex';
        }
        function closeModal() {
            document.getElementById('imageModal').style.display = 'none';
        }
    </script>
   
</body>
</html>
