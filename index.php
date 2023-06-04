
<?php
/*
echo strlen ("Nguyen Thi Thu Thao");
?><hr>
2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count()<hr>
<?php
echo str_word_count("Dai hoc Thuong Mai");
?><hr>
3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().<hr>
<?php
echo strrev ("Dai hoc Thuong Mai");
?><hr>
4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos()<hr>
<?php
echo strpos ("Nguyen Thi Thu Thao","Thao");
?><hr>
5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace()<hr>
<?php
echo str_replace ("Thao", "Ha", "Nguyen Thao");
?><hr>
6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().<hr>
<?php
$str = "cd";
$strCheck = "cded adc";
$position = strpos($strCheck, $str);
var_dump($position);
?><hr>
7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().<hr>
<?php
echo strtoupper("nguyen thi thu thao");
?><hr>
8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().<hr>
<?php
echo strtolower ("NGUYEN THI THU THAO");
?><hr>
9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().<hr>
<?php
echo ucwords ("nguyen thi thu thao");
?><hr>
10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().<hr>
<?php
echo trim ("Nguyen \n\n\n\nThi \n\n\nThu \n\n\nThao");
?><hr>
11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().<hr>
<?php
echo ltrim ("aaHom nay la thu nam", "aa");
?><hr>
12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().<hr>
<?php
echo rtrim ("Hom nay la thu nambbbbb", "bbbbb");
?><hr>
13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().<hr>
<?php
    $text = "htc samsung nokia apple lg lenovo";
    $arr = explode(" ",$text);
    echo $text; 
    print_r($arr);
?><hr>
14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().<hr>
<?php
 $array = array('website', 'dammio', 'com');
$comma_separated = implode("-", $array);
 echo $comma_separated; // nối 3 phần tử thành chuỗi kết quả với ngăn cách giữa cách phần tử là dấu gạch ngang
 ?><hr>
 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().<hr>
<?php
$input = "Nguyen Thao";
echo str_pad($input, 20, "------", STR_PAD_LEFT) ."<hr />"; 
 echo str_pad($input,  13, "___") ."<hr />";         
 ?>    <hr>
 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().<hr>
 <?php
 $str = 'Hello World !';
 $sub = 'World';
 $result = strrchr($str, $sub);
 if ($result == false) {
     echo "không tồn tại";
 }else{
     echo $result;
 }
 ?><hr>

17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().<hr>

 <?php
$str = 'Hello world !';
$sub = 'world';
if (strlen(strstr($str, $sub)) > 0) {
echo 'Có';
} else {
echo 'Không';
}
?><hr>
18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().<hr>
<?php
$partern = '/hi/';
$subject = 'hi everybody, hi there';
$replacement = 'hello';
echo preg_replace($partern, $replacement, $subject);
?><hr>
19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().<hr>
<?php
$var = 24;
if (is_int($var)) {
    echo 'biến thuộc kiểu số nguyên';
}else{
    echo 'biến không thuộc kiểu số nguyên';
}
?><hr>
20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().<hr>
<?php
$email = 'nguyenthao0202@gmail.com';
$rs = filter_var($email, FILTER_VALIDATE_EMAIL);
if ($rs === false)
{
    echo $email, ' không phải địa chỉ email';
}
else
{
    echo $rs, ' là một địa chỉ email';
}
?><hr><hr><hr>
*/


