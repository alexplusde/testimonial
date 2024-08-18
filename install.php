<?php

/* Zunächst Tabelle aktualisieren */

rex_sql_table::get(rex::getTable('testimonial'))
    ->ensurePrimaryIdColumn()
    ->ensureColumn(new rex_sql_column('author', 'varchar(191)', false, ''))
    ->ensureColumn(new rex_sql_column('image', 'text'))
    ->ensureColumn(new rex_sql_column('text', 'text'))
    ->ensureColumn(new rex_sql_column('date', 'date'))
    ->ensureColumn(new rex_sql_column('prio', 'int(11)'))
    ->ensureColumn(new rex_sql_column('createuser', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('createdate', 'datetime'))
    ->ensureColumn(new rex_sql_column('updateuser', 'varchar(191)'))
    ->ensureColumn(new rex_sql_column('updatedate', 'datetime'))
    ->ensureColumn(new rex_sql_column('uuid', 'varchar(36)'))
    ->ensureColumn(new rex_sql_column('status', 'int(11)'))
    ->ensure();

/* Tablesets aktualisieren */

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_table_api::importTablesets(rex_file::get(rex_path::addon($this->name, 'install/rex_testimonial.tableset.json')));
    rex_yform_manager_table::deleteCache();
}
