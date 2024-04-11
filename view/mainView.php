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
        <h3>Here are Andre's Companies &lpar;he must be a rich guy&rpar;  </h3>
            <h4 id="compListHead">Click on a company to show its income</h4>
            <ul>
                <?php 
                if (!empty($getComp)) {
                    foreach($getComp as $comp) :
                ?>
                <li class="compName"><?= $comp["nom"] ?></li>
                <?php 
                endforeach;
                }
                ?>
            </ul>
            <p>Or click <a href="?sect=addComp">here</a> to add one</p>
      
    </fieldset>

        <?php 
        if (isset($_GET["sect"]) && $_GET["sect"] === "addComp") {
            ?>
            <form action="?sect=addInc" method="POST">
                <label for="comp_inp">Name : </label>
                <input type="text" name="comp_inp" id="compInpName">
                <button type="submit">Send</button>
            </form>
            <?php
        }else if (isset($_GET["sect"]) && $_GET["sect"] === "addInc") {
            ?>
            <h2><?=$_POST["comp_inp"]?> added. Add their income for the year by month</h2>
            <form action="" method="POST">
                <label for="inpJan">Jan</label>
                    <input type="text" name="inpJan" id="">
                <label for="inpFeb">Feb</label>
                    <input type="text" name="inpFeb" id="">
                <label for="inpMar">Mar</label>
                    <input type="text" name="inpMar" id="">
                <label for="inpApr">Apr</label>
                    <input type="text" name="inpApr" id="">
                <label for="inpMay">May</label>
                    <input type="text" name="inpMay" id="">
                <label for="inpJun">Jun</label>
                    <input type="text" name="inpJun" id="">
                <label for="inpJul">Jul</label>
                    <input type="text" name="inpJul" id="">
                <label for="inpAug">Aug</label>
                    <input type="text" name="inpAug" id="">
                <label for="inpSep">Sep</label>
                    <input type="text" name="inpSep" id="">
                <label for="inpOct">Oct</label>
                    <input type="text" name="inpOct" id="">
                <label for="inpNov">Nov</label>
                    <input type="text" name="inpNov" id="">
                <label for="inpDec">Dec</label>
                    <input type="text" name="inpDec" id="">
                    <button type="submit">Add Incomes</button>
            </form>
            <?php

       //   var_dump($_POST["comp_inp"]); this worked
        }
            ?>
    <script src="scripts/script.js"></script>
</body>
</html>