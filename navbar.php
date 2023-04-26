<!-- Add Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<!-- Navigation Bar -->
<style>
    .navbar {
        background-color: #F08080;
    }
    .navbar a {
        color: #ffffff;
        padding: 20px 0;
        margin-top: auto;
    }
    .navbar a:hover {
        color: #f8f9fa;
    }
    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }
    .cart-icon-container {
        position: relative;
    }

    .cart-counter {
        position: absolute;
        top: -10px;
        right: -10px;
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 2px 6px;
        font-size: 12px;
    }
</style>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="home.php">Secret Heaven</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="home.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="books.php">BOOKS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="authors.php">AUTHORS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">CONTACT US</a>
            </li>
           
        </ul>
       
    </div>
</nav>