
<?php
$conn = mysqli_connect("localhost", "root", "", "login_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname  = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email     = mysqli_real_escape_string($conn, $_POST['email']);
 $phonenumber     = mysqli_real_escape_string($conn, $_POST['phonenumber']);
 $province     = mysqli_real_escape_string($conn, $_POST['province']);
 $district     = mysqli_real_escape_string($conn, $_POST['district']);
 $city     = mysqli_real_escape_string($conn, $_POST['city']);
 $address     = mysqli_real_escape_string($conn, $_POST['address']);
 $item     = mysqli_real_escape_string($conn, $_POST['item']);
 $quantity     = mysqli_real_escape_string($conn, $_POST['quantity']);
 $payment     = mysqli_real_escape_string($conn, $_POST['payment']);


$sql = "INSERT INTO orders
( `First Name`, `Last Name`, `E-mail`, `Phone Number`, `Province`, `District`, `City`, `Address`, `Item Name`, `Quantity`, `Payment`)   
VALUES
('$firstname', '$lastname', '$email', '$phonenumber', '$province', '$district', '$city', '$address', '$item', '$quantity', '$payment')";



if (mysqli_query($conn, $sql)) {
    header("Location:Main.html");
    exit();
} else {
    $message = "Error: " . mysqli_error($conn);
}
}

mysqli_close($conn);
?>


















<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Supplement Nepal Order</title>

<link rel="stylesheet" href="order.css">

</head>

<body>

<div class="container">
<div class="top-right">
    <a href="product.html" class="cancel-btn">✖️ Cancel</a>
</div>

<h1>🛒 Product Order Form</h1>

<p>Complete your order in less than one minute.</p>

<?php echo $message; ?>

<form method="POST">






<div class="row">
    <input type="text" name="firstname" placeholder="First Name" required>
    <input type="text" name="lastname" placeholder="Last Name" required>
</div>

<input type="email" name="email" placeholder="Email Address" required>

<input type="tel" name="phonenumber" placeholder="Phone Number" required>

<div class="row">
    <select name="province" required>
        <option value="">Select Province</option>
        <option>Koshi</option>
        <option>Madhesh</option>
        <option>Bagmati</option>
        <option>Gandaki</option>
        <option>Lumbini</option>
        <option>Karnali</option>
        <option>Sudurpashchim</option>
    </select>

    <select name="district" required>
        <option value="">Select District</option>
	<option>Achham</option>
        <option>Arghakhanchi</option>
        <option>Baglung</option>
        <option>Baitadi</option>
        <option>Bajhang</option>
        <option>Bajura</option>
        <option>Banke</option>
        <option>Bara</option>
        <option>Bardiya</option>
        <option>Bhaktapur</option>
        <option>Bhojpur</option>
        <option>Chitwan</option>
        <option>Dadeldhura</option>
        <option>Dailekh</option>
        <option>Dang</option>
        <option>Darchula</option>
        <option>Dhading</option>
        <option>Dhankuta</option>
        <option>Dhanusha</option>
        <option>Dolakha</option>
        <option>Dolpa</option>
        <option>Doti</option>
        <option>Eastern Rukum</option>
        <option>Gorkha</option>
        <option>Gulmi</option>
        <option>Humla</option>
        <option>Ilam</option>
        <option>Jajarkot</option>
        <option>Jhapa</option>
        <option>Jumla</option>
        <option>Kailali</option>
        <option>Kalikot</option>
        <option>Kanchanpur</option>
        <option>Kapilvastu</option>
        <option>Kaski</option>
        <option>Kathmandu</option>
        <option>Kavrepalanchok</option>
        <option>Khotang</option>
        <option>Lalitpur</option>
        <option>Lamjung</option>
        <option>Mahottari</option>
        <option>Makwanpur</option>
        <option>Manang</option>
        <option>Morang</option>
        <option>Mugu</option>
        <option>Mustang</option>
        <option>Myagdi</option>
        <option>Nawalpur</option>
        <option>Nuwakot</option>
        <option>Okhaldhunga</option>
        <option>Palpa</option>
        <option>Panchthar</option>
        <option>Parasi</option>
        <option>Parbat</option>
        <option>Parsa</option>
        <option>Pyuthan</option>
        <option>Ramechhap</option>
        <option>Rasuwa</option>
        <option>Rautahat</option>
        <option>Rolpa</option>
        <option>Rupandehi</option>
        <option>Salyan</option>
        <option>Sankhuwasabha</option>
        <option>Saptari</option>
        <option>Sarlahi</option>
        <option>Sindhuli</option>
        <option>Sindhupalchok</option>
        <option>Siraha</option>
        <option>Solukhumbu</option>
        <option>Sunsari</option>
        <option>Surkhet</option>
        <option>Syangja</option>
        <option>Tanahun</option>
        <option>Taplejung</option>
        <option>Terhathum</option>
        <option>Udayapur</option>
        <option>Western Rukum</option>
        <option>Dolpa</option>
    </select>
