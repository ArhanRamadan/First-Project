<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulation</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="Beranda.php">Beranda</a></li>
                <li><a href="class_dan_objek.php">Class Dan Objek</a></li>
                <li><a href="inheritance.php">Inheritance</a></li>
                <li><a href="polymorhism.php">Polymorhism</a></li>
                <li><a href="magicmethod.php">Magic method</a></li>
                <li><a href="abstraksi.php">Abstraksi</a><li>
                <li><a href="overriding.php">Overriding</a><li>
                <li><a href="overloading.php">Overloading</a><li>
            </ul>
        </nav>
    </header>
<?php
class Mobil {
    private $merk;
    private $warna;
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

}

$mobilSaya = new Mobil("Toyota", "Merah");

// echo "Merk Mobil: " . $mobilSaya->getMerk();
// echo "Warna Mobil: " . $mobilSaya->getWarna();

$mobilSaya->setWarna("Biru");
?>

<div class="code-box">
        <pre><code class="language-python">class Mobil {
    
    private $merk;
    private $warna;
    
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

}

$mobilSaya = new Mobil("Toyota", "Merah");
$mobilSaya->setWarna("Biru");

echo "Merk Mobil: " . $mobilSaya->getMerk();
echo "Warna Mobil: " . $mobilSaya->getWarna();</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">merek mobil: <?=$mobilSaya->getMerk()?><br>warna mobil: <?=$mobilSaya->getWarna()?></code></pre>
    </div>

    
</body>
</html>