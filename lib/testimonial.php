<?php

class testimonial extends \rex_yform_manager_dataset
{
    public function getAuthor(): string
    {
        return $this->getValue('author');
    }

    public function getText(): string
    {
        return $this->getValue('text');
    }

    public function getDate(): string
    {
        return $this->getValue('date');
    }

    public static function findOnline(): ?rex_yform_manager_collection
    {
        self::query()->where('status', 1, ">=")->find();
    }
}
