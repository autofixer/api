<?php

return array (
  'new-db' => 
  array (
    'user_groups' => 
    array (
      '35b2219a0096eca21c0a131162ea84af1a694ee72bb03ca5d7707b8045a4266f0833ae47' => 
      array (
        'query' => 'INSERT INTO user_groups (group_name,createdby) VALUES (:group_name0,:createdby0)',
        'bind' => 
        array (
          'group_name0' => 'Accountant',
          'createdby0' => 17,
        ),
      ),
    ),
    'activities' => 
    array (
      '2a079e8575911b67f3c507730decf0b8ba77cdadd95445856377d988283a95ebe4120f0a' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You added a user group',
          'table_name0' => 'user_groups',
          'method0' => 'insert',
          'tableid0' => '9',
          'logged_by0' => '295a35b3d389cb54c1efad776c690a61',
        ),
      ),
      '2a079e8575911b67f3c507730decf0b86379998cc7cef0fe5f8b4b5fb5a4eba1afbef9c5' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You updated a user group from \\"Accountant\\" to \\"Accountant\\"',
          'table_name0' => 'user_groups',
          'method0' => 'update',
          'tableid0' => '9',
          'logged_by0' => '295a35b3d389cb54c1efad776c690a61',
        ),
      ),
      '2a079e8575911b67f3c507730decf0b86ca23bbf3751b6f63af6a0db9d6a6d070b0383cd' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You created a new ticket category \\"Payment Issue\\"',
          'table_name0' => 'ticket_category',
          'method0' => 'insert',
          'tableid0' => '1',
          'logged_by0' => '295a35b3d389cb54c1efad776c690a61',
        ),
      ),
      '2a079e8575911b67f3c507730decf0b89cdb93c9c8c9607512114b2d7c6d516124d6d754' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You created a new ticket category \\"Payment Issue 1\\"',
          'table_name0' => 'ticket_category',
          'method0' => 'insert',
          'tableid0' => '2',
          'logged_by0' => '295a35b3d389cb54c1efad776c690a61',
        ),
      ),
      '2a079e8575911b67f3c507730decf0b81512caf6237cdd73b5581768970afad7820c5766' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You updated a ticket category from \\"Payment Issue\\" to \\"Payment issue 2\\"',
          'table_name0' => 'ticket_category',
          'method0' => 'update',
          'tableid0' => '1',
          'logged_by0' => '295a35b3d389cb54c1efad776c690a61',
        ),
      ),
      '2a079e8575911b67f3c507730decf0b8723365c79eb3c68b9c8f391d9f1ffe0edf8d690a' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You deleted a ticket category \\"Payment issue 2\\"',
          'table_name0' => 'ticket_category',
          'method0' => 'delete',
          'tableid0' => '1',
          'logged_by0' => '',
        ),
      ),
      '2a079e8575911b67f3c507730decf0b8798ffc20659046a2374a3c03dc1244e8c6901c82' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You created a new ticket department \\"officer\\"',
          'table_name0' => 'ticket_department',
          'method0' => 'insert',
          'tableid0' => '1',
          'logged_by0' => '295a35b3d389cb54c1efad776c690a61',
        ),
      ),
      '2a079e8575911b67f3c507730decf0b855951c2b217f1ee8d7b09a22a29297ff61f13ea9' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You created a new ticket department \\"officer 2\\"',
          'table_name0' => 'ticket_department',
          'method0' => 'insert',
          'tableid0' => '2',
          'logged_by0' => '295a35b3d389cb54c1efad776c690a61',
        ),
      ),
      '2a079e8575911b67f3c507730decf0b8384d640c8ed45a7d5d7e91135c76527d4d21752e' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You deleted a ticket department \\"officer 2\\"',
          'table_name0' => 'ticket_department',
          'method0' => 'delete',
          'tableid0' => '2',
          'logged_by0' => '295a35b3d389cb54c1efad776c690a61',
        ),
      ),
      '2a079e8575911b67f3c507730decf0b825a3e320717c743e32af112903bb64cb005cc86a' => 
      array (
        'query' => 'INSERT INTO activities (activity,table_name,method,tableid,logged_by) VALUES (:activity0,:table_name0,:method0,:tableid0,:logged_by0)',
        'bind' => 
        array (
          'activity0' => 'You updated a ticket department from \\"officer\\" to \\"officer 3\\"',
          'table_name0' => 'ticket_department',
          'method0' => 'update',
          'tableid0' => '1',
          'logged_by0' => '',
        ),
      ),
    ),
    'manufacturers' => 
    array (
      'cdf2b0d26e2be004eee38374116a649fa01ef90bd5c68684a19bc67b657bc96955d91287' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'BMW',
          'manufacturer_logo0' => 'bmw.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649ff9e412360325f129ff9af0a97cfbe7a124b689cb' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'Audi',
          'manufacturer_logo0' => 'audi.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f1de28af86a6a7f2b60e5b3205689f3589dff11d9' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'Acura',
          'manufacturer_logo0' => 'acura-official-logo.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649fd393f9e760b4b7bea67a8f9ef6fd1cc65bb9e776' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'Cadillac',
          'manufacturer_logo0' => 'cadillac.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f24cab2f246716269320f769bcdcb033c6d0aa9c9' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'chrysler',
          'manufacturer_logo0' => 'chrysler-official-logo-of-the-company-Copy.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f6426e1f07dc9844ea40039692f41ef38fea46999' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'dodge',
          'manufacturer_logo0' => 'dodge.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f15173393b83b1801723ed1f685bb4d9e86b9a7b4' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'ferrari',
          'manufacturer_logo0' => 'ferrari.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f78e8db18221412945fcf86be33299e7784634f4d' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'ford',
          'manufacturer_logo0' => 'ford.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f4d839bb4ab0c7d2adf2bc353f9cbf19363a6185a' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'gmc',
          'manufacturer_logo0' => 'gmc-official-logo-of-the-company.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f46838a71c7f0804548911013f698ed13e6285963' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'infiniti',
          'manufacturer_logo0' => 'infiniti-official-logo-of-the-company.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f4677a73c69bd2e3cf97cec0f779e45192d4c7980' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'jaguar',
          'manufacturer_logo0' => 'jaguar.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f9b8bbf58c1586c99629eb858099b3ebea32fc7b7' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'kia',
          'manufacturer_logo0' => 'kia.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f8b334509dfcdec6fd0db08143245fff8748457b0' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'land rover',
          'manufacturer_logo0' => 'land-rover-official-logo-of-the-company.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f26b924daf1e2ebe78c02ad7d8b65e956ab4c9a74' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'lexus',
          'manufacturer_logo0' => 'lexus-official-logo-of-the-company.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649ff29c2f27317df8d8929327d41785a3d812e5a5ef' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'mazda',
          'manufacturer_logo0' => 'mazda.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f262911003a954576384090106baab17a54976f6c' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'mercedes benz',
          'manufacturer_logo0' => 'mercedes-benz-official-logo-of-the-company.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f7525420c5c3f008cb2b258f79b888e7706065819' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'mini',
          'manufacturer_logo0' => 'mini.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f3c79c4ca9fc192c464fc369a5ca10c9db34f7400' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'mg',
          'manufacturer_logo0' => 'mg-official-logo-of-the-company1.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649ff51fe6c43801aee2a43a55a649a75504a784578e' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'nissan',
          'manufacturer_logo0' => 'nissan.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f26746b018c1c07605a4414a771a6d574693aa140' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'peugeot',
          'manufacturer_logo0' => 'peugeot.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f0e9a17f082b6d3272b19f7161978b8c104bb9ffc' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'Pontiac',
          'manufacturer_logo0' => 'Pontiac-Official-Logo-of-the-Company-1.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f0854785b8ff49efdcf650c638fe9604a85cc9cfd' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'Saturn',
          'manufacturer_logo0' => 'Saturn-Official-Logo-of-the-Company-fb.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f4ffddad324116dc7eb7ad1f7182259e574e0b4d2' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'subaru',
          'manufacturer_logo0' => 'subaru-logo1.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f9627cdf80f8fec2865c9c813d50d3c3e91f40102' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'suzuki',
          'manufacturer_logo0' => 'suzuki.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649fa3f8a1c4316f9dffe0df9b7ecfbe937bdf8722c6' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'toyota',
          'manufacturer_logo0' => 'toyota.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649f5004017ada6acb76df2e1a61b0d9fc499db46202' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'volkswagen',
          'manufacturer_logo0' => 'volkswagen.jpg',
          'visible0' => '1',
        ),
      ),
      'cdf2b0d26e2be004eee38374116a649fd9f3e2148d2e0cbf9762eb68eae287872c20a29d' => 
      array (
        'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
        'bind' => 
        array (
          'manufacturer_name0' => 'volvo',
          'manufacturer_logo0' => 'volvo.jpg',
          'visible0' => '1',
        ),
      ),
    ),
    'service_requests' => 
    array (
      '10d1d5399aed147e7c00ee3840f8568bc831e14f2aeb034c297da4780b1ed7eb2781d2e5' => 
      array (
        'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_on_site_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_on_site_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0)',
        'bind' => 
        array (
          'service_type0' => 'diagnosis',
          'customer_name0' => 'ifeanyi amadi',
          'customer_email0' => 'hellojoesphi@gmail.com',
          'customer_phone0' => '0800000000',
          'customer_location0' => 'abuja',
          'customer_address0' => NULL,
          'manufacturerid0' => '21',
          'car_year0' => '2003',
          'needing_on_site_mechanic0' => 'no',
          'date_mechanic_should_visit0' => NULL,
          'time_mechanic_should_visit0' => NULL,
          'customer_comment0' => 'djdjdd',
          'statusid0' => '1',
        ),
      ),
      '10d1d5399aed147e7c00ee3840f8568bd3454ac45ade35ae7dd8e4ad60f3882c41aa567f' => 
      array (
        'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_on_site_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_on_site_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0)',
        'bind' => 
        array (
          'service_type0' => 'diagnosis',
          'customer_name0' => 'ifeanyi amadi',
          'customer_email0' => 'hellojoesphi@gmail.com',
          'customer_phone0' => '0800000000',
          'customer_location0' => 'abuja',
          'customer_address0' => NULL,
          'manufacturerid0' => '11',
          'car_year0' => '2003',
          'needing_on_site_mechanic0' => 'no',
          'date_mechanic_should_visit0' => NULL,
          'time_mechanic_should_visit0' => NULL,
          'customer_comment0' => 'This is my car, please get back to me as soon as you can, thanks!',
          'statusid0' => '1',
        ),
      ),
      'aa75c0be33382133d44e212ed2df60271753e8f9f721351e757e976075f1eef537099a61' => 
      array (
        'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_on_site_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid,subscribe_to_a_plan) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_on_site_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0,:subscribe_to_a_plan0)',
        'bind' => 
        array (
          'service_type0' => 'maintenance',
          'customer_name0' => NULL,
          'customer_email0' => NULL,
          'customer_phone0' => NULL,
          'customer_location0' => NULL,
          'customer_address0' => NULL,
          'manufacturerid0' => '1',
          'car_year0' => NULL,
          'needing_on_site_mechanic0' => 'no',
          'date_mechanic_should_visit0' => NULL,
          'time_mechanic_should_visit0' => NULL,
          'customer_comment0' => NULL,
          'statusid0' => '1',
          'subscribe_to_a_plan0' => 'no',
        ),
      ),
      'aa75c0be33382133d44e212ed2df60270d2bdbd59dde99686454aed043254a8e32e11a6a' => 
      array (
        'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_on_site_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid,subscribe_to_a_plan) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_on_site_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0,:subscribe_to_a_plan0)',
        'bind' => 
        array (
          'service_type0' => 'maintenance',
          'customer_name0' => 'ifeanyi amadi',
          'customer_email0' => 'david.ascif@gmail.com',
          'customer_phone0' => '0800000000',
          'customer_location0' => 'abuja',
          'customer_address0' => NULL,
          'manufacturerid0' => '17',
          'car_year0' => '2003',
          'needing_on_site_mechanic0' => 'no',
          'date_mechanic_should_visit0' => '2022-01-16',
          'time_mechanic_should_visit0' => '12:00',
          'customer_comment0' => 'Please complete the form below to contact our experts on maintenance',
          'statusid0' => '1',
          'subscribe_to_a_plan0' => 'no',
        ),
      ),
      'aa75c0be33382133d44e212ed2df6027ca73e00ecd321ce21498dae4be0a71c5ad205dcd' => 
      array (
        'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_on_site_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid,subscribe_to_a_plan) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_on_site_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0,:subscribe_to_a_plan0)',
        'bind' => 
        array (
          'service_type0' => 'repair',
          'customer_name0' => 'ifeanyi amadi',
          'customer_email0' => 'admin@themesbrand.com',
          'customer_phone0' => '0800000000',
          'customer_location0' => 'abuja',
          'customer_address0' => '19 no close abuja street',
          'manufacturerid0' => '18',
          'car_year0' => '2020',
          'needing_on_site_mechanic0' => 'yes',
          'date_mechanic_should_visit0' => '2022-01-16',
          'time_mechanic_should_visit0' => '12:00',
          'customer_comment0' => 'Thus is my test comment.',
          'statusid0' => '1',
          'subscribe_to_a_plan0' => 'no',
        ),
      ),
      'aa75c0be33382133d44e212ed2df60278f98977f0149c27d7e81caafe269b264b5e4cb58' => 
      array (
        'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_on_site_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid,subscribe_to_a_plan) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_on_site_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0,:subscribe_to_a_plan0)',
        'bind' => 
        array (
          'service_type0' => 'diagnosis',
          'customer_name0' => 'emeka paul',
          'customer_email0' => 'emeka@test.com',
          'customer_phone0' => '0800000001',
          'customer_location0' => 'abuja',
          'customer_address0' => NULL,
          'manufacturerid0' => '6',
          'car_year0' => '2004',
          'needing_on_site_mechanic0' => 'no',
          'date_mechanic_should_visit0' => NULL,
          'time_mechanic_should_visit0' => NULL,
          'customer_comment0' => 'My car just refused to start',
          'statusid0' => '1',
          'subscribe_to_a_plan0' => 'no',
        ),
      ),
      'aa75c0be33382133d44e212ed2df6027dfbff1498b2aaddb3d136422d493bec98ee08b31' => 
      array (
        'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_on_site_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid,subscribe_to_a_plan) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_on_site_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0,:subscribe_to_a_plan0)',
        'bind' => 
        array (
          'service_type0' => 'maintenance',
          'customer_name0' => 'emeka paul 2',
          'customer_email0' => 'franke@yahoo.com',
          'customer_phone0' => '0800000003',
          'customer_location0' => 'abuja',
          'customer_address0' => NULL,
          'manufacturerid0' => '9',
          'car_year0' => '2003',
          'needing_on_site_mechanic0' => 'no',
          'date_mechanic_should_visit0' => '2022-01-10',
          'time_mechanic_should_visit0' => '12:00',
          'customer_comment0' => 'I need to change my oil',
          'statusid0' => '1',
          'subscribe_to_a_plan0' => 'yes',
        ),
      ),
      'aa75c0be33382133d44e212ed2df60270730b5c047c2e1e1568234efbcaca9e3a6b1dbe4' => 
      array (
        'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_on_site_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid,subscribe_to_a_plan) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_on_site_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0,:subscribe_to_a_plan0)',
        'bind' => 
        array (
          'service_type0' => 'repair',
          'customer_name0' => 'emeka paul 3',
          'customer_email0' => 'franke@yahoo.com',
          'customer_phone0' => '0800000004',
          'customer_location0' => 'abuja',
          'customer_address0' => '19 no close abuja street',
          'manufacturerid0' => '21',
          'car_year0' => '2007',
          'needing_on_site_mechanic0' => 'yes',
          'date_mechanic_should_visit0' => '2022-01-10',
          'time_mechanic_should_visit0' => '01:00',
          'customer_comment0' => 'I think my fuel pump is bad',
          'statusid0' => '1',
          'subscribe_to_a_plan0' => 'no',
        ),
      ),
    ),
    'newsletter_subscribers' => 
    array (
      '8b89ae0a15ee9a6531ec7915cf1b0c2efd17e016afa92713fba68877c7808c274e8e7fc7' => 
      array (
        'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
        'bind' => 
        array (
          'email_address0' => 'hellojoesphi@gmail.com',
        ),
      ),
      '8b89ae0a15ee9a6531ec7915cf1b0c2eb5e684941fde4490b8ac59e43b3be85c378fa57a' => 
      array (
        'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
        'bind' => 
        array (
          'email_address0' => 'developer@tripmata.com',
        ),
      ),
      '8b89ae0a15ee9a6531ec7915cf1b0c2e166ff07d7e3d04718819eaee92930f953bf8f3c7' => 
      array (
        'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
        'bind' => 
        array (
          'email_address0' => 'admin@pstosujicares.com',
        ),
      ),
      '8b89ae0a15ee9a6531ec7915cf1b0c2e15c0e4d8194df921c68147c68311dc045195a395' => 
      array (
        'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
        'bind' => 
        array (
          'email_address0' => 'info@damselscosmetics.com',
        ),
      ),
      '8b89ae0a15ee9a6531ec7915cf1b0c2e4a1810784ede742110589c3b70c3bf66d149e981' => 
      array (
        'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
        'bind' => 
        array (
          'email_address0' => 'demo@test.com',
        ),
      ),
    ),
    'service_quotes' => 
    array (
      '883d473835c6d220897ca48889f0ff72e02f0fd6383ac9619f90453d3f1a9f9b22b462b3' => 
      array (
        'query' => 'INSERT INTO service_quotes (customer_name,customer_phone,customer_email,customer_location,car_issue,car_model,service_type,car_year,manufacturerid) VALUES (:customer_name0,:customer_phone0,:customer_email0,:customer_location0,:car_issue0,:car_model0,:service_type0,:car_year0,:manufacturerid0)',
        'bind' => 
        array (
          'customer_name0' => 'kkjkk',
          'customer_phone0' => 'ppp',
          'customer_email0' => 'hellojoesphi@gmail.com',
          'customer_location0' => 'ppp',
          'car_issue0' => 'hhhh',
          'car_model0' => 'kkk',
          'service_type0' => 'diagnosis',
          'car_year0' => 'diagnosis',
          'manufacturerid0' => '9',
        ),
      ),
      'd89969e513a297285a20183c2b14241e7282b79bb3144edb0a2b16757f1f6e1d0f522276' => 
      array (
        'query' => 'INSERT INTO service_quotes (customer_name,customer_phone,customer_email,customer_location,car_issue,car_model,service_type,car_year,manufacturerid,number_of_cars,mileage) VALUES (:customer_name0,:customer_phone0,:customer_email0,:customer_location0,:car_issue0,:car_model0,:service_type0,:car_year0,:manufacturerid0,:number_of_cars0,:mileage0)',
        'bind' => 
        array (
          'customer_name0' => 'ifeanyi amadi',
          'customer_phone0' => '0800000000',
          'customer_email0' => 'hellojoesphi@gmail.com',
          'customer_location0' => 'abuja',
          'car_issue0' => 'I just got this car and I really need help!',
          'car_model0' => 'gm 2',
          'service_type0' => 'maintenance',
          'car_year0' => 'maintenance',
          'manufacturerid0' => '7',
          'number_of_cars0' => '1',
          'mileage0' => '0-100,000',
        ),
      ),
      'd89969e513a297285a20183c2b14241ed3a8f8fc1d2559e83401d74b65044ee5997722da' => 
      array (
        'query' => 'INSERT INTO service_quotes (customer_name,customer_phone,customer_email,customer_location,car_issue,car_model,service_type,car_year,manufacturerid,number_of_cars,mileage) VALUES (:customer_name0,:customer_phone0,:customer_email0,:customer_location0,:car_issue0,:car_model0,:service_type0,:car_year0,:manufacturerid0,:number_of_cars0,:mileage0)',
        'bind' => 
        array (
          'customer_name0' => 'ifeanyi amadi 2',
          'customer_phone0' => '0800000005',
          'customer_email0' => 'admin@autofixer.com.ng',
          'customer_location0' => 'abuja',
          'car_issue0' => 'This car jerks when it stops',
          'car_model0' => 'Civic',
          'service_type0' => 'diagnosis',
          'car_year0' => 'diagnosis',
          'manufacturerid0' => '1',
          'number_of_cars0' => '1',
          'mileage0' => '101,000-300,000',
        ),
      ),
    ),
    'contact_messages' => 
    array (
      '6ca1fbe0dcbf764a9e52ae9e4ac7f38b49503940961d9566cbf0317bc7c20433ef847feb' => 
      array (
        'query' => 'INSERT INTO contact_messages (customer_name,customer_email,customer_message,customer_phone) VALUES (:customer_name0,:customer_email0,:customer_message0,:customer_phone0)',
        'bind' => 
        array (
          'customer_name0' => 'ifeanyi amadi',
          'customer_email0' => 'hellojoesphi@gmail.com',
          'customer_message0' => 'This is my sample message',
          'customer_phone0' => '0800000000',
        ),
      ),
      '6ca1fbe0dcbf764a9e52ae9e4ac7f38bc1c167048a349e83f66364e8c2982c6fc35f7aa1' => 
      array (
        'query' => 'INSERT INTO contact_messages (customer_name,customer_email,customer_message,customer_phone) VALUES (:customer_name0,:customer_email0,:customer_message0,:customer_phone0)',
        'bind' => 
        array (
          'customer_name0' => 'ifeanyi amadi',
          'customer_email0' => 'hellojoesphi@gmail.com',
          'customer_message0' => 'This is a support message',
          'customer_phone0' => '0800000000',
        ),
      ),
      '6ca1fbe0dcbf764a9e52ae9e4ac7f38bcd7c53939646949db31440c85b456a25805a3e80' => 
      array (
        'query' => 'INSERT INTO contact_messages (customer_name,customer_email,customer_message,customer_phone) VALUES (:customer_name0,:customer_email0,:customer_message0,:customer_phone0)',
        'bind' => 
        array (
          'customer_name0' => 'emeka paul',
          'customer_email0' => 'franke@yahoo.com',
          'customer_message0' => 'I love your services',
          'customer_phone0' => '0800000000',
        ),
      ),
    ),
    'mechanic_report' => 
    array (
      '368727cc9a7b747408d1b9cbc12bd5bbc862d2f80196d3c349617417bf7e8e32a9db5994' => 
      array (
        'query' => 'INSERT INTO mechanic_report (mechanicid,serviceid,report) VALUES (:mechanicid0,:serviceid0,:report0)',
        'bind' => 
        array (
          'mechanicid0' => '1',
          'serviceid0' => '2',
          'report0' => 'This service is currently ongoing',
        ),
      ),
      '368727cc9a7b747408d1b9cbc12bd5bb8441de278fc916b2a265f0931ad1d51f0cfcadfc' => 
      array (
        'query' => 'INSERT INTO mechanic_report (mechanicid,serviceid,report) VALUES (:mechanicid0,:serviceid0,:report0)',
        'bind' => 
        array (
          'mechanicid0' => '1',
          'serviceid0' => '2',
          'report0' => 'The client gave me 50,000 naria to buy a break pad for his car',
        ),
      ),
      '368727cc9a7b747408d1b9cbc12bd5bb12228ddfc05474c30e95e32a47752ae00db6d2c5' => 
      array (
        'query' => 'INSERT INTO mechanic_report (mechanicid,serviceid,report) VALUES (:mechanicid0,:serviceid0,:report0)',
        'bind' => 
        array (
          'mechanicid0' => '4',
          'serviceid0' => '7',
          'report0' => 'I got there and the car wouldn\\\'t start. I think it needs a battery',
        ),
      ),
    ),
  ),
);

?>