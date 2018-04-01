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
     | Token
     |--------------------------------------------------------------------------
     |
     | Leave blank to be an anonymous user.
     */

    'token' => env('SANITY_TOKEN'),

];