<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorhism</title>
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
                <li><a href="abstraksi.php">Abstraksi</a><li>
                <li><a href="overriding.php">Overriding</a><li>
                <li><a href="overloading.php">Overloading</a><li>
            </ul>
        </nav>
    </header>
<?php
class Hewan {
    public function bersuara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return "Guk guk!";
    }
}

class Kucing extends Hewan {
    // Method untuk mengeluarkan suara kucing
    public function bersuara() {
        return "Meong meong!";
    }
}

function suaraHewan(Hewan $hewan) {
    return $hewan->bersuara();
}

$anjing = new Anjing();
$kucing = new Kucing();

// echo suaraHewan($anjing);
// echo suaraHewan($kucing);
?>
<div class="code-box">
        <pre><code class="language-python">class Hewan {
    public function bersuara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return "Guk guk!";
    }
}

class Kucing extends Hewan {
    // Method untuk mengeluarkan suara kucing
    public function bersuara() {
        return "Meong meong!";
    }
}

function suaraHewan(Hewan $hewan) {
    return $hewan->bersuara();
}

$anjing = new Anjing();
$kucing = new Kucing();

echo suaraHewan($anjing);
echo suaraHewan($kucing);</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">nama hewan: <?=suaraHewan($anjing)?><br>suara hewan: <?=suaraHewan($kucing)?>
</code></pre>
    </div>
</body>
</html>