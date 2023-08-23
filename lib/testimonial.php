<?php

class testimonial extends \rex_yform_manager_dataset
{
    public function getAuthor(): string
    {
        return $this->getValue('author');
    }

    public function getTestimonial(): string
    {
        return $this->getValue('text');
    }

    public function getDate(): string
    {
        return $this->getValue('date');
    }
}
