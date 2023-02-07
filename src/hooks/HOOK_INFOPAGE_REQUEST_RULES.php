<?php
        $rules = array_merge($rules?? [], \App\Models\Uri::validationRules('infopage', $chInfopage?? null));
