<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            color: #333;
            background-color: #FFDAB9;
        }

        .container {
            margin-top: 20px;
            
        }

        .book {
            margin-bottom: 20px;
        }

        .book img {
            width: 200px;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>

    <div class="container">
        <h2 style="font-size: 45px;"><center>Books</center></h2>
        <input type="text" id="search" class="form-control" placeholder="Search for books...">
        <br>
        <div id="books" class="row">
            <?php
            $servername = "localhost";
            $username = "bookstore_user";
            $password = "bookpassw0rd";
            $dbname = "book_store";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
             $sql = "SELECT id, book_name, author, year, price, description, image_url FROM books";
             $result = $conn->query($sql);
            
            while($row = $result->fetch_assoc()) {
                echo "<div class='col-md-4 book' data-id='" . $row["id"] . "'>";
                echo "<h4>" . $row["book_name"] . "</h4>";
                echo "<img src='" . $row["image_url"] . "' alt='" . $row["book_name"] . "'>";
                echo "<p>Author: " . $row["author"] . "</p>";
                echo "<p>Year: " . $row["year"] . "</p>";
                echo "<p>Price: $" . $row["price"] . "</p>";
                echo "<p>Description: " . $row["description"] . "</p>";
                echo "<button class='btn btn-primary add-to-cart' data-price='" . $row["price"] . "' data-id='" . $row["id"] . "' data-title='" . $row["book_name"] . "'>Add to cart</button>";
                echo "</div>";
            }
             $conn->close();
            ?>

        </div>
        <br>
        <h3>Shopping Cart</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Book
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="cart">
            </tbody>
        </table>
        <p><strong>Total Price: $<span id="total-price">0.00</span></strong></p>
    </div>

    <script>
    $(document).ready(function() {
        var cart = {};

        $(".add-to-cart").on("click", function() {
            var id = $(this).data("id");
            var title = $(this).data("title");
            var price = parseFloat($(this).data("price"));

            if (cart[id]) {
                cart[id].quantity += 1;
            } else {
                cart[id] = {
                    title: title,
                    price: price,
                    quantity: 1
                };
            }

            updateCart();
        });

        $("#search").on("keyup", function() {
            var searchValue = $(this).val().toLowerCase();
            $(".book").filter(function() {
                var bookInfo = $(this).find("h4").text().toLowerCase() + " " + $(this).find("p").first().text().toLowerCase();
                $(this).toggle(bookInfo.indexOf(searchValue) > -1);
            });
        });

        function updateCart() {
            var cartTable = $("#cart");
            cartTable.empty();
            var totalPrice = 0;

            for (var id in cart) {
                var book = cart[id];
                var rowTotal = book.price * book.quantity;
                totalPrice += rowTotal;

                cartTable.append(
                    "<tr>" +
                        "<td>" + book.title + "</td>" +
                        "<td>" + book.quantity + "</td>" +
                        "<td>$" + book.price.toFixed(2) + "</td>" +
                        "<td>$" + rowTotal.toFixed(2) + "</td>" +
                    "</tr>"
                );
            }

            $("#total-price").text(totalPrice.toFixed(2));
        }
    });
   
</script>

</body>
</html>