</div>


<div class="row">
    <select name="city" required>
        <option value="">Select City</option>
         <option>Kathmandu</option>
    <option>Lalitpur</option>
    <option>Bhaktapur</option>
    <option>Pokhara</option>
    <option>Bharatpur</option>
    <option>Biratnagar</option>
    <option>Birgunj</option>
    <option>Janakpur</option>
    <option>Butwal</option>
    <option>Dharan</option>
    <option>Itahari</option>
    <option>Hetauda</option>
    <option>Nepalgunj</option>
    <option>Dhangadhi</option>
    <option>Tulsipur</option>
    <option>Ghorahi</option>
    <option>Kalaiya</option>
    <option>Rajbiraj</option>
    <option>Lahan</option>
    <option>Damak</option>
    <option>Birtamod</option>
    <option>Mechinagar</option>
    <option>Banepa</option>
    <option>Dhulikhel</option>
    <option>Bidur</option>
    <option>Baglung</option>
    <option>Putalibazar</option>
    <option>Amargadhi</option>
    <option>Mahendranagar</option>
    <option>Tikapur</option>
    </select>
</div>
    
<input type="text" name="address" placeholder="Full Delivery Address" required>

<select name="item" required>
<option value="">Items</option>
    <option>Clear Whey Protien Isolate Rs.5,500</option>
    <option>Serious Mass Rs.9,900</option>
    <option>Optimum Nutrition Gold Standard Pro Gainer Rs.6,222 [5% OFF]</option>
    <option>Optimum Nutrition Essential Amino Energy Rs.6,290</option>
    <option>Optimum Nutrition PRQ Quench Rs.7,500</option>
<option>Optimum Nutrition Serious Mass Rs.8,990</option>
<option>Micronized Crestine Rs.5,500</option>
<option>Protein Synthesis Rs.8,200</option>
<option>BCAA Complex Rs.7,990</option>
<option>Power ATP Peak Sold Out [5% OFF]</option>
<option>Merk Physcho Sold Out [5% OFF]</option>
<option>Natures Superfruit Rs.11,990</option>
<option>Carb Comples Rs.3,500</option>
<option>Renov8 Rs.10,590</option>
<option>OMEGA-3 Rs.8,500</option>
<option>Cross Over XP2 Rs.8,230</option>
<option>Hydrolyzed Marine Collagen Rs.1,200</option>
<option>MCT Oil Powder Rs.6,250</option>
<option>Optimum Opti-Men Rs.5,390</option>
<option>Optimum Nutrition Rs.6,230 [5% OFF]</option>
<option>Opti-Women Rs.9,990</option>
<option>Gold Standard 100% Whey Rs.10,100</option>
<option>BlozyMe Built On Science Rs14,885</option>
<option>Clear Whey Protein Isolate + Collagen Rs.9,200</option>
<option>Gold Standard 100% Plant Rs.8,300</option>
<option>N'sane Asylum Extreme Pre-Workout Rs.6,500</option>
<option>Headstromg 175-Workout Rs.5,250</option>
<option>BCAA Sport Nutrition Rs.4.500</option>
<option>Pump Action Fruit Loved Rs.6,550</option>
<option>Dymatize Protein Powder Cinnamon Cereal Rs.15,500</option>
<option>Dymatize Protein Powder Dunkin Glazed Donut Rs.13,500</option>
<option>Dymatize Protein Powder Vanilla Birthday Cake Rs.2,800</option>

</select>



<input type="number" name="quantity" placeholder="Quantity" min="1" required>

<select name="payment" required>
    <option value="">Payment Method</option>
    <option>Cash on Delivery</option>
    <option>eSewa</option>
    <option>Khalti</option>
    <option>IME Pay</option>
</select>



<button type="submit">Place Order</button>





</body>

</html>