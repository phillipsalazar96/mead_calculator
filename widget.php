<div class="mead-calculator-box">

<table class="abv-table">
    <tr>
        <th>ABV calculator</th>
    </tr>
    <tr>
        <td>Orignal Gravity</td>
        <td>Final Gravity</td>
    </tr>
    <tr>
        <td><input id="og" type="number" value=""/></td>
        <td><input id="fg" type="number" value=""/></td>
    </tr>
    <tr>
        <td><button class="calc-buttons " onclick="finalGravity()">Calculate</button></td>
        <td>ABV is about: <bold id="abv">0</bold>%</td>
    </tr>

</table>
<p></p>

<table class="brix-table">
    <tr>
        <th colspan="2">Brix to Specific gravity calculator</th>
    </tr>
    <tr>
        <td>Brix</td>

    </tr>
    <tr>
        <td><input id="brix" type="number" value=""/></td>
        <td>specific gravity is: <bold id="brix-sp">0</bold></td>
    </tr>
    <tr>
        <td><button class="calc-buttons " onclick="brixToSG()">Calculate</button></td>
    
        <td>ABV potential is: <bold id="brix-abv">0</bold>%</td>
    </tr>
    

</table>
<p></p>

</div>
<style>
.mead-calculator-box
{
    height: 600px;
    width: 450px;
    
    margin-left: 30px;
}

.abv-table {
    margin-top: 20px;
}

.brix-table {
    margin-top: 100px;
}

.calc-buttons {
    background-color: darkorange;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 7px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-top: 5px;

}

th {
    font-size: 18px;
}

</style>
<script>

// og is original gravity
// fg final gravity
function calcABV(og, fg)
{
    let abv = (og - fg ) * 131.25;
    return abv
}

function finalGravity()
{
    let og = document.getElementById('og').value;
    let fg = document.getElementById('fg').value;
    let abv = calcABV(og, fg)
    document.getElementById('abv').innerHTML = abv.toFixed(2);

}

function brixToSG()
{
    let brix =document.getElementById('brix').value;
    let sg = (brix / (258.6-((brix / 258.2)*227.1))) + 1;
    document.getElementById('brix-sp').innerHTML = sg.toFixed(3);

    let abv = calcABV(sg, 1.000);
    document.getElementById('brix-abv').innerHTML = abv.toFixed(2);

}



</script>