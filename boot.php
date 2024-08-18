<?php

namespace Alexplusde\Testimonial;

use rex_yform_manager_dataset;
use rex_addon;
use rex;

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_dataset::setModelClass(
        'rex_testimonial',
        Entry::class
    );
}
