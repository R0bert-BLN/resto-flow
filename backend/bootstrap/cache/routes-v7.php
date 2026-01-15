<?php

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => true,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sGAAdriZFHjYlkCM',
          ),
          1 => 'restoflow.lvh.me',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VdIyP6tzy86YvKfA',
          ),
          1 => 'restoflow.lvh.me',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TZBpxx8WwglY2F9X',
          ),
          1 => 'restoflow.lvh.me',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SfrLPYyxikYuVyv8',
          ),
          1 => 'restoflow.lvh.me',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lfNrT8btGhdLuIRt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FHShEfkcxRjkhugj',
          ),
          1 => 'restoflow.lvh.me',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FRtbAw52P1iOcUoR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RwHEOF0XeoUmTHET',
          ),
          1 => 'restoflow.lvh.me',
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zjsgzCxSkhatgbpV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/check-tenant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MccXMxKdZTBuAV1a',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/restaurants' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'restaurants.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'restaurants.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|(?:(?:[^./]*+\\.)++)(?|/tenancy/assets(?:/((?:.*)))?(*:58)|/api/(?|restaurants/([^/]++)(?|(*:96))|menus/([^/]++)(?|(*:121)|/categories(?|(*:143)))|categories/([^/]++)(?|(*:175)|/items(*:189))|items/([^/]++)(?|(*:215)))|/storage/(.*)(*:238)))/?$}sDu',
    ),
    3 => 
    array (
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stancl.tenancy.asset',
            'path' => NULL,
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      96 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'restaurants.show',
          ),
          1 => 
          array (
            0 => 'restaurant',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'restaurants.update',
          ),
          1 => 
          array (
            0 => 'restaurant',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'restaurants.destroy',
          ),
          1 => 
          array (
            0 => 'restaurant',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      121 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.show',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menus.update',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'menus.destroy',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'menus.categories.index',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'menus.categories.store',
          ),
          1 => 
          array (
            0 => 'menu',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      189 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iKk8aghjElj11BaE',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.show',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'items.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'items.destroy',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      238 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'storage.local',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stancl.tenancy.asset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tenancy/assets/{path?}',
      'action' => 
      array (
        'uses' => 'Stancl\\Tenancy\\Controllers\\TenantAssetsController@asset',
        'controller' => 'Stancl\\Tenancy\\Controllers\\TenantAssetsController@asset',
        'as' => 'stancl.tenancy.asset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sGAAdriZFHjYlkCM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'domain' => 'restoflow.lvh.me',
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000008fd0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sGAAdriZFHjYlkCM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VdIyP6tzy86YvKfA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'domain' => 'restoflow.lvh.me',
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:90:"function () {
    return \'This is your multi-tenant application. This is the main api.\';
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009000000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VdIyP6tzy86YvKfA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TZBpxx8WwglY2F9X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'domain' => 'restoflow.lvh.me',
        'uses' => 'App\\Http\\Controllers\\Auth\\TenantRegistrationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\TenantRegistrationController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TZBpxx8WwglY2F9X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SfrLPYyxikYuVyv8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'guest',
        ),
        'domain' => 'restoflow.lvh.me',
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SfrLPYyxikYuVyv8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FHShEfkcxRjkhugj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'domain' => 'restoflow.lvh.me',
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:99:"function (\\Illuminate\\Http\\Request $request) {
        return $request->user()->load(\'role\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009060000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FHShEfkcxRjkhugj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RwHEOF0XeoUmTHET' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'domain' => 'restoflow.lvh.me',
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::RwHEOF0XeoUmTHET',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MccXMxKdZTBuAV1a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/check-tenant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function () {
    return \\response()->json([
        \'exists\' => true
    ]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000009050000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MccXMxKdZTBuAV1a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lfNrT8btGhdLuIRt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'guest',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lfNrT8btGhdLuIRt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FRtbAw52P1iOcUoR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/auth-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:114:"function (\\Illuminate\\Http\\Request $request) {
        return $request->user()->load(\'role\', \'restaurants\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000090d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FRtbAw52P1iOcUoR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zjsgzCxSkhatgbpV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zjsgzCxSkhatgbpV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'restaurants.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/restaurants',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'restaurants.index',
        'uses' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@index',
        'controller' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@index',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'restaurants.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/restaurants',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'restaurants.store',
        'uses' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@store',
        'controller' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@store',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'restaurants.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/restaurants/{restaurant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'restaurants.show',
        'uses' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@show',
        'controller' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@show',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'restaurants.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/restaurants/{restaurant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'restaurants.update',
        'uses' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@update',
        'controller' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@update',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'restaurants.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/restaurants/{restaurant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'restaurants.destroy',
        'uses' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@destroy',
        'controller' => 'App\\Http\\Controllers\\Tenant\\RestaurantController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'menus.index',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuController@index',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuController@index',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'menus.store',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuController@store',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuController@store',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'menus.show',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuController@show',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuController@show',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'menus.update',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuController@update',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuController@update',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/menus/{menu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'menus.destroy',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuController@destroy',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/menus/{menu}/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'menus.categories.index',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'menus.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/menus/{menu}/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'menus.categories.store',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'categories.show',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'categories.update',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuCategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iKk8aghjElj11BaE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/categories/{category}/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@store',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::iKk8aghjElj11BaE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'items.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'items.index',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@index',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'items.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'items.show',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@show',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'items.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'items.update',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@update',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'items.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByDomain',
          1 => 'Stancl\\Tenancy\\Middleware\\PreventAccessFromCentralDomains',
          2 => 'Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful',
          3 => 'Illuminate\\Session\\Middleware\\StartSession',
          4 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
          5 => 'api',
          6 => 'auth:sanctum',
          7 => 'App\\Http\\Middleware\\Tenant\\SetRestaurantContext',
        ),
        'as' => 'items.destroy',
        'uses' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\Tenant\\MenuItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storage.local' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'storage/{path}',
      'action' => 
      array (
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:3:{s:4:"disk";s:5:"local";s:6:"config";a:5:{s:6:"driver";s:5:"local";s:4:"root";s:24:"/app/storage/app/private";s:5:"serve";b:1;s:5:"throw";b:0;s:6:"report";b:0;}s:12:"isProduction";b:0;}s:8:"function";s:323:"function (\\Illuminate\\Http\\Request $request, string $path) use ($disk, $config, $isProduction) {
                    return (new \\Illuminate\\Filesystem\\ServeFile(
                        $disk,
                        $config,
                        $isProduction
                    ))($request, $path);
                }";s:5:"scope";s:47:"Illuminate\\Filesystem\\FilesystemServiceProvider";s:4:"this";N;s:4:"self";s:32:"000000000000090b0000000000000000";}}',
        'as' => 'storage.local',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '.*',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
