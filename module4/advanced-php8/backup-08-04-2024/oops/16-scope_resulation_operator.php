<?php
// Static methods can be called directly - without creating an instance(object) of the class first.
//Static methods are declared with the static keyword:
// if static method can't access after create object then we used to access them we create scope resulations operator  ::

class A 
{
    public static function display()
    {
        $name="I am Brijesh Kumar Pandey";
        echo $name;
    }
}

A::display();

?>