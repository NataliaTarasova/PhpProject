<?php
class header
{
    private $color = "yellow";
    private $text = "Hi, World!";

    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color=$color;
    }
    public function getHeader()
    {
        return "<div style= 'width: 300px; height: 100px; border: 1px solid black; background: $this->color; text-align: center; font-weight-bold'><h1><strong> $this->text</strong></h1></div>";
    }
   
    
    public function getText()
    {
        return $this->text;
    }
    public function setText($text)
    {
        $this->text=$text;
    }
}

$newColorHeader = new header ();
echo $newColorHeader->getHeader();

?>

<form action="form.php" method="POST" novalidate>
<label for="validationUsername" class="form-label">Color</label>
    <div class="container">
    <input type="text" name="formColor" id= "formColor" class="form-control" id="inputName" required>
    </div>
<label for="validationUsername" class="form-label">Enter text</label>
    <div class="container">
    <input type="text" name="formText" class="form-control" id="inputName" required>
    </div>

  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
</form>
<?php
 

$formColor = $_POST['formColor'];
$formText = $_POST['formText'];

class form
{ 
    private $formColor;
    private $formText;
    private $countBlock;

    public function getformColor()
    {
        return $this->formColor;
    }
    public function setformColor($formColor)
    {
    $this->formColor=$formColor;
    }

    public function getformText()
    {
        return $this->formText;
    }
    public function setformText($formText)
    {
    $this->formText=$formText;
    }

    public function getNewForm()
    {
        return "<div style= 'width: 200px; height: 100px; border: 1px solid black; background: $this->formColor; text-align: center; font-weight-bold'><h1><strong> $this->formText</strong></h1></div>";
    }
}

$newColorForm = new form ();
echo $newColorForm->setformColor($formColor);
echo $newColorForm->setformText($formText);
echo $newColorForm->getNewForm();

?>