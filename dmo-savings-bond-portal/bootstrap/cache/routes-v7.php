<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
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
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
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
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mcF3WtCDCGbNbuWS',
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
      '/api/fc-api/attachments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.attachments.index',
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
            '_route' => 'fc-api.attachments.store',
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
      '/api/fc-api/org-detect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.fc.org-detect',
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
      '/api/fc-api/app-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.fc.app-settings',
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
      '/api/sb-api/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.offers.index',
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
            '_route' => 'sb-api.offers.store',
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
      '/api/sb-api/offers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.offers.create',
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
      '/api/sb-api/brokers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.brokers.index',
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
            '_route' => 'sb-api.brokers.store',
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
      '/api/sb-api/brokers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.brokers.create',
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
      '/api/sb-api/broker_staffs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.broker_staffs.index',
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
            '_route' => 'sb-api.broker_staffs.store',
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
      '/api/sb-api/broker_staffs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.broker_staffs.create',
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
      '/api/sb-api/investors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.investors.index',
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
            '_route' => 'sb-api.investors.store',
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
      '/api/sb-api/investors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.investors.create',
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
      '/api/sb-api/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.bids.index',
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
            '_route' => 'sb-api.bids.store',
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
      '/api/sb-api/bids/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.bids.create',
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
      '/api/sb-api/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.subscriptions.index',
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
            '_route' => 'sb-api.subscriptions.store',
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
      '/api/sb-api/subscriptions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.subscriptions.create',
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
      '/api/fc-api/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.settings.index',
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
            '_route' => 'fc-api.settings.store',
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
      '/api/fc-api/settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.settings.create',
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
      '/api/fc-api/sites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.sites.index',
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
            '_route' => 'fc-api.sites.store',
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
      '/api/fc-api/sites/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.sites.create',
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
      '/api/fc-api/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pages.index',
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
            '_route' => 'fc-api.pages.store',
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
      '/api/fc-api/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pages.create',
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
      '/api/fc-api/pageables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pageables.index',
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
            '_route' => 'fc-api.pageables.store',
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
      '/api/fc-api/pageables/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pageables.create',
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
      '/api/fc-api/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.attributes.index',
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
            '_route' => 'fc-api.attributes.store',
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
      '/api/fc-api/attributes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.attributes.create',
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
      '/api/fc-api/siteArtifacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.siteArtifacts.index',
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
            '_route' => 'fc-api.siteArtifacts.store',
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
      '/api/fc-api/siteArtifacts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.siteArtifacts.create',
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
      '/api/fc-api/batches' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batches.index',
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
            '_route' => 'fc-api.batches.store',
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
      '/api/fc-api/batches/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batches.create',
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
      '/api/fc-api/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.addresses.index',
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
            '_route' => 'fc-api.addresses.store',
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
      '/api/fc-api/addresses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.addresses.create',
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
      '/api/fc-api/batch_items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batch_items.index',
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
            '_route' => 'fc-api.batch_items.store',
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
      '/api/fc-api/batch_items/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batch_items.create',
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
      '/api/fc-api/payment_details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.payment_details.index',
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
            '_route' => 'fc-api.payment_details.store',
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
      '/api/fc-api/payment_details/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.payment_details.create',
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
      '/api/fc-api/ratings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.ratings.index',
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
            '_route' => 'fc-api.ratings.store',
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
      '/api/fc-api/ratings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.ratings.create',
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
      '/api/fc-api/relationships' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.relationships.index',
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
            '_route' => 'fc-api.relationships.store',
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
      '/api/fc-api/relationships/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.relationships.create',
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
            '_route' => 'home',
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
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
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
            '_route' => 'generated::gfR4CY6FJMRwQLsQ',
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
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
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
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
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
            '_route' => 'generated::L2E1diWhE9Sdz2KW',
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
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
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
            '_route' => 'password.update',
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
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
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
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
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
            '_route' => 'generated::WXeri9uAbsdQuucd',
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
      '/phpinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.php-info',
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
      '/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.clear-cache',
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
      '/org-detect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.org-detect',
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
      '/app-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.app-settings',
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
      '/sb/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.dashboard',
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
      '/sb/offers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.offers.index',
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
            '_route' => 'sb.offers.store',
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
      '/sb/offers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.offers.create',
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
      '/sb/brokers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokers.index',
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
            '_route' => 'sb.brokers.store',
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
      '/sb/brokers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokers.create',
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
      '/sb/brokerStaffs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokerStaffs.index',
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
            '_route' => 'sb.brokerStaffs.store',
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
      '/sb/brokerStaffs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokerStaffs.create',
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
      '/sb/investors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.investors.index',
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
            '_route' => 'sb.investors.store',
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
      '/sb/investors/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.investors.create',
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
      '/sb/bids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.bids.index',
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
            '_route' => 'sb.bids.store',
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
      '/sb/bids/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.bids.create',
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
      '/sb/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.subscriptions.index',
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
            '_route' => 'sb.subscriptions.store',
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
      '/sb/subscriptions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.subscriptions.create',
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
      '/fc/attachment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.attachment.store',
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
      '/fc/comment/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.comment-add',
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
      '/fc/checklists' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.checklists.index',
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
      '/fc/checklist-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.checklist-template.store',
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
      '/fc/checklist-template-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.checklist-template-item.store',
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
      '/fc/departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.departments.index',
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
            '_route' => 'fc.departments.store',
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
      '/fc/departments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.departments.create',
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
      '/fc/ledgers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ledgers.index',
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
            '_route' => 'fc.ledgers.store',
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
      '/fc/ledgers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ledgers.create',
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
      '/fc/sites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.sites.index',
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
            '_route' => 'fc.sites.store',
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
      '/fc/sites/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.sites.create',
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
      '/fc/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.tags.index',
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
            '_route' => 'fc.tags.store',
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
      '/fc/tags/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.tags.create',
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
      '/fc/socials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.socials.index',
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
            '_route' => 'fc.socials.store',
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
      '/fc/socials/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.socials.create',
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
      '/fc/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.settings.index',
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
            '_route' => 'fc.settings.store',
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
      '/fc/settings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.settings.create',
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
      '/fc/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.pages.index',
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
            '_route' => 'fc.pages.store',
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
      '/fc/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.pages.create',
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
      '/fc/siteArtifacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.siteArtifacts.index',
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
            '_route' => 'fc.siteArtifacts.store',
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
      '/fc/siteArtifacts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.siteArtifacts.create',
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
      '/fc/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.addresses.index',
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
            '_route' => 'fc.addresses.store',
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
      '/fc/addresses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.addresses.create',
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
      '/fc/batches' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batches.index',
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
            '_route' => 'fc.batches.store',
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
      '/fc/batches/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batches.create',
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
      '/fc/batchItems' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batchItems.index',
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
            '_route' => 'fc.batchItems.store',
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
      '/fc/batchItems/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batchItems.create',
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
      '/fc/paymentDetails' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.paymentDetails.index',
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
            '_route' => 'fc.paymentDetails.store',
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
      '/fc/paymentDetails/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.paymentDetails.create',
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
      '/fc/ratings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ratings.index',
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
            '_route' => 'fc.ratings.store',
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
      '/fc/ratings/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ratings.create',
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
      '/fc/relationships' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.relationships.index',
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
            '_route' => 'fc.relationships.store',
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
      '/fc/relationships/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.relationships.create',
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
      '/fc/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.users.profile',
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
      '/fc/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.users.index',
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
      '/fc/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.roles.index',
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
      '/fc/profile/picture' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.upload-profile-picture',
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
      '/fc/profile/availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.user-availability',
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
      '/fc/organizations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.organizations.index',
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
            '_route' => 'fc.organizations.store',
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
      '/fc/organizations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.organizations.create',
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
      '/fc/org-domains' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.org-domains',
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
      '/fc/org-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.org-settings',
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
      '/fc/org-features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.org-features',
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
            '_route' => 'fc.org-features-process',
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
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
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
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/api/(?|fc\\-api/(?|a(?|tt(?|achments/([^/]++)(?|(*:129))|ributes/([^/]++)(?|(*:157)|/edit(*:170)|(*:178)))|ddresses/([^/]++)(?|(*:208)|/edit(*:221)|(*:229)))|s(?|ettings/([^/]++)(?|(*:262)|/edit(*:275)|(*:283))|ite(?|s/([^/]++)(?|(*:311)|/edit(*:324)|(*:332))|Artifacts/([^/]++)(?|(*:362)|/edit(*:375)|(*:383))))|pa(?|ge(?|s/([^/]++)(?|(*:417)|/edit(*:430)|(*:438))|ables/([^/]++)(?|(*:464)|/edit(*:477)|(*:485)))|yment_details/([^/]++)(?|(*:520)|/edit(*:533)|(*:541)))|batch(?|es/([^/]++)(?|(*:573)|/edit(*:586)|(*:594))|_items/([^/]++)(?|(*:621)|/edit(*:634)|(*:642)))|r(?|atings/([^/]++)(?|(*:674)|/edit(*:687)|(*:695))|elationships/([^/]++)(?|(*:728)|/edit(*:741)|(*:749))))|sb\\-api/(?|offers/([^/]++)(?|(*:789)|/edit(*:802)|(*:810))|b(?|roker(?|s/([^/]++)(?|(*:844)|/edit(*:857)|(*:865))|_staffs/([^/]++)(?|(*:893)|/edit(*:906)|(*:914)))|ids/([^/]++)(?|(*:939)|/edit(*:952)|(*:960)))|investors/([^/]++)(?|(*:991)|/edit(*:1004)|(*:1013))|subscriptions/([^/]++)(?|(*:1048)|/edit(*:1062)|(*:1071))))|/p(?|assword/reset/([^/]++)(*:1110)|ublic/([^/]++)(*:1133))|/sb/(?|offers/([^/]++)(?|(*:1168)|/edit(*:1182)|(*:1191))|b(?|roker(?|s/([^/]++)(?|(*:1226)|/edit(*:1240)|(*:1249))|Staffs/([^/]++)(?|(*:1277)|/edit(*:1291)|(*:1300)))|ids/([^/]++)(?|(*:1326)|/edit(*:1340)|(*:1349)))|investors/([^/]++)(?|(*:1381)|/edit(*:1395)|(*:1404))|subscriptions/([^/]++)(?|(*:1439)|/edit(*:1453)|(*:1462)))|/fc/(?|a(?|ttachment/([^/]++)(?|(*:1505))|ddresses/([^/]++)(?|(*:1535)|/edit(*:1549)|(*:1558)))|checklist/([^/]++)(?|(*:1590)|/(?|edit(?|(*:1610))|delete(*:1626)))|dep(?|artments/([^/]++)(?|(*:1663)|/edit(*:1677)|(*:1686))|t/([^/]++)/avatar(*:1713))|ledgers/([^/]++)(?|(*:1742)|/edit(*:1756)|(*:1765))|s(?|ite(?|s/([^/]++)(?|(*:1798)|/edit(*:1812)|(*:1821))|Artifacts/([^/]++)(?|(*:1852)|/edit(*:1866)|(*:1875)))|ocials/([^/]++)(?|(*:1904)|/edit(*:1918)|(*:1927))|ettings/([^/]++)(?|(*:1956)|/edit(*:1970)|(*:1979)))|tags/([^/]++)(?|(*:2006)|/edit(*:2020)|(*:2029))|pa(?|ges/([^/]++)(?|(*:2059)|/edit(*:2073)|(*:2082))|ymentDetails/([^/]++)(?|(*:2116)|/edit(*:2130)|(*:2139)))|batch(?|es/([^/]++)(?|(*:2172)|/edit(*:2186)|(*:2195))|Items/([^/]++)(?|(*:2222)|/edit(*:2236)|(*:2245)))|r(?|atings/([^/]++)(?|(*:2278)|/edit(*:2292)|(*:2301))|elationships/([^/]++)(?|(*:2335)|/edit(*:2349)|(*:2358))|ole/([^/]++)(?|(*:2383)|/(?|edit(*:2400)|delete(*:2415))|(*:2425)))|user/([^/]++)(?|(*:2452)|/(?|edit(*:2469)|d(?|elete(*:2487)|isable(*:2502))|avatar(*:2518))|(*:2528))|organizations/([^/]++)(?|(*:2563)|/edit(*:2577)|(*:2586))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
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
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
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
      129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.attachments.show',
          ),
          1 => 
          array (
            0 => 'id',
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
            '_route' => 'fc-api.attachments.destroy',
          ),
          1 => 
          array (
            0 => 'id',
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
      157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.attributes.show',
          ),
          1 => 
          array (
            0 => 'attribute',
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
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.attributes.edit',
          ),
          1 => 
          array (
            0 => 'attribute',
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
      ),
      178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.attributes.update',
          ),
          1 => 
          array (
            0 => 'attribute',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.attributes.destroy',
          ),
          1 => 
          array (
            0 => 'attribute',
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
      208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.addresses.show',
          ),
          1 => 
          array (
            0 => 'address',
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
      221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.addresses.edit',
          ),
          1 => 
          array (
            0 => 'address',
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
      ),
      229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.addresses.update',
          ),
          1 => 
          array (
            0 => 'address',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.addresses.destroy',
          ),
          1 => 
          array (
            0 => 'address',
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
      262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.settings.show',
          ),
          1 => 
          array (
            0 => 'setting',
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
      275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.settings.edit',
          ),
          1 => 
          array (
            0 => 'setting',
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
      ),
      283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.settings.update',
          ),
          1 => 
          array (
            0 => 'setting',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.settings.destroy',
          ),
          1 => 
          array (
            0 => 'setting',
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
      311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.sites.show',
          ),
          1 => 
          array (
            0 => 'site',
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
      324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.sites.edit',
          ),
          1 => 
          array (
            0 => 'site',
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
      ),
      332 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.sites.update',
          ),
          1 => 
          array (
            0 => 'site',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.sites.destroy',
          ),
          1 => 
          array (
            0 => 'site',
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
      362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.siteArtifacts.show',
          ),
          1 => 
          array (
            0 => 'siteArtifact',
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
      375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.siteArtifacts.edit',
          ),
          1 => 
          array (
            0 => 'siteArtifact',
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
      ),
      383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.siteArtifacts.update',
          ),
          1 => 
          array (
            0 => 'siteArtifact',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.siteArtifacts.destroy',
          ),
          1 => 
          array (
            0 => 'siteArtifact',
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
      417 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pages.show',
          ),
          1 => 
          array (
            0 => 'page',
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
      430 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pages.edit',
          ),
          1 => 
          array (
            0 => 'page',
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
      ),
      438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pages.update',
          ),
          1 => 
          array (
            0 => 'page',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pages.destroy',
          ),
          1 => 
          array (
            0 => 'page',
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
      464 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pageables.show',
          ),
          1 => 
          array (
            0 => 'pageable',
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
      477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pageables.edit',
          ),
          1 => 
          array (
            0 => 'pageable',
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
      ),
      485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pageables.update',
          ),
          1 => 
          array (
            0 => 'pageable',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.pageables.destroy',
          ),
          1 => 
          array (
            0 => 'pageable',
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
      520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.payment_details.show',
          ),
          1 => 
          array (
            0 => 'payment_detail',
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
      533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.payment_details.edit',
          ),
          1 => 
          array (
            0 => 'payment_detail',
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
      ),
      541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.payment_details.update',
          ),
          1 => 
          array (
            0 => 'payment_detail',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.payment_details.destroy',
          ),
          1 => 
          array (
            0 => 'payment_detail',
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
      573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batches.show',
          ),
          1 => 
          array (
            0 => 'batch',
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
      586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batches.edit',
          ),
          1 => 
          array (
            0 => 'batch',
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
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batches.update',
          ),
          1 => 
          array (
            0 => 'batch',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batches.destroy',
          ),
          1 => 
          array (
            0 => 'batch',
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
      621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batch_items.show',
          ),
          1 => 
          array (
            0 => 'batch_item',
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
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batch_items.edit',
          ),
          1 => 
          array (
            0 => 'batch_item',
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
      ),
      642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batch_items.update',
          ),
          1 => 
          array (
            0 => 'batch_item',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.batch_items.destroy',
          ),
          1 => 
          array (
            0 => 'batch_item',
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
      674 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.ratings.show',
          ),
          1 => 
          array (
            0 => 'rating',
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
      687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.ratings.edit',
          ),
          1 => 
          array (
            0 => 'rating',
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
      ),
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.ratings.update',
          ),
          1 => 
          array (
            0 => 'rating',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.ratings.destroy',
          ),
          1 => 
          array (
            0 => 'rating',
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
      728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.relationships.show',
          ),
          1 => 
          array (
            0 => 'relationship',
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
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.relationships.edit',
          ),
          1 => 
          array (
            0 => 'relationship',
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
      ),
      749 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.relationships.update',
          ),
          1 => 
          array (
            0 => 'relationship',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc-api.relationships.destroy',
          ),
          1 => 
          array (
            0 => 'relationship',
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
      789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.offers.show',
          ),
          1 => 
          array (
            0 => 'offer',
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
      802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.offers.edit',
          ),
          1 => 
          array (
            0 => 'offer',
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
      ),
      810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.offers.update',
          ),
          1 => 
          array (
            0 => 'offer',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.offers.destroy',
          ),
          1 => 
          array (
            0 => 'offer',
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
      844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.brokers.show',
          ),
          1 => 
          array (
            0 => 'broker',
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
      857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.brokers.edit',
          ),
          1 => 
          array (
            0 => 'broker',
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
      ),
      865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.brokers.update',
          ),
          1 => 
          array (
            0 => 'broker',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.brokers.destroy',
          ),
          1 => 
          array (
            0 => 'broker',
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
      893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.broker_staffs.show',
          ),
          1 => 
          array (
            0 => 'broker_staff',
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
      906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.broker_staffs.edit',
          ),
          1 => 
          array (
            0 => 'broker_staff',
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
      ),
      914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.broker_staffs.update',
          ),
          1 => 
          array (
            0 => 'broker_staff',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.broker_staffs.destroy',
          ),
          1 => 
          array (
            0 => 'broker_staff',
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
      939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.bids.show',
          ),
          1 => 
          array (
            0 => 'bid',
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
      952 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.bids.edit',
          ),
          1 => 
          array (
            0 => 'bid',
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
      ),
      960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.bids.update',
          ),
          1 => 
          array (
            0 => 'bid',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.bids.destroy',
          ),
          1 => 
          array (
            0 => 'bid',
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
      991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.investors.show',
          ),
          1 => 
          array (
            0 => 'investor',
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
      1004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.investors.edit',
          ),
          1 => 
          array (
            0 => 'investor',
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
      ),
      1013 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.investors.update',
          ),
          1 => 
          array (
            0 => 'investor',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.investors.destroy',
          ),
          1 => 
          array (
            0 => 'investor',
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
      1048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.subscriptions.show',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      1062 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.subscriptions.edit',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      ),
      1071 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.subscriptions.update',
          ),
          1 => 
          array (
            0 => 'subscription',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb-api.subscriptions.destroy',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      1110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
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
      1133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.site-display.index',
          ),
          1 => 
          array (
            0 => 'id',
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
      1168 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.offers.show',
          ),
          1 => 
          array (
            0 => 'offer',
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
      1182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.offers.edit',
          ),
          1 => 
          array (
            0 => 'offer',
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
      ),
      1191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.offers.update',
          ),
          1 => 
          array (
            0 => 'offer',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb.offers.destroy',
          ),
          1 => 
          array (
            0 => 'offer',
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
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokers.show',
          ),
          1 => 
          array (
            0 => 'broker',
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
      1240 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokers.edit',
          ),
          1 => 
          array (
            0 => 'broker',
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
      ),
      1249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokers.update',
          ),
          1 => 
          array (
            0 => 'broker',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokers.destroy',
          ),
          1 => 
          array (
            0 => 'broker',
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
      1277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokerStaffs.show',
          ),
          1 => 
          array (
            0 => 'brokerStaff',
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
      1291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokerStaffs.edit',
          ),
          1 => 
          array (
            0 => 'brokerStaff',
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
      ),
      1300 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokerStaffs.update',
          ),
          1 => 
          array (
            0 => 'brokerStaff',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb.brokerStaffs.destroy',
          ),
          1 => 
          array (
            0 => 'brokerStaff',
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
      1326 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.bids.show',
          ),
          1 => 
          array (
            0 => 'bid',
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
      1340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.bids.edit',
          ),
          1 => 
          array (
            0 => 'bid',
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
      ),
      1349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.bids.update',
          ),
          1 => 
          array (
            0 => 'bid',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb.bids.destroy',
          ),
          1 => 
          array (
            0 => 'bid',
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
      1381 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.investors.show',
          ),
          1 => 
          array (
            0 => 'investor',
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
      1395 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.investors.edit',
          ),
          1 => 
          array (
            0 => 'investor',
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
      ),
      1404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.investors.update',
          ),
          1 => 
          array (
            0 => 'investor',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb.investors.destroy',
          ),
          1 => 
          array (
            0 => 'investor',
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
      1439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.subscriptions.show',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      1453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.subscriptions.edit',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      ),
      1462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sb.subscriptions.update',
          ),
          1 => 
          array (
            0 => 'subscription',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sb.subscriptions.destroy',
          ),
          1 => 
          array (
            0 => 'subscription',
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
      1505 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.attachment.show',
          ),
          1 => 
          array (
            0 => 'id',
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
            '_route' => 'fc.attachment.destroy',
          ),
          1 => 
          array (
            0 => 'id',
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
      1535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.addresses.show',
          ),
          1 => 
          array (
            0 => 'address',
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
      1549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.addresses.edit',
          ),
          1 => 
          array (
            0 => 'address',
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
      ),
      1558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.addresses.update',
          ),
          1 => 
          array (
            0 => 'address',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.addresses.destroy',
          ),
          1 => 
          array (
            0 => 'address',
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
      1590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.checklist.show',
          ),
          1 => 
          array (
            0 => 'id',
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
      1610 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.checklist.edit',
          ),
          1 => 
          array (
            0 => 'id',
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
            '_route' => 'fc.checklist.store',
          ),
          1 => 
          array (
            0 => 'id',
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
      1626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.checklist.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.departments.show',
          ),
          1 => 
          array (
            0 => 'department',
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
      1677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.departments.edit',
          ),
          1 => 
          array (
            0 => 'department',
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
      ),
      1686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.departments.update',
          ),
          1 => 
          array (
            0 => 'department',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.departments.destroy',
          ),
          1 => 
          array (
            0 => 'department',
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
      1713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.get-dept-picture',
          ),
          1 => 
          array (
            0 => 'id',
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
      ),
      1742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ledgers.show',
          ),
          1 => 
          array (
            0 => 'ledger',
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
      1756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ledgers.edit',
          ),
          1 => 
          array (
            0 => 'ledger',
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
      ),
      1765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ledgers.update',
          ),
          1 => 
          array (
            0 => 'ledger',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ledgers.destroy',
          ),
          1 => 
          array (
            0 => 'ledger',
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
      1798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.sites.show',
          ),
          1 => 
          array (
            0 => 'site',
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
      1812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.sites.edit',
          ),
          1 => 
          array (
            0 => 'site',
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
      ),
      1821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.sites.update',
          ),
          1 => 
          array (
            0 => 'site',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.sites.destroy',
          ),
          1 => 
          array (
            0 => 'site',
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
      1852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.siteArtifacts.show',
          ),
          1 => 
          array (
            0 => 'siteArtifact',
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
      1866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.siteArtifacts.edit',
          ),
          1 => 
          array (
            0 => 'siteArtifact',
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
      ),
      1875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.siteArtifacts.update',
          ),
          1 => 
          array (
            0 => 'siteArtifact',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.siteArtifacts.destroy',
          ),
          1 => 
          array (
            0 => 'siteArtifact',
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
      1904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.socials.show',
          ),
          1 => 
          array (
            0 => 'social',
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
      1918 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.socials.edit',
          ),
          1 => 
          array (
            0 => 'social',
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
      ),
      1927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.socials.update',
          ),
          1 => 
          array (
            0 => 'social',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.socials.destroy',
          ),
          1 => 
          array (
            0 => 'social',
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
      1956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.settings.show',
          ),
          1 => 
          array (
            0 => 'setting',
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
      1970 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.settings.edit',
          ),
          1 => 
          array (
            0 => 'setting',
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
      ),
      1979 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.settings.update',
          ),
          1 => 
          array (
            0 => 'setting',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.settings.destroy',
          ),
          1 => 
          array (
            0 => 'setting',
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
      2006 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.tags.show',
          ),
          1 => 
          array (
            0 => 'tag',
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
      2020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.tags.edit',
          ),
          1 => 
          array (
            0 => 'tag',
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
      ),
      2029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.tags.update',
          ),
          1 => 
          array (
            0 => 'tag',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.tags.destroy',
          ),
          1 => 
          array (
            0 => 'tag',
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
      2059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.pages.show',
          ),
          1 => 
          array (
            0 => 'page',
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
      2073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.pages.edit',
          ),
          1 => 
          array (
            0 => 'page',
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
      ),
      2082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.pages.update',
          ),
          1 => 
          array (
            0 => 'page',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.pages.destroy',
          ),
          1 => 
          array (
            0 => 'page',
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
      2116 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.paymentDetails.show',
          ),
          1 => 
          array (
            0 => 'paymentDetail',
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
      2130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.paymentDetails.edit',
          ),
          1 => 
          array (
            0 => 'paymentDetail',
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
      ),
      2139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.paymentDetails.update',
          ),
          1 => 
          array (
            0 => 'paymentDetail',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.paymentDetails.destroy',
          ),
          1 => 
          array (
            0 => 'paymentDetail',
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
      2172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batches.show',
          ),
          1 => 
          array (
            0 => 'batch',
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
      2186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batches.edit',
          ),
          1 => 
          array (
            0 => 'batch',
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
      ),
      2195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batches.update',
          ),
          1 => 
          array (
            0 => 'batch',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batches.destroy',
          ),
          1 => 
          array (
            0 => 'batch',
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
      2222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batchItems.show',
          ),
          1 => 
          array (
            0 => 'batchItem',
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
      2236 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batchItems.edit',
          ),
          1 => 
          array (
            0 => 'batchItem',
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
      ),
      2245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batchItems.update',
          ),
          1 => 
          array (
            0 => 'batchItem',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.batchItems.destroy',
          ),
          1 => 
          array (
            0 => 'batchItem',
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
      2278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ratings.show',
          ),
          1 => 
          array (
            0 => 'rating',
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
      2292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ratings.edit',
          ),
          1 => 
          array (
            0 => 'rating',
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
      ),
      2301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ratings.update',
          ),
          1 => 
          array (
            0 => 'rating',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.ratings.destroy',
          ),
          1 => 
          array (
            0 => 'rating',
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
      2335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.relationships.show',
          ),
          1 => 
          array (
            0 => 'relationship',
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
      2349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.relationships.edit',
          ),
          1 => 
          array (
            0 => 'relationship',
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
      ),
      2358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.relationships.update',
          ),
          1 => 
          array (
            0 => 'relationship',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.relationships.destroy',
          ),
          1 => 
          array (
            0 => 'relationship',
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
      2383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.role.show',
          ),
          1 => 
          array (
            0 => 'id',
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
      2400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.role.edit',
          ),
          1 => 
          array (
            0 => 'id',
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
      ),
      2415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.role.delete',
          ),
          1 => 
          array (
            0 => 'id',
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
      ),
      2425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.role.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2452 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.user.show',
          ),
          1 => 
          array (
            0 => 'id',
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
      2469 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.user.edit',
          ),
          1 => 
          array (
            0 => 'id',
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
      ),
      2487 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.user.delete',
          ),
          1 => 
          array (
            0 => 'id',
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
      ),
      2502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.user.disable',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.get-profile-picture',
          ),
          1 => 
          array (
            0 => 'id',
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
      ),
      2528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.user.store',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.organizations.show',
          ),
          1 => 
          array (
            0 => 'organization',
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
      2577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.organizations.edit',
          ),
          1 => 
          array (
            0 => 'organization',
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
      ),
      2586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fc.organizations.update',
          ),
          1 => 
          array (
            0 => 'organization',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'fc.organizations.destroy',
          ),
          1 => 
          array (
            0 => 'organization',
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
        2 => 
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
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
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
    'generated::mcF3WtCDCGbNbuWS' => 
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
        'as' => 'generated::mcF3WtCDCGbNbuWS',
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
    'fc-api.attachments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/attachments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AttachmentAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AttachmentAPIController@show',
        'as' => 'fc-api.attachments.show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attachments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/attachments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AttachmentAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AttachmentAPIController@index',
        'as' => 'fc-api.attachments.index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attachments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/attachments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AttachmentAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AttachmentAPIController@update',
        'as' => 'fc-api.attachments.store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attachments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/attachments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AttachmentAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AttachmentAPIController@destroy',
        'as' => 'fc-api.attachments.destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.fc.org-detect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/org-detect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@detect',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@detect',
        'as' => 'fc-api.fc.org-detect',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.fc.app-settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/app-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@app_settings',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@app_settings',
        'as' => 'fc-api.fc.app-settings',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'sb-api.offers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.offers.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.offers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/offers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.offers.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.offers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sb-api/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.offers.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.offers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.offers.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.offers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/offers/{offer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.offers.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.offers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/sb-api/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.offers.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.offers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/sb-api/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.offers.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\OfferAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.brokers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/brokers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.brokers.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.brokers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/brokers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.brokers.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.brokers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sb-api/brokers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.brokers.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.brokers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/brokers/{broker}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.brokers.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.brokers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/brokers/{broker}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.brokers.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.brokers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/sb-api/brokers/{broker}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.brokers.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.brokers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/sb-api/brokers/{broker}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.brokers.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.broker_staffs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/broker_staffs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.broker_staffs.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.broker_staffs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/broker_staffs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.broker_staffs.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.broker_staffs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sb-api/broker_staffs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.broker_staffs.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.broker_staffs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/broker_staffs/{broker_staff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.broker_staffs.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.broker_staffs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/broker_staffs/{broker_staff}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.broker_staffs.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.broker_staffs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/sb-api/broker_staffs/{broker_staff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.broker_staffs.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.broker_staffs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/sb-api/broker_staffs/{broker_staff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.broker_staffs.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BrokerStaffAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.investors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/investors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.investors.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.investors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/investors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.investors.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.investors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sb-api/investors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.investors.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.investors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/investors/{investor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.investors.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.investors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/investors/{investor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.investors.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.investors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/sb-api/investors/{investor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.investors.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.investors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/sb-api/investors/{investor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.investors.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\InvestorAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.bids.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.bids.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.bids.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/bids/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.bids.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.bids.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sb-api/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.bids.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.bids.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/bids/{bid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.bids.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.bids.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/bids/{bid}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.bids.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.bids.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/sb-api/bids/{bid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.bids.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.bids.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/sb-api/bids/{bid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.bids.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\BidAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.subscriptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.subscriptions.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.subscriptions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/subscriptions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.subscriptions.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.subscriptions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/sb-api/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.subscriptions.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.subscriptions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.subscriptions.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.subscriptions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/sb-api/subscriptions/{subscription}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.subscriptions.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.subscriptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/sb-api/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.subscriptions.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'sb-api.subscriptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/sb-api/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'sb-api.subscriptions.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\API\\SubscriptionAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/sb-api',
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
    'fc-api.settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.settings.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.settings.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.settings.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.settings.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/settings/{setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.settings.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.settings.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.settings.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SettingAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.sites.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/sites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.sites.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.sites.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/sites/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.sites.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.sites.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/sites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.sites.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.sites.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/sites/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.sites.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.sites.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/sites/{site}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.sites.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.sites.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/sites/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.sites.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.sites.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/sites/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.sites.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pages.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pages.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pages.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pages.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/pages/{page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pages.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pages.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pages.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pageables.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/pageables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pageables.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pageables.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/pageables/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pageables.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pageables.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/pageables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pageables.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pageables.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/pageables/{pageable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pageables.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pageables.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/pageables/{pageable}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pageables.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pageables.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/pageables/{pageable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pageables.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.pageables.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/pageables/{pageable}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.pageables.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PageableAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attributes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.attributes.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attributes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/attributes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.attributes.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attributes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.attributes.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attributes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.attributes.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attributes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/attributes/{attribute}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.attributes.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attributes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.attributes.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.attributes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.attributes.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\ModelAttributeAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.siteArtifacts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/siteArtifacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.siteArtifacts.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.siteArtifacts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/siteArtifacts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.siteArtifacts.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.siteArtifacts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/siteArtifacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.siteArtifacts.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.siteArtifacts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/siteArtifacts/{siteArtifact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.siteArtifacts.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.siteArtifacts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/siteArtifacts/{siteArtifact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.siteArtifacts.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.siteArtifacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/siteArtifacts/{siteArtifact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.siteArtifacts.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.siteArtifacts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/siteArtifacts/{siteArtifact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.siteArtifacts.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\SiteArtifactAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batches.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/batches',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batches.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batches.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/batches/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batches.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batches.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/batches',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batches.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batches.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/batches/{batch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batches.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batches.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/batches/{batch}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batches.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batches.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/batches/{batch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batches.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batches.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/batches/{batch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batches.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.addresses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.addresses.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.addresses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.addresses.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.addresses.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.addresses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.addresses.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.addresses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/addresses/{address}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.addresses.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.addresses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.addresses.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.addresses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.addresses.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\AddressAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batch_items.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/batch_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batch_items.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batch_items.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/batch_items/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batch_items.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batch_items.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/batch_items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batch_items.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batch_items.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/batch_items/{batch_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batch_items.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batch_items.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/batch_items/{batch_item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batch_items.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batch_items.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/batch_items/{batch_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batch_items.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.batch_items.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/batch_items/{batch_item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.batch_items.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\BatchItemAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.payment_details.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/payment_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.payment_details.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.payment_details.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/payment_details/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.payment_details.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.payment_details.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/payment_details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.payment_details.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.payment_details.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/payment_details/{payment_detail}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.payment_details.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.payment_details.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/payment_details/{payment_detail}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.payment_details.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.payment_details.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/payment_details/{payment_detail}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.payment_details.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.payment_details.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/payment_details/{payment_detail}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.payment_details.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\PaymentDetailAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.ratings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/ratings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.ratings.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.ratings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/ratings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.ratings.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.ratings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/ratings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.ratings.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.ratings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/ratings/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.ratings.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.ratings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/ratings/{rating}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.ratings.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.ratings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/ratings/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.ratings.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.ratings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/ratings/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.ratings.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RatingAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.relationships.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/relationships',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.relationships.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@index',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.relationships.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/relationships/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.relationships.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@create',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.relationships.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fc-api/relationships',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.relationships.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@store',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.relationships.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/relationships/{relationship}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.relationships.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@show',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.relationships.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fc-api/relationships/{relationship}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.relationships.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@edit',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.relationships.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/fc-api/relationships/{relationship}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.relationships.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@update',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'fc-api.relationships.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fc-api/relationships/{relationship}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth:sanctum',
        ),
        'as' => 'fc-api.relationships.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\API\\RelationshipAPIController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/fc-api',
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
    'home' => 
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
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\FrontendController@displayHome',
        'controller' => 'App\\Http\\Controllers\\Frontend\\FrontendController@displayHome',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
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
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
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
    'generated::gfR4CY6FJMRwQLsQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gfR4CY6FJMRwQLsQ',
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
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
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
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
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
    'generated::L2E1diWhE9Sdz2KW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::L2E1diWhE9Sdz2KW',
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
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
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
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
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
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
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
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
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
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
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
    'generated::WXeri9uAbsdQuucd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WXeri9uAbsdQuucd',
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
    'fc.site-display.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'public/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteDisplayController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteDisplayController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fc.site-display.index',
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
    'fc.php-info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'phpinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:242:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:26:"function () { phpinfo(); }";s:5:"scope";s:35:"Hasob\\FoundationCore\\FoundationCore";s:4:"this";N;s:4:"self";s:32:"0000000000000f0a0000000000000000";}";s:4:"hash";s:44:"LQSrlsp32tuDax9qPg0Joa0jlZ1bz/P5fxdcbbHXmdI=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fc.php-info',
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
    'fc.clear-cache' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:473:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:256:"function() {
            \\Artisan::call(\'cache:clear\');
            \\Artisan::call(\'config:cache\');
            \\Artisan::call(\'clear-compiled\');
            \\Artisan::call(\'optimize\');
            return "Cache is cleared ... Check again";
        }";s:5:"scope";s:35:"Hasob\\FoundationCore\\FoundationCore";s:4:"this";N;s:4:"self";s:32:"0000000000000f950000000000000000";}";s:4:"hash";s:44:"ZHjt3Swhz6ZLRXUuw2dIxCciCCgDx6AixC4ZZXTHc9M=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fc.clear-cache',
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
    'fc.org-detect' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'org-detect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@detect',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@detect',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fc.org-detect',
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
    'fc.app-settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'app-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@app_settings',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@app_settings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fc.app-settings',
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
    'sb.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'DMO\\SavingsBond\\Controllers\\Dashboard\\DashboardController@displayDashboard',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Dashboard\\DashboardController@displayDashboard',
        'as' => 'sb.dashboard',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.offers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.offers.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@index',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.offers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/offers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.offers.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@create',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.offers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sb/offers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.offers.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@store',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.offers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.offers.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@show',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.offers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/offers/{offer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.offers.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@edit',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.offers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sb/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.offers.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@update',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.offers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sb/offers/{offer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.offers.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\OfferController@destroy',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/brokers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokers.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@index',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/brokers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokers.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@create',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sb/brokers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokers.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@store',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/brokers/{broker}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokers.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@show',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/brokers/{broker}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokers.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@edit',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sb/brokers/{broker}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokers.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@update',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sb/brokers/{broker}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokers.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerController@destroy',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokerStaffs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/brokerStaffs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokerStaffs.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@index',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokerStaffs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/brokerStaffs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokerStaffs.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@create',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokerStaffs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sb/brokerStaffs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokerStaffs.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@store',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokerStaffs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/brokerStaffs/{brokerStaff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokerStaffs.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@show',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokerStaffs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/brokerStaffs/{brokerStaff}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokerStaffs.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@edit',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokerStaffs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sb/brokerStaffs/{brokerStaff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokerStaffs.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@update',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.brokerStaffs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sb/brokerStaffs/{brokerStaff}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.brokerStaffs.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BrokerStaffController@destroy',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.investors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/investors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.investors.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@index',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.investors.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/investors/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.investors.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@create',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.investors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sb/investors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.investors.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@store',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.investors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/investors/{investor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.investors.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@show',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.investors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/investors/{investor}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.investors.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@edit',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.investors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sb/investors/{investor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.investors.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@update',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.investors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sb/investors/{investor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.investors.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\InvestorController@destroy',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.bids.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.bids.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@index',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.bids.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/bids/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.bids.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@create',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.bids.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sb/bids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.bids.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@store',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.bids.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/bids/{bid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.bids.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@show',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.bids.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/bids/{bid}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.bids.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@edit',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.bids.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sb/bids/{bid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.bids.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@update',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.bids.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sb/bids/{bid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.bids.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\BidController@destroy',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.subscriptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.subscriptions.index',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@index',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@index',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.subscriptions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/subscriptions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.subscriptions.create',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@create',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@create',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.subscriptions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sb/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.subscriptions.store',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@store',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@store',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.subscriptions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.subscriptions.show',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@show',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@show',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.subscriptions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sb/subscriptions/{subscription}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.subscriptions.edit',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@edit',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@edit',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.subscriptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sb/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.subscriptions.update',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@update',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@update',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'sb.subscriptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sb/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'sb.subscriptions.destroy',
        'uses' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@destroy',
        'controller' => 'DMO\\SavingsBond\\Controllers\\Models\\SubscriptionController@destroy',
        'namespace' => NULL,
        'prefix' => '/sb',
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
    'fc.attachment.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/attachment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AttachmentController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AttachmentController@show',
        'as' => 'fc.attachment.show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.attachment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/attachment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AttachmentController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AttachmentController@update',
        'as' => 'fc.attachment.store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.attachment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/attachment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AttachmentController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AttachmentController@destroy',
        'as' => 'fc.attachment.destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.comment-add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/comment/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\CommentController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\CommentController@update',
        'as' => 'fc.comment-add',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.checklists.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/checklists',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@index',
        'as' => 'fc.checklists.index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.checklist.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/checklist/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@index',
        'as' => 'fc.checklist.show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.checklist.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/checklist/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@index',
        'as' => 'fc.checklist.edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.checklist.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/checklist/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@index',
        'as' => 'fc.checklist.store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.checklist.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/checklist/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@delete',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@delete',
        'as' => 'fc.checklist.delete',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.checklist-template.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/checklist-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@updateTemplate',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@updateTemplate',
        'as' => 'fc.checklist-template.store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.checklist-template-item.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/checklist-template-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@updateTemplateItem',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\ChecklistController@updateTemplateItem',
        'as' => 'fc.checklist-template-item.store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.departments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.departments.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.departments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/departments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.departments.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.departments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.departments.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.departments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.departments.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.departments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/departments/{department}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.departments.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.departments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.departments.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.departments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.departments.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\DepartmentController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ledgers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/ledgers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ledgers.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ledgers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/ledgers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ledgers.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ledgers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/ledgers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ledgers.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ledgers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/ledgers/{ledger}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ledgers.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ledgers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/ledgers/{ledger}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ledgers.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ledgers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/ledgers/{ledger}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ledgers.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ledgers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/ledgers/{ledger}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ledgers.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\LedgerController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.sites.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/sites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.sites.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.sites.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/sites/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.sites.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.sites.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/sites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.sites.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.sites.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/sites/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.sites.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.sites.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/sites/{site}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.sites.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.sites.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/sites/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.sites.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.sites.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/sites/{site}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.sites.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.tags.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.tags.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\TagController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\TagController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.tags.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/tags/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.tags.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\TagController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\TagController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.tags.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.tags.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\TagController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\TagController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.tags.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.tags.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\TagController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\TagController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.tags.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/tags/{tag}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.tags.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\TagController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\TagController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.tags.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.tags.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\TagController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\TagController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.tags.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/tags/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.tags.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\TagController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\TagController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.socials.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/socials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.socials.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SocialController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SocialController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.socials.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/socials/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.socials.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SocialController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SocialController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.socials.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/socials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.socials.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SocialController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SocialController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.socials.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/socials/{social}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.socials.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SocialController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SocialController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.socials.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/socials/{social}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.socials.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SocialController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SocialController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.socials.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/socials/{social}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.socials.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SocialController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SocialController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.socials.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/socials/{social}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.socials.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SocialController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SocialController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.settings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.settings.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SettingController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SettingController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.settings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/settings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.settings.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SettingController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SettingController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.settings.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SettingController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SettingController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.settings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.settings.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SettingController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SettingController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.settings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/settings/{setting}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.settings.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SettingController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SettingController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.settings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.settings.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SettingController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SettingController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.settings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/settings/{setting}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.settings.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SettingController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SettingController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.pages.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PageController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PageController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.pages.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PageController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PageController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.pages.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PageController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PageController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.pages.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PageController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PageController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/pages/{page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.pages.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PageController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PageController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.pages.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PageController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PageController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.pages.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PageController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PageController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.siteArtifacts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/siteArtifacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.siteArtifacts.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.siteArtifacts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/siteArtifacts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.siteArtifacts.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.siteArtifacts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/siteArtifacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.siteArtifacts.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.siteArtifacts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/siteArtifacts/{siteArtifact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.siteArtifacts.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.siteArtifacts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/siteArtifacts/{siteArtifact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.siteArtifacts.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.siteArtifacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/siteArtifacts/{siteArtifact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.siteArtifacts.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.siteArtifacts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/siteArtifacts/{siteArtifact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.siteArtifacts.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\SiteArtifactController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.addresses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.addresses.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AddressController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AddressController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.addresses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/addresses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.addresses.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AddressController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AddressController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.addresses.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AddressController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AddressController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.addresses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.addresses.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AddressController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AddressController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.addresses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/addresses/{address}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.addresses.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AddressController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AddressController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.addresses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.addresses.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AddressController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AddressController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.addresses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.addresses.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\AddressController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batches.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/batches',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batches.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batches.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/batches/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batches.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batches.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/batches',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batches.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batches.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/batches/{batch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batches.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batches.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/batches/{batch}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batches.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batches.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/batches/{batch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batches.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batches.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/batches/{batch}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batches.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batchItems.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/batchItems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batchItems.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batchItems.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/batchItems/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batchItems.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batchItems.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/batchItems',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batchItems.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batchItems.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/batchItems/{batchItem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batchItems.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batchItems.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/batchItems/{batchItem}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batchItems.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batchItems.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/batchItems/{batchItem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batchItems.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.batchItems.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/batchItems/{batchItem}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.batchItems.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\BatchItemController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.paymentDetails.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/paymentDetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.paymentDetails.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.paymentDetails.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/paymentDetails/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.paymentDetails.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.paymentDetails.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/paymentDetails',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.paymentDetails.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.paymentDetails.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/paymentDetails/{paymentDetail}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.paymentDetails.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.paymentDetails.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/paymentDetails/{paymentDetail}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.paymentDetails.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.paymentDetails.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/paymentDetails/{paymentDetail}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.paymentDetails.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.paymentDetails.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/paymentDetails/{paymentDetail}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.paymentDetails.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\PaymentDetailController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ratings.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/ratings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ratings.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RatingController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RatingController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ratings.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/ratings/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ratings.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RatingController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RatingController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ratings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/ratings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ratings.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RatingController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RatingController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ratings.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/ratings/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ratings.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RatingController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RatingController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ratings.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/ratings/{rating}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ratings.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RatingController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RatingController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ratings.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/ratings/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ratings.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RatingController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RatingController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.ratings.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/ratings/{rating}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.ratings.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RatingController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RatingController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.relationships.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/relationships',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.relationships.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.relationships.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/relationships/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.relationships.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.relationships.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/relationships',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.relationships.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.relationships.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/relationships/{relationship}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.relationships.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.relationships.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/relationships/{relationship}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.relationships.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.relationships.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/relationships/{relationship}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.relationships.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.relationships.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/relationships/{relationship}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.relationships.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RelationshipController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.users.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\UserController@profile',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\UserController@profile',
        'as' => 'fc.users.profile',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\UserController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\UserController@index',
        'as' => 'fc.users.index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\UserController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\UserController@show',
        'as' => 'fc.user.show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/user/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\UserController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\UserController@edit',
        'as' => 'fc.user.edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.user.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/user/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\UserController@delete',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\UserController@delete',
        'as' => 'fc.user.delete',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\UserController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\UserController@update',
        'as' => 'fc.user.store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.user.disable' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'fc/user/{id}/disable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\UserController@disable',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\UserController@disable',
        'as' => 'fc.user.disable',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RoleController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RoleController@index',
        'as' => 'fc.roles.index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.role.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RoleController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RoleController@show',
        'as' => 'fc.role.show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/role/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RoleController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RoleController@edit',
        'as' => 'fc.role.edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.role.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/role/{id}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RoleController@delete',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RoleController@delete',
        'as' => 'fc.role.delete',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\RoleController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\RoleController@update',
        'as' => 'fc.role.store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.upload-profile-picture' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/profile/picture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\UserController@uploadProfilePicture',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\UserController@uploadProfilePicture',
        'as' => 'fc.upload-profile-picture',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.user-availability' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/profile/availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\UserController@modifyUserAvailability',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\UserController@modifyUserAvailability',
        'as' => 'fc.user-availability',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.organizations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/organizations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.organizations.index',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@index',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@index',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.organizations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/organizations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.organizations.create',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@create',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@create',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.organizations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/organizations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.organizations.store',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@store',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@store',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.organizations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/organizations/{organization}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.organizations.show',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@show',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@show',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.organizations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/organizations/{organization}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.organizations.edit',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@edit',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@edit',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.organizations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'fc/organizations/{organization}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.organizations.update',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@update',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@update',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.organizations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'fc/organizations/{organization}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'as' => 'fc.organizations.destroy',
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@destroy',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@destroy',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.org-domains' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/org-domains',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@displayDomains',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@displayDomains',
        'as' => 'fc.org-domains',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.org-settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/org-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@displaySettings',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@displaySettings',
        'as' => 'fc.org-settings',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.org-features' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/org-features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@displayFeatures',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@displayFeatures',
        'as' => 'fc.org-features',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.org-features-process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fc/org-features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@processFeatures',
        'controller' => 'Hasob\\FoundationCore\\Controllers\\OrganizationController@processFeatures',
        'as' => 'fc.org-features-process',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.get-profile-picture' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/user/{id}/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:585:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:368:"function ($id) {
                $user = \\Hasob\\FoundationCore\\Models\\User::find($id);
                $content_type = (new \\finfo(FILEINFO_MIME))->buffer($user->profile_image);
                $response = response(trim($user->profile_image))->header(\'Content-Type\', $content_type);
                ob_end_clean();
                return $response;
            }";s:5:"scope";s:35:"Hasob\\FoundationCore\\FoundationCore";s:4:"this";N;s:4:"self";s:32:"000000000000104e0000000000000000";}";s:4:"hash";s:44:"1LeDbZoFG6+00aBlw8mVUZpfPdvcg8ecmpuJpDiawGc=";}}',
        'as' => 'fc.get-profile-picture',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'fc.get-dept-picture' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fc/dept/{id}/avatar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:585:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:368:"function ($id) {
                $dept = \\Hasob\\FoundationCore\\Models\\Department::find($id);
                $content_type = (new \\finfo(FILEINFO_MIME))->buffer($dept->logo_image);
                $response = response(trim($dept->logo_image))->header(\'Content-Type\', $content_type);
                ob_end_clean();
                return $response;
            }";s:5:"scope";s:35:"Hasob\\FoundationCore\\FoundationCore";s:4:"this";N;s:4:"self";s:32:"00000000000010500000000000000000";}";s:4:"hash";s:44:"dY8K8c+ca+0AXTrEjm1mRTBz2weQghC8LIqo+HjXcgo=";}}',
        'as' => 'fc.get-dept-picture',
        'namespace' => NULL,
        'prefix' => '/fc',
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
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Hasob\\FoundationCore\\Middleware\\IdentifyOrganization',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Dashboard\\DashboardController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
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
  ),
)
);
