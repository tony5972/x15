<?php
interface interface1
{
  public function area();
   public function volume();
}
Define("PI",3.14);
class cylinder implements interface1
{

  public $r;
   public $h;
 public function cylinder($radious,$height)
  {
   $this->r=$radious;
  $this->h=$height;
 }
function area()
{
   $arr=PI*($this->r)*($this->r)*($this->h);
echo "the area of cylinder is".$arr."<br>";
}
function volume()
{
  $vol=(1/3)*PI*($this->r)*($this->r)*($this->h);
  echo "the volume of cylinder is".$vol;
}
}
$c=new cylinder(5,5);
$c->area();
$c->volume();
?>