<?php
require('connection.php');
$recipient=$_GET['recipient'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Gift It Perfect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- partial:index.partial.html -->
    <a href="https://github.com/KiranPranay/gift-it-perfect" target="_blank" rel="noopener noreferrer"
        class="github-corner" aria-label="View source on GitHub">
        <svg width="86" height="82" viewBox="0 0 86 82" fill="none" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M85.346.362h-85l85 81.175V.362z" />
            <path
                d="M67.282 37.7c-1.209 1.268-2.414 2.188-3.617 2.76-1.202.573-2.362.788-3.478.647-1.117-.141-2.106-.416-2.969-.824-.862-.408-1.783-.984-2.764-1.727.114 1.127-.385 2.275-1.498 3.442l-4.292 4.503-6.834-6.515 3.1-3.252c-.62-.4-1.151-.81-1.594-1.232-.442-.422-.78-.823-1.011-1.203a5.282 5.282 0 01-.526-1.122 3.431 3.431 0 01-.185-.988c-.004-.29.008-.55.037-.777.029-.227.075-.406.137-.537l.094-.197a8.07 8.07 0 00.481-1.834c.072-.568.074-.98.006-1.236l-.103-.385c-.075-.643-.056-1.024.055-1.14.111-.117.298-.083.559.102l.295.282c.361.408.611.9.75 1.478.137.577.16 1.045.069 1.403l-.04.535c-.61 2.411.352 4.06 2.885 4.947.861-.707 1.745-1.043 2.65-1.008-.79-.944-1.41-1.836-1.858-2.678-.449-.842-.762-1.809-.94-2.902-.178-1.093-.019-2.261.48-3.506.497-1.244 1.35-2.5 2.559-3.767 1.367-1.435 3.019-2.216 4.955-2.344.623-1.507 1.849-2.694 3.677-3.562.066.127.205.244.417.35.212.107.526.597.943 1.472.417.875.764 1.955 1.042 3.238a19.751 19.751 0 013.919 2.78 20.44 20.44 0 012.965 3.782c1.262.184 2.324.465 3.186.84.862.376 1.407.674 1.637.892l.296.378c-.746 1.9-1.873 3.18-3.382 3.844-.035 1.94-.736 3.627-2.103 5.061z"
                fill="#f6f6f6" />
        </svg>
    </a>
    <div class="container">
        <header class="header">
            <h1 id="title" class="header__title">Gift It Perfect</h1>
            <p id="description" class="header__description">
                We would love to hear your thoughts on how we can improve your
                experience.
            </p>
            <img src="media/logo.png" alt="" aria-hidden="true" class="illustration" />
        </header>
        <main class="main">
            <form action="occa.php" method="GET" id="survey-form" class="survey" novalidate>
                <div class="progressbar" tabindex="0" role="progressbar" aria-valuemin="1" aria-valuemax="5"
                    aria-valuenow="2" aria-valuetext="Question 1 of 5: How long have you been using our product?">
                    <span class="progressbar__step active" aria-hidden="true"></span>
                    <span class="progressbar__step active" aria-hidden="true"></span>
                    <span class="progressbar__step" aria-hidden="true"></span>

                </div>

                <section class="survey__panel survey__panel--current" aria-hidden="false" data-index="1"
                    data-panel="firstPanel" data-requirement="option">
                    <h2 class="survey__panel__question">
                        <span class="visuallyhidden">Question 1 of 5 </span>SELECT A
                        RECIPIENT
                    </h2>
                    <div class="survey__panel__period">
                        <?php
                        $re=mysqli_query($con,"SELECT * FROM `relationship` WHERE `relationship`.`recipient_id`='$recipient'");
                        while($row=mysqli_fetch_assoc($re)){
                            ?>
                        <div class="form-group">
                            <input id="recipient" type="radio" name="relation" value="<?php echo $row['id'] ?>" />
                            <label for="never"><?php echo $row['relation'] ?></label>
                        </div>
                        <?php
                        }
                        ?>



                    </div>
                    <p class="error-message"></p>
                </section>


                <div class="form-buttons">
                    <button class="button" type="submit" aria-label="Next" aria-hidden="false">
                        Next
                    </button>
                </div>
            </form>
        </main>
    </div>

    <!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> -->
    <!-- partial -->
    <script src="js/script.js"></script>
</body>

</html>