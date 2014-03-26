<?php
namespace Artist\Form;

use Zend\Form\Form;

class ArtistForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('artist');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'id',
            'attributes' => array(
                'type'  => 'hidden',
            ),
        ));
        $this->add(array(
            'name' => 'genre',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'ckeditor oneliner',
            ),
            'options' => array(
                'label' => 'Genre',
            ),
        ));
        $this->add(array(
            'name' => 'first_name',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'ckeditor oneliner',
            ),
            'options' => array(
                'label' => 'First Name',
            ),
        ));
        $this->add(array(
            'name' => 'last_name',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'ckeditor oneliner',
            ),
            'options' => array(
                'label' => 'Last Name',
            ),
        ));
        $this->add(array(
            'name' => 'alias_name',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'ckeditor oneliner',
                'id' => 'editor1',
            ),
            'options' => array(
                'label' => 'Alias Name',
            ),
        ));
        $this->add(array(
            'name' => 'year',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Year Released',
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
    }
}