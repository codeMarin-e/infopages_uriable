<?php
    namespace App\Traits;

    trait InfopagesUriableTrait {

        use \App\Traits\Uriable;

        public function defaultUri($language = null, $site_id = null, $prepareLevel = null, $additionals = []) { //just for default
            $prepareLevel = $prepareLevel?? config('marinar_infopages_uriable.prepare_levels');
            if($prepareLevel && $this->parent_id) {
                $this->loadMissing('parent');
                return $this->parent->getUriSlug(prepareLevel: $prepareLevel-1).'/'.$this->id;
            }
            return 'info/'.$this->id;
        }

        public function prepareSlug($slug, $prepareLevel = null, $additionals = []) {
            $prepareLevel = $prepareLevel?? config('marinar_infopages_uriable.prepare_levels');
            if($prepareLevel && $this->parent_id) {
                $this->loadMissing('parent');
                return $this->parent->getUriSlug(prepareLevel: $prepareLevel-1).'/'.$slug;
            }
            return $slug;
        }
    }
