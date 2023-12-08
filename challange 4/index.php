<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 4</title>
</head>
<body>
    <h1>Welcome to PHP</h1>
    <?php
    $books= [
        ['title'=> 'Clean Code',
        'author'=> 'Robert C.Martin',
        'release_year'=> 2008,
        'purchaseUrl' => 'https://www.amazon.com/Clean-Code-Handbook-Software-Craftsmanship/dp/0132350882'
        ],
        ['title'=> 'The Pragmatic Programmer',
        'author'=> 'Dave Thomas and Andy Hunt',
        'release_year'=> 2019,
        'purchaseUrl' => 'https://www.amazon.com/Pragmatic-Programmer-Journey-Mastery/dp/0135957052'
        ],
        ['title'=> 'Effective Java',
        'author'=> 'Joshua Bloch',
        'release_year'=> 2017,
        'purchaseUrl' => 'https://www.amazon.com/Effective-Java-Joshua-Bloch/dp/0134685997'
        ]
    ];
    ?>

    <h3>Best 3 books about programming are : </h3>
        <ul>
             <?php foreach ($books as $book) : ?>
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>">
                        <?= $book['title']; ?> (<?= $book['release_year']; ?>)
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    
</body>
</html>