<!-- Dadayakkara Dewege Poorna(Student ID=100162693)-FINAL PROJECT-COMP 2513-BOOK STORE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            color: #333;
            background-color: #f5f5f5;
            position: relative;
          
        }

        .navbar {
        background-color: #007bff;
    }

    .nav-link {
        color: #fff;
    }

    .nav-link:hover {
        color: #ccc;
    }

    .footer {
        background-color: #007bff;
        color: #fff;
        padding: 15px;
        margin-top: 50px;
    }

    .main-content {
        margin: 40px 0;
        text-align: center;
    }

    .quote {
        font-size: 24px;
        font-style: italic;
        margin-bottom: 10px;
    }

    .author {
        font-size: 18px;
        font-weight: bold;
    }

    .quote-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
    }

    .imgstore{
        
        border-radius: 50%;
       
    }

    .quote-container {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 40px;
    }

    .quote-content {
        margin-right: 20px;
    }

    .bg-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        opacity: 0.7;
    }
</style>
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container main-content">
<h2 style="font-size: 45px;">Welcome to Secret Heaven</h2>

    <img class="imgstore" src="https://cdn.tatlerasia.com/asiatatler/i/hk/2021/02/22120006-89854234-2560114784256002-1476840033916152876-n_cover_1080x720.jpg" alt="Books" width="300" class="rounded mx-auto d-block mb-4">
    <p>
    Books have been an essential part of human history, dating back to the ancient civilizations of Egypt, Mesopotamia, and Greece. Over time, the written word has evolved and transformed, allowing us to preserve knowledge and ideas, share stories and experiences, and connect with each other on a deeper level.
    </p>
    <p>
    Reading is a fundamental skill that opens doors to a world of information and ideas. It is through books that we can learn about different cultures, beliefs, and traditions. We can explore new ideas, concepts, and ways of thinking, allowing us to broaden our perspectives and challenge our preconceived notions. Books help us develop empathy, allowing us to see the world from someone else's point of view.
    </p>
    <br>
    <br>
    <h3>Famous Quotes About Books</h3>
    <div class="quote-container">
        <div class="quote-content">
            <div class="quote">“A room without books is like a body without a soul.”</div>
            <div class="author">- Cicero</div>
        </div>
        <img class="quote-image" src="https://tse3.mm.bing.net/th?id=OIP.WNQcxjFdnuuCTBKErgICHwHaE8&pid=Api&P=0" alt="Cicero">
</div>

<div class="quote-container">
        <div class="quote-content">
            <div class="quote">“There is no friend as loyal as a book.”</div>
            <div class="author">- Ernest Hemingway</div>
        </div>
        <img class="quote-image" src="https://tse3.mm.bing.net/th?id=OIP.FkBG0sBbyZkfjP8iTZQNLAHaF1&pid=Api&P=0" alt="Ernest Hemingway">
    </div>
    <div class="quote-container">
    <div class="quote-content">
        <div class="quote">“"Books are like mirrors: if a fool looks in, you cannot expect a genius to look out."</div>
        <div class="author">- J. K. Rowling</div>
    </div>
    <img class="quote-image" src="https://i.pinimg.com/originals/89/8d/d3/898dd3cc1fdb1466662b7d9155418281.jpg" alt="J. K. Rowling">
</div>
</div>

<?php include 'footer.php'; ?>

<video class="bg-video" autoplay muted loop>
    <source src="run.mp4" type="video/mp4">
</video>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
