<?php

// in der uninstall.php sollten Befehle ausgeführt werden, die alle Änderungen, die mit der Installation kamen, entfernen.

// Konfiguration entfernen
// rex_config::removeNamespace("testimonial");

// Installierte Metainfos entfernen
// rex_metainfo_delete_field('art_testimonial');
// rex_metainfo_delete_field('cat_testimonial');
// rex_metainfo_delete_field('med_testimonial');
// rex_metainfo_delete_field('clang_testimonial');

// Zusäzliche Verzeichnisse entfernen, z.B.
// rex_dir::delete(rex_path::get('testimonial'), true);

// YForm-Tabellen löschen (die YForm-Tabellendefinition wird gelöscht, nicht die Datenbank-Tabellen)
// if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
// rex_yform_manager_table_api::removeTable('rex_testimonial');
// }

// Weitere Vorgänge
// ...
