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
            background-color: #FFDAB9!important;
            
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
            
        }

        .author-card {
            margin-bottom: 30px;
        }

        .author-image {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .book-title {
            font-weight: bold;
            font-size: 18px;
        }

        .book-description {
            font-style: italic;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    
    <?php include 'navbar.php'; ?>

    <div class="container main-content">
    <h2 style="color: #FA8072;"><center>Famous Authors</center></h2>
        <br>
        <br>
        <div class="row">
            <?php
                $authors = [
                    [
                        "name" => "William Shakespeare",
                        "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Shakespeare.jpg/800px-Shakespeare.jpg",
                        "description" => "William Shakespeare was an English playwright, poet, and actor, widely regarded as the greatest writer in the English language and the world's greatest dramatist.",
                        "books" => [
                            ["title" => "Hamlet", "description" => "A tragedy that tells the story of Prince Hamlet and his quest for vengeance against his uncle, King Claudius."],
                            ["title" => "Romeo and Juliet", "description" => "A romantic tragedy about two young lovers whose deaths ultimately reconcile their feuding families."],
                            ["title" => "Macbeth", "description" => "A tragedy about the rise and fall of Scottish general Macbeth and his thirst for power, leading to murder and madness."]
                        ]
                    ],
                    [
                        "name" => "Jane Austen",
                        "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/CassandraAusten-JaneAusten%28c.1810%29_hires.jpg/800px-CassandraAusten-JaneAusten%28c.1810%29_hires.jpg",
                        "description" => "Jane Austen was an English novelist known primarily for her six major novels, which interpret, critique, and comment upon the British landed gentry at the end of the 18th century.",
                        "books" => [
                            ["title" => "Pride and Prejudice", "description" => "A romantic novel that charts the emotional development of the protagonist Elizabeth Bennet, who learns the error of making hasty judgments."],
                            ["title" => "Sense and Sensibility", "description" => "A novel about the life and loves of the Dashwood sisters, Elinor and Marianne, who navigate societal expectations and search for love and happiness."],
                            ["title" => "Emma", "description" => "A novel about Emma Woodhouse, a young woman who enjoys matchmaking but ultimately learns that meddling in other people's lives can have unintended consequences."]
                        ]
                        ],
                            [
                            "name" => "Ernest Hemingway",
                            "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/ErnestHemingway.jpg/800px-ErnestHemingway.jpg",
                            "description" => "Ernest Hemingway was an American novelist, short-story writer, journalist, and sportsman, known for his distinctive writing style and portrayal of masculinity in literature.",
                            "books" => [
                            ["title" => "The Old Man and the Sea", "description" => "A short novel about an old Cuban fisherman named Santiago and his relentless battle with a giant marlin."],
                            ["title" => "A Farewell to Arms", "description" => "A novel set during World War I that tells the story of an American ambulance driver in the Italian army and his love for a British nurse."],
                            ["title" => "For Whom the Bell Tolls", "description" => "A novel about a young American named Robert Jordan who is fighting in the Spanish Civil War as a dynamiter."]
                            ]
                        ],
                            [
                            "name" => "George Orwell",
                            "image" => "https://transcode-v2.app.engoo.com/image/fetch/f_auto,c_lfill,w_300,dpr_3/https://assets.app.engoo.com/images/4egVW4ONFeSuDMLRDFkSu3.jpeg",
                            "description" => "Orwell was born Eric Arthur Blair on June 25, 1903, in Motihari, India, to a British colonial family. He was educated in England and, after graduating from Eton College, joined the Indian Imperial Police in Burma (now Myanmar) in 1922. However, his experiences in colonial Burma would turn him against imperialism and reinforce his growing socialist beliefs.",
                            "books" => [
                            ["title" => "1984", "description" => "A dystopian novel that tells the story of a totalitarian society governed by an omnipresent leader, Big Brother, and the Thought Police."],
                            ["title" => "Animal Farm", "description" => "An allegorical novella that reflects events leading up to the Russian Revolution of 1917 and the Stalinist era of the Soviet Union."],
                            ["title" => "Homage to Catalonia", "description" => "A personal account of George Orwell's experiences and observations during the Spanish Civil War."]
                            ] 
                        ],
                            [
                            "name" => "Fyodor Dostoevsky",
                            "image" => "https://orthodoxwiki.org/thumb.php?f=Dostoevsky_1872.jpg&width=300",
                            "description" => "Fyodor Dostoevsky was a Russian novelist, philosopher, short story writer, essayist, and journalist, known for exploring the human psychology in the context of the turbulent social, political, and spiritual atmosphere of 19th-century Russia.His works continue to be widely read and studied today for their psychological depth and exploration of the human condition.",
                            "books" => [
                            ["title" => "Crime and Punishment", "description" => "A novel about the mental anguish and moral dilemmas of Rodion Raskolnikov, an impoverished ex-student in Saint Petersburg who formulates a plan to kill an unscrupulous pawnbroker for her money."],
                            ["title" => "The Brothers Karamazov", "description" => "A philosophical novel that follows the lives of the Karamazov brothers as they explore questions of faith, morality, and the existence of God."],
                            ["title" => "The Idiot", "description" => "A novel about Prince Lev Myshkin, a kind and compassionate man, who returns to Russia and becomes entangled in a web of love, deceit, and tragedy, ultimately leading to his downfall."]
                            ]
                        ],
                        [
                            "name" => "Charles Dickens",
                            "image" => "https://i.guim.co.uk/img/media/12e52f6ebc36a7411d4760ccacff2790871ab617/0_296_1985_1191/master/1985.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=d8425698898c948c906dd3036ddeb080",
                            "description" => "Charles Dickens was an English writer and social critic, widely regarded as one of the greatest novelists of the Victorian era, known for creating memorable characters and vividly portraying the social conditions of his time.Dickens' writing was often serialized, meaning that his stories were published in installments in magazines or newspapers.",
                            "books" => [
                                ["title" => "Great Expectations", "description" => "A bildungsroman that follows the life and moral development of Pip, an orphan who dreams of becoming a gentleman."],
                                ["title" => "A Tale of Two Cities", "description" => "A historical novel set during the French Revolution, which tells the story of a group of people who struggle with the upheaval and the harsh realities of the time."],
                                ["title" => "Oliver Twist", "description" => "A novel that follows the life of orphan Oliver Twist, who starts his life in a workhouse and eventually becomes involved with a group of young pickpockets in London."]
                            ]
                         ],
                    ];
                        foreach ($authors as $author) {
                            echo '<div class="col-md-4 author-card">';
                            echo '<h3>' . $author["name"] . '</h3>';
                            echo '<img class="author-image" src="' . $author["image"] . '" alt="' . $author["name"] . '">';
                            echo '<p>' . $author["description"] . '</p>';
                            echo '<h4>Books:</h4>';
                            echo '<ul>';
            
                            foreach ($author["books"] as $book) {
                                echo '<li>';
                                echo '<span class="book-title">' . $book["title"] . '</span>';
                                echo '<p class="book-description">' . $book["description"] . '</p>';
                                echo '</li>';
                            }
            
                            echo '</ul>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
            
            <?php include 'footer.php'; ?>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            </body>
            </html>
