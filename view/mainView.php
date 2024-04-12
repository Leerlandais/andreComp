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
                <input type="text" name="compName" style="display: none;" value="<?=$_POST["comp_inp"]?>">
                <label for="inc_jan">Jan</label>
                    <input type="text" name="inc_jan" id="">
                <label for="inc_feb">Feb</label>
                    <input type="text" name="inc_feb" id="">
                <label for="inc_mar">Mar</label>
                    <input type="text" name="inc_mar" id="">
                <label for="inc_apr">Apr</label>
                    <input type="text" name="inc_apr" id="">
                <label for="inc_may">May</label>
                    <input type="text" name="inc_may" id="">
                <label for="inc_jun">Jun</label>
                    <input type="text" name="inc_jun" id="">
                <label for="inc_jul">Jul</label>
                    <input type="text" name="inc_jul" id="">
                <label for="inc_aug">Aug</label>
                    <input type="text" name="inc_aug" id="">
                <label for="inc_sep">Sep</label>
                    <input type="text" name="inc_sep" id="">
                <label for="inc_oct">Oct</label>
                    <input type="text" name="inc_oct" id="">
                <label for="inc_nov">Nov</label>
                    <input type="text" name="inc_nov" id="">
                <label for="inc_dec">Dec</label>
                    <input type="text" name="inc_dec" id="">
                    <button type="submit">Add Incomes</button>
            </form>
            <?php

          var_dump($_POST["comp_inp"]); 
        }
            ?>
    <script src="scripts/script.js"></script>
</body>
</html>