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
                <li><a href="encapsulation.php">Encapsulation</a></li>
                <li><a href="inheritance.php">Inheritance</a></li>
                <li><a href="polymorhism.php">Polymorhism</a></li>
                <li><a href="magicmethod.php">Magic method</a></li>
                <li><a href="abstraksi.php">Abstraksi</a><li>
                <li><a href="overloading.php">Overloading</a><li>
                
            </ul>
        </nav>
    </header>
<div class="code-box">
 <pre><code class="language-python">class Animal {

 public function makeSound() {
     return "Some generic animal sound";
 }
 }

 class Tiger extends Animal {

 public function makeSound() {
     return "Rwar";
    }
 }
 
 
  class Cow extends Animal {
 
 public function makeSound() {
     return "Moooo";
 }
 }
 
 $tiger = new Tiger();
 $cow = new Cow();
 
 "Tiger sound: " . $tiger->makeSound();
 echo "Cow sound: " . $cow->makeSound();
     </code></pre>
</div>

<div class="output-box">
    <pre><code class="output-content">Tiger sound: Rwar<br>
Cow sound: Moooo        </code></pre>
</div>

    
</body>
</html>
