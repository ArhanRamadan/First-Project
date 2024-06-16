<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class dan Objek</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="Beranda.php">Beranda</a></li>
                <li><a href="encapsulation.php">Encapsulation</a></li>
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
class mobil {
    private $roda = 4;

    private function jalan() {
        echo "mobil berjalan";
    }

    public function jumlahRoda() {
        echo $this->roda;
    }

    public function aktifkanJalan() {
        $this->jalan();
    }
}

$avanza = new mobil();
?>
<div class="code-box">
        <pre><code class="language-python">class mobil {
    private $roda = 4;

    private function jalan() {
        echo "mobil berjalan";
    }

    public function jumlahRoda() {
        echo $this->roda;
    }

    public function aktifkanJalan() {
        $this->jalan();
    }
}

$avanza = new mobil();
$avanza->jumlahRoda();
$avanza->aktivkanJalan();</code></pre>
    </div>
    
<div class="output-box">
    <pre><code class="output-content">jumlah roda: <?=$avanza->jumlahRoda()?><br><?=$avanza->aktifkanJalan()?>
    </code></pre>
</div>
</body>
</html>