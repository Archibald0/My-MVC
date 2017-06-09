<?php
class Smarty_ns extends Smarty {
    public function __construct () {
        parent::__construct () {
            $this->template_dir = SMARTY_TEMPLATES_DIR;
            $this->compile_dir = SMARTY_COMPILE_DIR;
            $this->cache_dir = SMARTY_CACHE_DIR;

            $this->caching = CACHING;
            $this->force_compile = FORCE_COMPILE;
            $this->debugging = DEBUGGING;
            $this->cache_lifetime = CACHE_LIFETIME;

            $this->assign('format_date', FORMAT_DATE_TPL);
            $this->assign('format_short_data', FORMAT_SHORT_DATA_TPL);
        }
    }
}

 ?>
