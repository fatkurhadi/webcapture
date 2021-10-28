<?php
require_once 'vendor/autoload.php';
use Screen\Capture;

$url = '';
$message = '';

if (isset($_GET['url']) && !empty($_GET['url'])) {
    $url = $_GET['url'];

    $screen = new Capture($url);
    
    $screenshot = 'shots/' . time();

    if ($screen->save($screenshot)) {
        $message = 'Screenshot created for ' . $url;
    } else {
        $message = 'Sorry, error is Screenshot creation ' . $url;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Screenshot</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css"
        integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.bundle.min.js"
        integrity="sha512-iceXjjbmB2rwoX93Ka6HAHP+B76IY1z0o3h+N1PeDtRSsyeetU3/0QKJqGyPJcX63zysNehggFwMC/bi7dvMig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <form class="form-horizontal" action="index.php" method="get">
                    <fieldset>
                        <div id="legend">
                            <legend>
                                <h1>Website Screenshot</h1>
                            </legend>
                        </div>
                        <div class="control-group">
                            <label for="url" class="control-label">Link Website</label>
                            <div class="controls">
                                <input type="text" name="url" id="url" class="input-xl" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-success">Ok</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <div class="row">
            <h3><?php echo $message; ?></h3>
        </div>

        <div class="row">
            <?php
                if (!empty($screenshot)) {
                    $elements = explode('/', $screenshot);
            ?>

                <img src="shots/<?php echo ($elements[count($elements) - 1]); ?>.jpg" alt="screenshot" />

            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>
