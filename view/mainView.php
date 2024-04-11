<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Andrés Company Income Page</title>
</head>
<body>
    <h6 id="screenwidth"></h6>
    <h1>Andrés Companies</h1>
    <fieldset>
        <h3>Here are Andre's Companies &lpar;he must be a rich guy&rpar;
            <h4 id="compListHead">Click on a company to show its income</h4>
            <ul>
                <!-- <li class="compName"></li> -->
            </ul>
        </h3>
    </fieldset>

        <?php 
        if (isset($_GET["sect"]) && $_GET["sect"] === "addComp") {
            ?>
            <form action="./" method="POST">
                <label for="comp_inp">Name : </label>
                <input type="text" name="comp_inp" id="compInpName">
                <button type="submit">Send</button>
            </form>
            <?php
        }
        if (isset($addComp)) : var_dump( $addComp); endif;
            ?>
    <script src="scripts/script.js"></script>
</body>
</html>