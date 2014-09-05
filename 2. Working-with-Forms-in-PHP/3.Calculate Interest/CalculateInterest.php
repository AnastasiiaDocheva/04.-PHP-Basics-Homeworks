<!DOCTYPE html>
<?php
    if(isset($_GET['amount']) && isset($_GET['currency']) && isset($_GET['interest']) && isset($_GET['period'])) {
        $moneyAmount = $_GET['amount'];
        $currency = $_GET['currency'];
        $interest = $_GET['interest'];
        $period = $_GET['period'];

        if($period == '6mnts') {
            $period = 6;
        }
        else if($period == '1year') {
            $period = 12;
        }
        else if($period == '2year') {
            $period = 24;
        }
        else {
            $period = 60;
        }

        $result = round($moneyAmount * pow(1 + (($interest / 100) / 12), $period / 12 * 12), 2);

        if($currency == 'usd') {
            $result = '$ ' . $result;
        }
        else if($currency == 'eur') {
            $result = '&#8364; ' . $result;
        }
        else {
            $result .= " Lv.";
        }
}
?>

<html>
<head>
    <title>Calculate Interest</title>
</head>
<body>
<form action="CalculateInterest.php" method="get">
    <label for="amount">Enter amount</label>
    <input type="text" name="amount" id="amount"/><br/>
    <input type="radio" name="currency" value="usd" id="usd"/>
    <label for="usd">USD</label>
    <input type="radio" name="currency" value="eur" id="eur"/>
    <label for="eur">EUR</label>
    <input type="radio" name="currency" value="bgn" id="bgn"/>
    <label for="bgn">BGN</label><br/>
    <label for="interest-rate">Compound Interest Rate:</label>
    <input type="text" id="interest-rate" name="interest"/><br/>
    <select name="period" id="duration">
        <option value="6mnts">6 Months</option>
        <option value="1year">1 Year</option>
        <option value="2year">2 Years</option>
        <option value="6year">5 Years</option>
    </select>
    <input type="submit" name="submitInfo"/>
</form>
<?php
    if(isset($result)) {
        echo $result;
    }
?>
</body>
</html>