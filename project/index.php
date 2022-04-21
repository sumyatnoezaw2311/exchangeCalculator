<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "img/logo.svg" type = "image/x-icon">
    <!-- Primary Meta Tags -->
<title>SMNZ Exchange</title>
<meta name="title" content="SMNZ Exchange">
<meta name="description" content="Testing for MMS SWD course">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://smnz/">
<meta property="og:title" content="SMNZ Exchange">
<meta property="og:description" content="Testing for MMS SWD course">
<meta property="og:image" content="img/logo.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://smnz/">
<meta property="twitter:title" content="SMNZ Exchange">
<meta property="twitter:description" content="Testing for MMS SWD course">
<meta property="twitter:image" content="img/logo.png">

    <title>Exchange Calculator</title>
    <link rel="stylesheet" href="vendor/fontAweSome/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <label class="switch">
        <input type="checkbox">
        <span class="slider round">
            <i class="fas fa-sun moon sun"></i>
            <i class="far fa-moon moon"></i>
        </span>
      </label>
    <div class="container">
        <div class="output">
            <div class="logoAndTitle">
                    <img class="logo" src="img/logo.svg" alt="">
                <div class="brandContainer">MMEx</div>
            </div>
            <div class="result">00.0</div>
        </div>
        <div class="divider"></div>
        <form class="calculate" id="calc">
            <div class="input">
                <label>Input</label>
                <input class="inputTag" type="number" id="input" placeholder="0.00" autofocus min="1" required>
            </div>
            <div class="FromTo">
                <div class="from">
                    <label>From</label>
                    <select class="inputTag selectbtnFrom" type="text" id="from" required>
                        <option value="" selected>Select currency</option>
                    </select>
                </div>
                <div class="to">
                    <label>To</label>
                    <select class="inputTag selectbtnTo" type="text" id="to" required>
                        <option value="1" selected>MMK</option>
                    </select>
                </div>
            </div>
            <div class="calcBtn">
                <button>Calculate</button>
            </div>
        </form>
        <div class="record">
            <table>
                <thead>
                    <tr>
                        <th class="changeWidth">Input</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Result</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
            <button class="clearBtn">ClearAll</button>
        </div>
    </div>
    <?php

        $a = file_get_contents("http://forex.cbm.gov.mm/api/latest");
        echo $a;

    ?>
    <script>
        let data = <?php echo $a; ?>;
        console.log(data.rates)
    </script>
    <script src="script.js"></script>
</body>
</html>