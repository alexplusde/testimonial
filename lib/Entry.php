<?php 

namespace Alexplusde\Testimonial;

use rex_user;
use rex_media;
use rex_yform_manager_collection;
use rex_yform_manager_dataset;

class Entry extends rex_yform_manager_dataset {

    const STATUS = [
        0 => 'translate:testimonial_status_draft',
        1 => 'translate:testimonial_status_published',
    ];

    public static function getStatusOptions(): array
    {
        return self::STATUS;
    }

    public static function findOnline(): rex_yform_manager_collection
    {
        return self::query()->where('status', 1, '>=')->find();
    }
	
    /* Autor */
    /** @api */
    public function getAuthor() : ?string {
        return $this->getValue("author");
    }
    /** @api */
    public function setAuthor(mixed $value) : self {
        $this->setValue("author", $value);
        return $this;
    }

    /* Bild */
    /** @api */
    public function getImage(bool $asMedia = false) : mixed {
        if($asMedia) {
            return rex_media::get($this->getValue("image"));
        }
        return $this->getValue("image");
    }
    /** @api */
    public function setImage(string $filename) : self {
        if(rex_media::get($filename)) {
            $this->getValue("image", $filename);
        }
        return $this;
    }
            
    /* Text */
    /** @api */
    public function getText(bool $asPlaintext = false) : ?string {
        if($asPlaintext) {
            return strip_tags($this->getValue("text"));
        }
        return $this->getValue("text");
    }
    /** @api */
    public function setText(mixed $value) : self {
        $this->setValue("text", $value);
        return $this;
    }
            
    /* Datum */
    /** @api */
    public function getDate() : ?string {
        return $this->getValue("date");
    }
    /** @api */
    public function setDate(mixed $value) : self {
        $this->setValue("date", $value);
        return $this;
    }

    /* Projekt */
    /** @api */
    public function getProjectId() : ?rex_yform_manager_dataset {
        return $this->getRelatedDataset("project_id");
    }

    /* Ersteller */
    /** @api */
    public function getCreateuser() : ?rex_user {
        return rex_user::get($this->getValue("createuser"));
    }
    /** @api */
    public function setCreateuser(mixed $value) : self {
        $this->setValue("createuser", $value);
        return $this;
    }

    /* Erstellt am */
    /** @api */
    public function getCreatedate() : ?string {
        return $this->getValue("createdate");
    }
    /** @api */
    public function setCreatedate(string $value) : self {
        $this->setValue("createdate", $value);
        return $this;
    }

    /* Aktualisiert von */
    /** @api */
    public function getUpdateuser() : ?rex_user {
        return rex_user::get($this->getValue("updateuser"));
    }
    /** @api */
    public function setUpdateuser(mixed $value) : self {
        $this->setValue("updateuser", $value);
        return $this;
    }

    /* Aktualisiert am */
    /** @api */
    public function getUpdatedate() : ?string {
        return $this->getValue("updatedate");
    }
    /** @api */
    public function setUpdatedate(string $value) : self {
        $this->setValue("updatedate", $value);
        return $this;
    }

    /* UUID */
    /** @api */
    public function getUuid() : mixed {
        return $this->getValue("uuid");
    }
    /** @api */
    public function setUuid(mixed $value) : self {
        $this->setValue("uuid", $value);
        return $this;
    }

    /* Status */
    /** @api */
    public function getStatus() : mixed {
        return $this->getValue("status");
    }
    /** @api */
    public function setStatus(mixed $param) : mixed {
        $this->setValue("status", $param);
        return $this;
    }

    public function show(): void
    {
        $fragment = new \rex_fragment();
        $fragment->setVar('testimonial', $this);
        echo $fragment->parse('testimonial.php');
    }

    /*
    public static function show($id): void
    {
        echo testimonial::get($id)->show();
    }
        */

}
