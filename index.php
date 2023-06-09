<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Test</title>
</head>
<body>
<div class="container">
    <table border="3" class="table">
        <!--Это заголовки таблицы-->
        <tr>
            <th colspan="3" scope="col" >Таблица истинности PHP</th>

        </tr>
        <tr>
            <th scope="col">A</th>
            <th scope="col">B</th>
            <th scope="col">!A</th>
            <th scope="col">A || B</th>
            <th scope="col">A && B</th>
            <th scope="col">A xor B</th>

        </tr>
        <!--Это будет первый ряд таблицы:-->
        <tr class="table-primary">
            <td><?= $firstA = 0 ?></td>
            <td><?= $firstB = 0 ?></td>
            <td><?= ! $firstA ?></td>
            <td><?=  (int)$firstor = $firstA || $firstB ?></td>
            <td><?=  (int)$firstand = $firstA && $firstB ?></td>
            <td><?=  $firstxor = $firstA ^ $firstB ?></td>
        </tr>

        <!--Это будет второй ряд таблицы:-->
        <tr>
            <td><?= $secondA = 0 ?></td>
            <td><?= $secondB = 1 ?></td>
            <td><?= ! $secondA  ?></td>
            <td><?=  (int)$secondor = $secondA || $secondB ?></td>
            <td><?=  (int)$secondand = $secondA && $secondB ?></td>
            <td><?=  $secondxor = $secondA ^ $secondB ?></td>
        </tr>

        <!--Это будет третий ряд таблицы:-->
        <tr class="table-primary">
            <td><?= $thirdA = 1 ?></td>
            <td><?= $thirdB = 0 ?></td>
            <td><?= (int)!$thirdA ?></td>
            <td><?=  (int)$thirdor = $thirdA || $thirdB ?></td>
            <td><?=  (int)$thirdand = $thirdA && $thirdB ?></td>
            <td><?=  $thirdxor = $thirdA ^ $thirdB ?></td>
        </tr>
        <tr>
            <td><?= $fourthA = 1 ?></td>
            <td><?= $fourthB = 1 ?></td>
            <td><?= (int)!$fourthA ?></td>
            <td><?=  (int)$fourthor = $fourthA || $fourthB ?></td>
            <td><?=  (int)$fourthand = $fourthA && $fourthB ?></td>
            <td><?=  $fourthxor = $fourthA ^ $fourthB ?></td>
        </tr>

    </table>
    <!-----------таблицы-------------------->
    <table border="3" class="table">
        <!--Это заголовки таблицы-->
        <tr>
            <th colspan="9" >Гибкое сравнение в PHP</th>

        </tr>
        <tr class="table-primary">
            <th scope="col"></th>
            <th scope="col"><?= " true" ?></th>
            <th scope="col"><?= "false" ?></th>
            <th scope="col"><?= 1 ?></th>
            <th scope="col"><?=  0 ?></th>
            <th scope="col"><?= -1 ?></th>
            <th scope="col"><?= "1" ?></th>
            <th scope="col"><?= "null" ?></th>
            <th scope="col"><?= "php" ?></th>

        </tr>
        <!--Это будет первый ряд таблицы:-->
        <tr>
            <th scope="row"><?= " true" ?></th>
            <td><?= (int)(($thisIsTrue = true) == ($thatIsTrue = true)) ?></td>
            <td><?= (int)(($thisIsFalse = false) == $thatIsTrue) ?></td>
            <td><?= (int)(($thisIsOne = 1) == $thatIsTrue )?></td>
            <td><?= (int)(($thisIsZero = 0) == $thatIsTrue) ?></td>
            <td><?= (int)(($thisIsMinusOne = -1) == $thatIsTrue) ?></td>
            <td><?= (int)(($thisIsStrOne = "1") == $thatIsTrue) ?></td>
            <td><?= (int)(($thisIsNull = null) == $thatIsTrue )?></td>
            <td><?= (int)(($thisIsPHP = "php") == $thatIsTrue) ?></td>
        </tr>

        <!--Это будет второй ряд таблицы:-->
        <tr class="table-primary">
            <th scope="row"><?=  "false" ?></th>
            <td><?= (int)($thisIsTrue == ($thatIsFalse = false)) ?></td>
            <td><?= (int)($thisIsFalse == $thatIsFalse) ?></td>
            <td><?= (int)($thisIsOne == $thatIsFalse) ?></td>
            <td><?= (int)($thisIsZero == $thatIsFalse) ?></td>
            <td><?= (int)($thisIsMinusOne == $thatIsFalse) ?></td>
            <td><?= (int)($thisIsStrOne == $thatIsFalse) ?></td>
            <td><?= (int)($thisIsNull == $thatIsFalse) ?></td>
            <td><?= (int)($thisIsPHP == $thatIsFalse) ?></td>
        </tr>

        <!--Это будет третий ряд таблицы:-->
        <tr>

            <th scope="row"><?=  1 ?></th>
            <td><?= (int)($thisIsTrue == ($thatIsOne = 1)) ?></td>
            <td><?= (int)($thisIsFalse == $thatIsOne) ?></td>
            <td><?= (int)($thisIsOne == $thatIsOne) ?></td>
            <td><?= (int)($thisIsZero == $thatIsOne) ?></td>
            <td><?= (int)($thisIsMinusOne == $thatIsOne) ?></td>
            <td><?= (int)($thisIsStrOne == $thatIsOne )?></td>
            <td><?= (int)($thisIsNull == $thatIsOne) ?></td>
            <td><?= (int)($thisIsPHP == $thatIsOne) ?></td>
        </tr>
        <tr class="table-primary">
            <th scope="row"><?=  0 ?></th>
            <td><?= (int)($thisIsTrue == ($thatIsZero = 0)) ?></td>
            <td><?= (int)($thisIsFalse == $thatIsZero) ?></td>
            <td><?= (int)($thisIsOne == $thatIsZero) ?></td>
            <td><?= (int)($thisIsZero == $thatIsZero) ?></td>
            <td><?= (int)($thisIsMinusOne == $thatIsZero) ?></td>
            <td><?= (int)($thisIsStrOne == $thatIsZero) ?></td>
            <td><?= (int)($thisIsNull == $thatIsZero) ?></td>
            <td><?= (int)($thisIsPHP == $thatIsZero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?=  -1 ?></th>
            <td><?= (int)($thisIsTrue == ($thatIsMinusOne = -1)) ?></td>
            <td><?= (int)($thisIsFalse == $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsOne == $thatIsMinusOne )?></td>
            <td><?= (int)($thisIsZero == $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsMinusOne == $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsStrOne == $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsNull == $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsPHP == $thatIsMinusOne) ?></td>
        </tr>
        <tr class="table-primary">
            <th scope="row"><?= "1" ?></th>
            <td><?= (int)($thisIsTrue == ($thatIsStrOne = "1")) ?></td>
            <td><?= (int)($thisIsFalse == $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsOne == $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsZero == $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsMinusOne == $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsStrOne == $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsNull == $thatIsStrOne )?></td>
            <td><?= (int)($thisIsPHP == $thatIsStrOne) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= "null" ?></th>
            <td><?= (int)($thisIsTrue == ($thatIsNull = null)) ?></td>
            <td><?= (int)($thisIsFalse == $thatIsNull) ?></td>
            <td><?= (int)($thisIsOne == $thatIsNull) ?></td>
            <td><?= (int)($thisIsZero == $thatIsNull) ?></td>
            <td><?= (int)($thisIsMinusOne == $thatIsNull) ?></td>
            <td><?= (int)($thisIsStrOne == $thatIsNull) ?></td>
            <td><?= (int)($thisIsNull == $thatIsNull) ?></td>
            <td><?= (int)($thisIsPHP == $thatIsNull) ?></td>
        </tr>
        <tr class="table-primary">
            <th scope="row"><?=  "php" ?></th>
            <td><?= (int)($thisIsTrue == ($thatIsPHP = "php")) ?></td>
            <td><?= (int)($thisIsFalse == $thatIsPHP) ?></td>
            <td><?= (int)($thisIsOne == $thatIsPHP) ?></td>
            <td><?= (int)($thisIsZero == $thatIsPHP) ?></td>
            <td><?= (int)($thisIsMinusOne == $thatIsPHP) ?></td>
            <td><?= (int)($thisIsStrOne == $thatIsPHP )?></td>
            <td><?= (int)($thisIsNull == $thatIsPHP) ?></td>
            <td><?= (int)($thisIsPHP == $thatIsPHP) ?></td>
        </tr>

    </table>
    <table border="3" class="table">
        <!--Это заголовки таблицы-->
        <tr>
            <th colspan="9" >Жёсткое сравнение в PHP</th>

        </tr>
        <tr class="table-primary">
            <th scope="col"></th>
            <th scope="col"><?= " true" ?></th>
            <th scope="col"><?= "false" ?></th>
            <th scope="col"><?= 1 ?></th>
            <th scope="col"><?=  0 ?></th>
            <th scope="col"><?= -1 ?></th>
            <th scope="col"><?= "1" ?></th>
            <th scope="col"><?= "null" ?></th>
            <th scope="col"><?= "php" ?></th>

        </tr>
        <!--Это будет первый ряд таблицы:-->
        <tr>
            <th scope="row"><?= " true" ?></th>
            <td><?= (int)(($thisIsTrue = true) === ($thatIsTrue = true)) ?></td>
            <td><?= (int)(($thisIsFalse = false) === $thatIsTrue) ?></td>
            <td><?= (int)(($thisIsOne = 1) === $thatIsTrue )?></td>
            <td><?= (int)(($thisIsZero = 0) === $thatIsTrue) ?></td>
            <td><?= (int)(($thisIsMinusOne = -1) === $thatIsTrue) ?></td>
            <td><?= (int)(($thisIsStrOne = "1") === $thatIsTrue) ?></td>
            <td><?= (int)(($thisIsNull = null) === $thatIsTrue )?></td>
            <td><?= (int)(($thisIsPHP = "php") === $thatIsTrue) ?></td>
        </tr>

        <!--Это будет второй ряд таблицы:-->
        <tr class="table-primary">
            <th scope="row"><?=  "false" ?></th>
            <td><?= (int)($thisIsTrue === ($thatIsFalse = false)) ?></td>
            <td><?= (int)($thisIsFalse === $thatIsFalse) ?></td>
            <td><?= (int)($thisIsOne === $thatIsFalse) ?></td>
            <td><?= (int)($thisIsZero === $thatIsFalse) ?></td>
            <td><?= (int)($thisIsMinusOne === $thatIsFalse) ?></td>
            <td><?= (int)($thisIsStrOne === $thatIsFalse) ?></td>
            <td><?= (int)($thisIsNull === $thatIsFalse) ?></td>
            <td><?= (int)($thisIsPHP === $thatIsFalse) ?></td>
        </tr>

        <!--Это будет третий ряд таблицы:-->
        <tr>

            <th scope="row"><?=  1 ?></th>
            <td><?= (int)($thisIsTrue === ($thatIsOne = 1)) ?></td>
            <td><?= (int)($thisIsFalse === $thatIsOne) ?></td>
            <td><?= (int)($thisIsOne === $thatIsOne) ?></td>
            <td><?= (int)($thisIsZero === $thatIsOne) ?></td>
            <td><?= (int)($thisIsMinusOne === $thatIsOne) ?></td>
            <td><?= (int)($thisIsStrOne === $thatIsOne )?></td>
            <td><?= (int)($thisIsNull === $thatIsOne) ?></td>
            <td><?= (int)($thisIsPHP === $thatIsOne) ?></td>
        </tr>
        <tr class="table-primary">
            <th scope="row"><?=  0 ?></th>
            <td><?= (int)($thisIsTrue === ($thatIsZero = 0)) ?></td>
            <td><?= (int)($thisIsFalse === $thatIsZero) ?></td>
            <td><?= (int)($thisIsOne === $thatIsZero) ?></td>
            <td><?= (int)($thisIsZero === $thatIsZero) ?></td>
            <td><?= (int)($thisIsMinusOne === $thatIsZero) ?></td>
            <td><?= (int)($thisIsStrOne === $thatIsZero) ?></td>
            <td><?= (int)($thisIsNull === $thatIsZero) ?></td>
            <td><?= (int)($thisIsPHP === $thatIsZero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?=  -1 ?></th>
            <td><?= (int)($thisIsTrue === ($thatIsMinusOne = -1)) ?></td>
            <td><?= (int)($thisIsFalse === $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsOne === $thatIsMinusOne )?></td>
            <td><?= (int)($thisIsZero === $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsMinusOne === $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsStrOne === $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsNull === $thatIsMinusOne) ?></td>
            <td><?= (int)($thisIsPHP === $thatIsMinusOne) ?></td>
        </tr>
        <tr class="table-primary">
            <th scope="row"><?= "1" ?></th>
            <td><?= (int)($thisIsTrue === ($thatIsStrOne = "1")) ?></td>
            <td><?= (int)($thisIsFalse === $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsOne === $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsZero === $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsMinusOne === $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsStrOne === $thatIsStrOne) ?></td>
            <td><?= (int)($thisIsNull === $thatIsStrOne )?></td>
            <td><?= (int)($thisIsPHP === $thatIsStrOne) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= "null" ?></th>
            <td><?= (int)($thisIsTrue === ($thatIsNull = null)) ?></td>
            <td><?= (int)($thisIsFalse === $thatIsNull) ?></td>
            <td><?= (int)($thisIsOne === $thatIsNull) ?></td>
            <td><?= (int)($thisIsZero === $thatIsNull) ?></td>
            <td><?= (int)($thisIsMinusOne === $thatIsNull) ?></td>
            <td><?= (int)($thisIsStrOne === $thatIsNull) ?></td>
            <td><?= (int)($thisIsNull === $thatIsNull) ?></td>
            <td><?= (int)($thisIsPHP === $thatIsNull) ?></td>
        </tr>
        <tr class="table-primary">
            <th scope="row"><?=  "php" ?></th>
            <td><?= (int)($thisIsTrue === ($thatIsPHP = "php")) ?></td>
            <td><?= (int)($thisIsFalse === $thatIsPHP) ?></td>
            <td><?= (int)($thisIsOne === $thatIsPHP) ?></td>
            <td><?= (int)($thisIsZero === $thatIsPHP) ?></td>
            <td><?= (int)($thisIsMinusOne === $thatIsPHP) ?></td>
            <td><?= (int)($thisIsStrOne === $thatIsPHP )?></td>
            <td><?= (int)($thisIsNull === $thatIsPHP) ?></td>
            <td><?= (int)($thisIsPHP === $thatIsPHP) ?></td>
        </tr>

    </table>
</div>

</body>
</html>
