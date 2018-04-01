<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Project ID
     |--------------------------------------------------------------------------
     |
     | Set this to a corresponding project in Sanity. 
     | https://manage.sanity.io/projects/{project_id}
     |
     */

    'projectId' => env('SANITY_PROJECT_ID'),

    /*
     |--------------------------------------------------------------------------
     | Dataset
     |--------------------------------------------------------------------------
     |
     | A Sanity project can contain any number of datasets, 
     | each with separate data.
     | https://www.sanity.io/docs/data-store/datasets
     |
     */

    'dataset' => env('SANITY_DATASET', 'production'),

    /*
     |--------------------------------------------------------------------------
     | Use CDN
     |--------------------------------------------------------------------------
     |
     | If set to true, this gives fast, cheap responses using a globally distributed cache.
     | Set this to false if your application require the freshest possible data always
     | (potentially slightly slower and a bit more expensive).
     */

    'useCdn' => env('SANITY_USE_CDN', true),

];