//Câu 1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
/*$number=6;

function checkNumber($number)
{
    if ($number % 2 == 0) {
        echo "{$number} là số chẵn.";
    } else {
        echo "{$number} không là số chẵn.";
    }
}
checkNumber($number);
?><br>

Câu 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.<br>
<?php
$n=10;
function sum($n)
{
    $sum = 0;

    for ($index = 1; $index <= $n; $index++) {
        $sum += $index;
    }
return $sum;
}
echo sum($n);
?><br>

Câu 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.<br>
<?php
function printfTable()
{
    for ($index = 1; $index <= 10; $index++) {
        for ($index1 = 1; $index1 <= 10; $index1++) {
            $result = $index * $index1; 
            echo "{$index} x {$index1} = {$result}\n";
        }
        echo "\n";
    }
}
echo printfTable();
?><br>

Câu 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.<br>
<?php
$myString= 'Hello world!';
$word='world';
function checkString($myString, $word)
{
  
    $position = strpos($myString, $word);

    if ($position === false) {
        echo "Chuỗi không chứa từ '{$word}'.";
    } else {
        echo "Chuỗi chứa từ '{$word}'.";
    }
}

checkString($myString, $word);
?><br>

Câu 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.<br>
<?php
$array = array(5, 3, 8, 2, 9, 1);
function findMinMax($array) {
    $min = $array[0];
    $max = $array[0];

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }

        if ($value > $max) {
            $max = $value;
        }
    }

    return array('min' => $min, 'max' => $max);
}

// Tìm giá trị lớn nhất và nhỏ nhất
$result = findMinMax($array);

// In kết quả
echo "Giá trị nhỏ nhất: " . $result['min'] . "<br>";
echo "Giá trị lớn nhất: " . $result['max'] . "<br>";
?><br>

Câu 6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.<br>
<?php
$numbers = array(4, 6, 2, 22, 11);
function arrange($numbers){
    sort($numbers);
  
    foreach( $numbers as $n) {
        echo "$n <br>";
    }
}
echo arrange($numbers);
?><br><br>
Câu 7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.<br>
<?php
$n=4;
function value($n)
{
    if ($n === 0 || $n === 1) {
        return 1;
    } else {
        return $n * value($n - 1);
    }
}
echo value($n);
?><br>

Câu 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.<br>
<?php
function checkPrime($n)
{
    for ($index = 2; $index <= sqrt($n); $index++) {
        if ($n % $index == 0){
            return false;
        }
    }
    return true;
}
$start=1;
$end=100;
function findPrime($start,$end)
{
    $Prime = [];

    for ($index = $start; $index <= $end; $index++) {
        if (checkPrime($index)) {
            $Prime[] = $index;
        }
    }

    return $Prime;
}
$numbers = findPrime($start, $end);

echo "Các số nguyên tố trong khoảng từ {$start} đến {$end} là: ";
foreach($numbers as $Prime) {
    echo "{$Prime} ";
}
?><br>

Câu 9.Viết chương trình PHP để tính tổng của các số trong một mảng.<br>
<?php
$numbers= array(3,7,2,5,9);
function total($numbers)
{
    $sum = 0;

    foreach ($numbers as $Value) {
        $sum += $Value;
    }

    return $sum;
}
$sum = total($numbers);

echo "Tổng của các số trong mảng là: {$sum}\n";
?><br>

Câu 10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.<br>
<?php
$start = 1;
$end = 10;
function printfFibonacci($start, $end)
{
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    for ($index = 2; $index <= $end; $index++) {
        $fibonacci[$index] = $fibonacci[$index - 1] + $fibonacci[$index - 2];
    }

    for ($index = $start; $index <= $end; $index++) {
        echo $fibonacci[$index] . " ";
    }
}

echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
printfFibonacci($start, $end);
?><br>

Câu 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.<br>
<?php
$number = 153;
function checkArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $numDigits = strlen((string) $number);

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $numDigits);
        $temp = (int) ($temp / 10);
    }

    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}

if (checkArmstrongNumber($number)) {
    echo "$number là số Armstrong";
} else {
    echo "$number không phải là số Armstrong";
}
?><br>

Câu 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.<br>
<?php
$array = [1, 2, 3, 4, 5];
$number = 10;
$position = 2;

function insertNumber($array, $number, $position)
{
    $leng = count($array);

    // Kiểm tra nếu vị trí chèn lớn hơn độ dài mảng hoặc nhỏ hơn 0
    if ($position > $leng || $position < 0) {
        echo "Vị trí chèn không hợp lệ.";
        return $array;
    }

    // Dịch chuyển các phần tử về phía sau để tạo chỗ cho phần tử mới
    for ($index = $leng - 1; $index >= $position; $index--) {
        $array[$index + 1] = $array[$index];
    }

    // Chèn phần tử vào vị trí đã cho
    $array[$position] = $number;

    return $array;
}
echo "Mảng gốc: ";
print_r($array);

$arrayAfter = insertNumber($array, $number, $position);

echo "Mảng sau khi chèn: ";
print_r($arrayAfter);
?><br>

Câu 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.<br>
function removeDuplicates($arr)
{
    $result = array();

    foreach ($arr as $element) {
        $isDuplicate = false;
        
        foreach ($result as $resElement) {
            if ($element === $resElement) {
                $isDuplicate = true;
                break;
            }
        }
        
        if (!$isDuplicate) {
            $result[] = $element;
        }
    }

    return $result;
}

// Mảng ban đầu có các phần tử trùng lặp
$array = array(1, 2, 3, 2, 4, 1, 5, 3);

// Loại bỏ các phần tử trùng lặp
$uniqueArray = removeDuplicates($array);

// In kết quả
print_r($uniqueArray);

Câu 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.<br>
<?php
$array = [1, 2, 3, 4, 1, 2, 5, 6, 3];
$element = 1;
function findElementIndex($arr, $element)
{
    $indexes = [];

    // Duyệt qua mảng và kiểm tra từng phần tử
    for ($index = 0; $index < count($arr); $index++) {
        if ($arr[$index] == $element) {
            // Nếu phần tử được tìm thấy, thêm vị trí vào mảng $indexes
            $indexes[] = $index;
        }
    }

    return $indexes;
}
// Tìm vị trí của phần tử trong mảng
$indexes = findElementIndex($array, $element);
// In ra các vị trí tìm được
foreach ($indexes as $index) {
    echo "Vị trí: " . $index . "\n";
}
?><br>

Câu 15.Viết chương trình PHP để đảo ngược một chuỗi.<br>
<?php
$string = "Hello everyone";
function reverseString($str)
{
    $reversed = '';

    // Duyệt qua chuỗi từ cuối đến đầu và nối từng ký tự vào biến $reversed
    for ($index = strlen($str) - 1; $index >= 0; $index--) {
        $reversed .= $str[$index];
    }

    return $reversed;
}
// Đảo ngược chuỗi
$reversedString = reverseString($string);
echo $reversedString;
?><br>


Câu 16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.<br>
<?php
function countElements($array) {
    $count = 0;
    
    foreach ($array as $item) {
        $count++;
    }
    
    return $count;
}

// Mảng ban đầu
$array = array(1, 2, 3, 4, 5);

// Tính số lượng phần tử trong mảng
$count = countElements($array);

// In số lượng phần tử
echo "Số lượng phần tử trong mảng: " . $count;
?>
Câu 17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.<br>
<?php
$string1 = "Madam";
$string2 = "Hello";
function checkPalindrome($str)
{
    // Xóa các khoảng trắng và chuyển đổi chuỗi về chữ thường
    $str = strtolower(str_replace(' ', '', $str));

    // Đảo ngược chuỗi
    $reversed = strrev($str);

    // So sánh chuỗi gốc và chuỗi đảo ngược
    if ($str === $reversed) {
        return true;
    } else {
        return false;
    }
}

// Kiểm tra chuỗi 1
if (checkPalindrome($string1)) {
    echo $string1 . " là chuỗi Palindrome.";
} else {
    echo $string1 . " không là chuỗi Palindrome.";
}
echo "\n";
// Kiểm tra chuỗi 2
if (checkPalindrome($string2)) {
    echo $string2 . " là chuỗi Palindrome.";
} else {
    echo $string2 . " không là chuỗi Palindrome.";
}
?><br>

Câu 18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.<br>
<?php
$array = [1, 2, 3, 4, 1, 2, 5, 6, 3];
$element = 3;
function countOccurrences($arr, $element)
{
    $count = 0;
    foreach ($arr as $value) {
        if ($value == $element) {
            // Nếu phần tử trùng khớp, tăng biến đếm lên 1
            $count++;
        }
    }

    return $count;
}

// Đếm số lần xuất hiện của phần tử trong mảng
$count = countOccurrences($array, $element);

// In ra số lần xuất hiện
echo "Số lần xuất hiện của phần tử $element trong mảng là: " . $count;
?><br>

Câu 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.<br>
<?php
$array = [5, 12, 9, 11, 7, 3];
function sortArrayDescending($arr)
{
    // Sử dụng hàm rsort để sắp xếp mảng theo thứ tự giảm dần
    rsort($arr);

    return $arr;
}
$sortedArray = sortArrayDescending($array);

echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: ";
foreach ($sortedArray as $element) {
    echo $element . " ";
}
?><br>

Câu 20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.<br>
<?php
$array = [1, 2, 3, 4];
$element = 0;
// Thêm phần tử vào đầu mảng
function addElementToFront($arr, $element)
{
    array_unshift($arr, $element);
    return $arr;
}

// Thêm phần tử vào cuối mảng
function addElementToBack($arr, $element)
{
    $arr[] = $element;
    return $arr;
}
// Thêm phần tử vào đầu mảng
$arrayWithElementAtFront = addElementToFront($array, $element);
// Thêm phần tử vào cuối mảng
$arrayWithElementAtBack = addElementToBack($array, $element);

// In ra mảng sau khi thêm phần tử
echo "Mảng sau khi thêm phần tử vào đầu: " . implode(", ", $arrayWithElementAtFront) . "\n"; 
echo "Mảng sau khi thêm phần tử vào cuối: " . implode(", ", $arrayWithElementAtBack);
?><br>

Câu 21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng. <br>
<?php
$array = [10, 4, 20, 56, 7, 2,-3,-6, 9];
function findSecondLargest($arr) {
    $n = count($arr);
    
    if ($n < 2) {
        return "Mảng phải có ít nhất 2 phần tử";
    }
    
    $largest = $arr[0];
    $secondLargest = $arr[1];
    
    if ($secondLargest > $largest) {
        $largest = $arr[1];
        $secondLargest = $arr[0];
    }
    
    for ($index = 2; $index < $n; $index++) {
        if ($arr[$index] > $largest) {
            $secondLargest = $largest;
            $largest = $arr[$index];
        } elseif ($arr[$index] > $secondLargest && $arr[$index] != $largest) {
            $secondLargest = $arr[$index];
        }
    }
    
    return $secondLargest;
}

$secondLargest = findSecondLargest($array);

echo "Số lớn thứ 2 trong mảng là: " . $secondLargest;
?><br>


Câu 22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.<br>
<?php
$num1 = 6;
$num2 = 8;
function findGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findLCM($a, $b) {
    $gcd = findGCD($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}
$gcd = findGCD($num1, $num2);
$lcm = findLCM($num1, $num2);

echo "Ước chung lớn nhất (GCD) của $num1 và $num2 là: $gcd\n";
echo "Bội chung nhỏ nhất (LCM) của $num1 và $num2 là: $lcm";

?><br>

Câu 23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.<br>
<?php
$number = 6;
function checkPerfectNumber($num) {
    if ($num <= 0) {
        return false;
    }
    $sum = 0;
    
    for ($index = 1; $index <= $num / 2; $index++) {
        if ($num % $index === 0) {
            $sum += $index;
        }
    }
    
    return $sum === $num;
}

if (checkPerfectNumber($number)) {
    echo "$number là số hoàn hảo.";
} else {
    echo "$number không phải là số hoàn hảo.";
}
?><br>

Câu 24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.<br>
<?php
$array = [2, 5, 8, 11, 6, 9, 78, 45, 99, 4];
function findLargestOdd($arr) {
    $largestOdd = null;
    
    foreach ($arr as $num) {
        if ($num % 2 !== 0 && ($largestOdd === null || $num > $largestOdd)) {
            $largestOdd = $num;
        }
    }
    
    return $largestOdd;
}

$largestOdd = findLargestOdd($array);

if ($largestOdd === null) {
    echo "không tìm thấy số lẻ nào.";
} else {
    echo "Số lẻ lớn nhất là: $largestOdd";
}
?><br>

Câu 25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.<br>
<?php
$number = 5;
function checkPrimeNumber($num) {
    if ($num <= 1) {
        return false;
    }
    
    for ($index = 2; $index <= sqrt($num); $index++) {
        if ($num % $index === 0) {
            return false;
        }
    }
    
    return true;
}

if (checkPrimeNumber($number)) {
    echo "$number là số nguyên tố.";
} else {
    echo "$number không là số nguyên tố.";
}
?><br>

Câu 26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.<br>
<?php
$array = [-1, -2, 0, 5, -8, 11, -6, -9, 4];
function findLargestPositive($arr) {
    $largestPositive = null;
    
    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositive === null || $num > $largestPositive)) {
            $largestPositive = $num;
        }
    }
    
    return $largestPositive;
}

$largestPositive = findLargestPositive($array);

if ($largestPositive === null) {
    echo "Không tìm thấy số dương lớn nhất.";
} else {
    echo "Số dương lớn nhất là: $largestPositive";
}
?><br>

Câu 27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.<br>
<?php
$array = [-1, -2, 0, 5, -8, 11, -6, -9, 4];
function findLargestNegative($arr) {
    $largestNegative = null;
    
    foreach ($arr as $num) {
        if ($num < 0 && ($largestNegative === null || $num > $largestNegative)) {
            $largestNegative = $num;
        }
    }
    
    return $largestNegative;
}

$largestNegative = findLargestNegative($array);

if ($largestNegative === null) {
    echo "Không tìm thấy số âm lớn nhất.";
} else {
    echo "Số âm lớn nhất là: $largestNegative";
}
?><br>

Câu 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.<br>
<?php
$n = 10;
function sumOddNumbers($n) {
    $sum = 0;

    for ($index = 1; $index <= $n; $index += 2) {
        $sum += $index;
    }

    return $sum;
}
$sum = sumOddNumbers($n);

echo "Tổng các số lẻ từ 1 đến 10 là: $sum";
?><br>

Câu 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.<br>
<?php
$start = 1;
$end = 100;
function findPerfectSquares($start, $end) {
    $perfectSquares = array();
    
    for ($index = $start; $index <= $end; $index++) {
        if (sqrt($index) == (int) sqrt($index)) {
            $perfectSquares[] = $index;
        }
    }
    
    return $perfectSquares;
}

$perfectSquares = findPerfectSquares($start, $end);
if (count($perfectSquares) == 0) {
    echo "Không tìm thấy số chính phương nào.";
} else {
    echo "Số chính phương là: ";
    echo implode(", ", $perfectSquares);
}
?><br>


câu 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.<br>
<?php

$string = "Hello World!";
$substring = "World";
function checkSubstring($string, $substring) {
    if (strpos($string, $substring) !== false) {
        return true;
    } else {
        return false;
    }
}
if (checkSubstring($string, $substring)) {
    echo "'$substring' một chuỗi con của '$string'.";
} else {
    echo "'$substring' không là 1 chuỗi con của '$string'.";
}

?>





















