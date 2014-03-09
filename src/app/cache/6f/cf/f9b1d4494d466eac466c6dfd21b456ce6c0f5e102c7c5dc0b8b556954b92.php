<?php

/* Mpe:Demo:Default:index */
class __TwigTemplate_6fcff9b1d4494d466eac466c6dfd21b456ce6c0f5e102c7c5dc0b8b556954b92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::Default:base");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Default:base";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis sit amet arcu eu varius. Mauris viverra, neque nec pulvinar pretium, leo enim interdum lectus, a rutrum odio urna vel nulla. Mauris accumsan dolor nec turpis blandit, sit amet consectetur eros condimentum. Maecenas sollicitudin libero sed ultricies semper. Nunc a massa viverra, aliquam purus vel, semper quam. Duis tincidunt, nulla id hendrerit lacinia, felis felis lobortis leo, a vehicula urna libero vitae mauris. Nunc vulputate metus sapien, nec vestibulum metus rhoncus in. Donec ultrices porttitor eleifend.

Proin laoreet elementum arcu, eget aliquet orci aliquam eu. Nullam ultricies ut odio vitae facilisis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed id congue purus. Ut tincidunt eros sed est volutpat, ac tincidunt lectus fermentum. Aenean in varius justo, vel pharetra est. Aliquam hendrerit odio eu hendrerit venenatis. Cras porttitor pulvinar commodo. Duis pharetra in mi nec porttitor. Etiam molestie luctus arcu. In laoreet viverra nulla, at ornare erat placerat eget. Nullam sagittis ipsum et adipiscing imperdiet. Aliquam sed hendrerit erat. Aenean fermentum suscipit ante, sit amet scelerisque elit. Vivamus in venenatis mauris, sed rhoncus dolor. Mauris vehicula neque nec diam varius, eu tincidunt lectus ultricies.

Sed vitae ligula ut felis vestibulum vehicula. Praesent non porta purus. Nullam nec tempus felis. Nam tempor quis libero in vehicula. Nam ligula velit, aliquam sit amet orci id, pharetra venenatis diam. Vestibulum vel interdum leo. Pellentesque vitae lacinia purus. Cras posuere sodales leo, eu mattis arcu tempus id. Nunc nec nisl sagittis, elementum justo nec, pellentesque purus. Pellentesque vitae quam non augue condimentum vestibulum. Aenean tincidunt turpis id turpis volutpat laoreet. Nullam malesuada urna ac leo rutrum, a consectetur nulla ultrices. Praesent sed adipiscing tortor.

Sed orci magna, pellentesque vel metus a, pellentesque pretium sapien. Aenean vitae dui nec massa elementum pharetra. Sed ac dapibus erat. Praesent tempor a elit quis cursus. Ut nec luctus purus, vitae commodo justo. Mauris massa orci, vehicula non adipiscing nec, lacinia ut purus. Quisque egestas est sed eros gravida, eget mattis nunc varius. Proin malesuada purus sit amet nisi faucibus rhoncus a non mauris. Nam pulvinar magna ante, id fermentum augue tristique id. Donec et tincidunt tellus. In hac habitasse platea dictumst. Duis vulputate ligula est, eget semper metus condimentum non. Quisque dictum purus non tellus ultricies, eu fermentum dolor gravida. Fusce viverra ullamcorper leo, ac tincidunt mauris ullamcorper vehicula. Nunc lorem nisl, malesuada eget mauris non, rhoncus tincidunt dui. Nullam at nunc leo.

Praesent bibendum et magna eu dictum. Maecenas et turpis sit amet velit volutpat interdum ut eu purus. Ut at lacus pretium, ornare dolor eu, rhoncus est. Mauris id ligula vehicula, malesuada velit sit amet, cursus nunc. Etiam tristique porttitor est, tempus gravida arcu eleifend et. Sed aliquam sed libero sit amet sollicitudin. Pellentesque mattis ullamcorper erat eget mattis. Sed enim eros, viverra quis nulla vitae, lacinia aliquet leo. Aenean et volutpat lectus, id elementum lacus. Nulla vel diam et orci tempus iaculis. Sed non aliquet arcu. Curabitur euismod mauris a ligula condimentum convallis. Vestibulum tincidunt malesuada sem, iaculis feugiat felis consectetur in. 
      
";
    }

    public function getTemplateName()
    {
        return "Mpe:Demo:Default:index";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
