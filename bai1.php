<?php
class Animal
{
    public $chan;
    public $an;
    public $chieuCao;
    public $keu;

    public function setChan($chan)
    {
        $this->chan = $chan;
    }
    public function setChieuCao($chieuCao)
    {
        $this->chieuCao = $chieuCao;
    }
    public function setAn($an)
    {
        $this->an = $an;
    }
    public function setKeu($keu)
    {
        $this->keu = $keu;
    }
}

class Dog extends Animal
{
    public function keu()
    {
        echo $this->keu;
    }
    public function chieuCao()
    {
        echo $this->chieuCao;
    }
    public function an()
    {
        echo $this->an;
    }
    public function chan()
    {
        echo $this->chan;
    }
}
class Cat extends Animal
{
    public function chieuCao()
    {
        echo $this->chieuCao;
    }
    public function an()
    {
        echo $this->an;
    }
    public function keu()
    {
        echo $this->keu;
    }
    public function chan()
    {
        echo $this->chan;
    }
}
class Bird extends Animal
{
    public function chieuCao()
    {
        echo $this->chieuCao;
    }
    public function an()
    {
        echo 'Con Bird an ' . $this->an;
    }
    public function keu()
    {
        echo $this->keu;
    }
    public function chan()
    {
        echo $this->chan;
    }
}
echo 'Lop Dog: <br>';
$dog = new Dog();
$dog->setChieuCao(50);
$dog->setAn('Com');
$dog->setChan(2);
$dog->setKeu('Gau Gau');
$dog->setChan(4);
$dog->chan();

echo 'Lop Cat: <br>';
$cat = new Cat();
$cat->setChieuCao(30);
$cat->setAn('ca');
$cat->setKeu('meo meo');
$dog->setChan(4);
$cat->chan();

echo 'Lop chim';
$bird = new Bird();
$bird->setChieuCao(10);
$bird->setAn('sau');
$bird->setKeu('chim chim');
$bird->setChan(2);
$bird->chan();


?>

<table border="1">
    <tr>
        <td>Thuoc tinh</td>
        <td>Dog</td>
        <td>Cat</td>
        <td>Bird</td>
    </tr>
    <tr>
        <td>Chieu cao(cm)</td>
        <td><?php echo $dog->chieuCao(); ?></td>
        <td><?= $cat->chieuCao(); ?></td>
        <td><?= $bird->chieuCao(); ?></td>
    </tr>
    <tr>
        <td>Tieng keu</td>
        <td><?= $dog->keu(); ?></td>
        <td><?= $cat->keu(); ?></td>
        <td><?= $bird->keu(); ?></td>
    </tr>
    <tr>
        <td>Chan</td>
        <td><?= $dog->chan(); ?></td>
        <td><?= $cat->chan(); ?></td>
        <td><?= $bird->chan(); ?></td>
    </tr>
</table>