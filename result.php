<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Result | PHP Badwords</title>
    </head>
    <body>
        
        <header>
            <h1>
                Result
            </h1>
        </header>

        <main>
            <div>
                <div>
                    Parola da censurare:
                    <p>
                        <?php echo $_GET['badword']; ?>
                    </p>
                </div>

                <div>
                    Paragrafo:
                    <p>
                        <?php echo $_GET['paragraph']; ?>
                    </p>

                    <div>
                        Lunghezza del paragrafo: <?php echo strlen($_GET['paragraph']); ?>
                    </div>
                </div>

                <hr>

                <div>
                    Paragrafo censurato:
                    <p>
                        <?php
                            $censoredParagraph = str_replace($_GET['badword'], '***', $_GET['paragraph']);

                            echo $censoredParagraph;
                        ?>
                    </p>

                    <div>
                        Lunghezza del paragrafo censurato: <?php echo strlen($censoredParagraph); ?>
                    </div>
                </div>
            </div>

            <hr>
        
            <div>
                <a href="./index.php">
                    Torna indietro
                </a>
            </div>
        </main>

        <script>
            const paragraph = 'lorem ipsum dolor sit amet dolor lorem ipsum sit lorem dolor amet';
            const censoredParagraph = paragraph.replaceAll('dolor', '***');

            console.log('Paragrafo:', paragraph, paragraph.length);
            console.log('Paragrafo da censurare:', censoredParagraph, censoredParagraph.length);
        </script>
    </body>
</html>