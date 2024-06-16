<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <nav>
            <ul>
                <li><a href="Beranda.php">Beranda</a></li>
                <li><a href="class_dan_objek.php">Class Dan Objek</a></li>
                <li><a href="encapsulation.php">Encapsulation</a></li>
                <li><a href="inheritance.php">Inheritance</a></li>
                <li><a href="polymorhism.php">Polymorhism</a></li>
                <li><a href="magicmethod.php">Magic method</a></li>
                <li><a href="overriding.php">Overriding</a><li>
                <li><a href="overloading.php">Overloading</a><li>
            </ul>
        </nav>
    </header>
<?php
class Hewan {
    
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function suara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {

    public function suara() {
        return "Guk Guk!";
    }
}

$kucingSaya = new Anjing("Buddy");

// echo "Nama Hewan: " . $anjingSaya->getNama();
// echo "Suara Hewan: " . $anjingSaya->suara();
?>
<div class="code-box">
        <pre><code class="language-python">class Hewan {
    
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function suara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {

    public function suara() {
        return "Guk Guk!";
    }
}

$anjingSaya = new Anjing("Buddy");
echo "Nama Hewan: " . $anjingSaya->getNama();
echo "Suara Hewan: " . $anjingSaya->suara();</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">nama hewan: <?=$kucingSaya->getNama()?><br>suara hewan: <?=$kucingSaya->suara()?></code></pre>
    </div>
    
</body>
</html>