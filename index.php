<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>
        
        <header>
            <h1>
                PHP Badwords
            </h1>
        </header>

        <main>
            <?php
                var_dump($_GET);
            ?>
        
            <form action="./result.php" method="GET">

                <div>
                    <div>
                        <label for="paragraph">
                            Paragrafo
                        </label>
                    </div>

                    <textarea id="paragraph" name="paragraph" placeholder="Inserisci il tuo testo..."></textarea>
                </div>

                <div>
                    <div>
                        <label for="badword">
                            Parola da censurare
                        </label>
                    </div>

                    <input id="badword" name="badword" type="text" placeholder="Inserisci il tuo testo...">
                </div>

                <div>
                    <button type="submit">
                        Invia
                    </button>
                </div>

            </form>
        </main>

    </body>
</html>