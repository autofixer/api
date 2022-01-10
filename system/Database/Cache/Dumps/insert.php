<?php

return array (
  '09b591d3f2154af6578da226749ffc74' => 
  array (
    'query' => 'SELECT * FROM user_groups WHERE usergroupid = :usergroupid or group_name = :group_name ',
    'bind' => 
    array (
      'usergroupid' => 'Accountant',
      'group_name' => '',
    ),
  ),
  'db2aa6f5ceff18e772678d7348f792ea' => 
  array (
    'query' => 'SELECT unquieid FROM routing_center {where}',
    'bind' => 
    array (
    ),
  ),
  'ec6f6aba44524964538506feb4865a84' => 
  array (
    'query' => 'SELECT * FROM routing_center WHERE authentication_token = :authentication_token ',
    'bind' => 
    array (
      'authentication_token' => '8586fb2e033f33de1a2f84',
    ),
  ),
  '8f1d399a15b5c8837d068b970f5848ca' => 
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
  '0c1371eff2eb70b5c23c0d3dab6f9b58' => 
  array (
    'query' => 'SELECT * FROM professional_body WHERE professionalbodyid = :professionalbodyid or professional_body = :professional_body or professional_body_title = :professional_body_title ',
    'bind' => 
    array (
      'professionalbodyid' => '13',
      'professional_body' => '',
      'professional_body_title' => '',
    ),
  ),
  '1860270cd242c87683ebd90ecc989e79' => 
  array (
    'query' => 'SELECT * FROM request_authorization WHERE authorization_code = :authorization_code ',
    'bind' => 
    array (
      'authorization_code' => '36838374748493633474',
    ),
  ),
  '7b620f2fc3bc05bccd446e6b3b07be47' => 
  array (
    'query' => 'UPDATE professional_body SET professional_body = :professional_body , professional_body_title = :professional_body_title  {where}',
    'bind' => 
    array (
      'professional_body' => 'Martins & PaulIz',
      'professional_body_title' => 'MAP',
    ),
  ),
  '9e2605abd5037b21f5b9e0cd50434aa0' => 
  array (
    'query' => 'UPDATE professional_body SET professional_body = :professional_body , professional_body_title = :professional_body_title  WHERE professionalbodyid = :professionalbodyid ',
    'bind' => 
    array (
      'professional_body' => 'Martins & PaulIz',
      'professional_body_title' => 'MAP',
      'professionalbodyid' => 13,
    ),
  ),
  'd1d1ca045ff2b3c6198833b7c4003ca9' => 
  array (
    'query' => 'SELECT * FROM users WHERE userid = :userid or username = :username or email = :email ',
    'bind' => 
    array (
      'userid' => '17',
      'username' => '',
      'email' => '',
    ),
  ),
  'e0fc04a04dfb1d97775bccbb3ecb2ed8' => 
  array (
    'query' => 'SELECT * FROM user_groups WHERE usergroupid = :usergroupid ',
    'bind' => 
    array (
      'usergroupid' => '1',
    ),
  ),
  '2d4e48caee49e87a35b5cc73f8c3dc37' => 
  array (
    'query' => 'UPDATE users SET username = :username , email = :email , usergroupid = :usergroupid  WHERE userid = :userid ',
    'bind' => 
    array (
      'username' => 'wekiwork',
      'email' => 'info@test.com',
      'usergroupid' => '1',
      'userid' => 17,
    ),
  ),
  '83e5cbb3fd26ad5febd567a363f98ebf' => 
  array (
    'query' => 'SELECT * FROM user_groups WHERE usergroupid = :usergroupid or group_name = :group_name ',
    'bind' => 
    array (
      'usergroupid' => '9',
      'group_name' => '',
    ),
  ),
  'b5aa1bb9bd3bb51120285c3df5810ca4' => 
  array (
    'query' => 'SELECT * FROM users WHERE userid = :userid or username = :username or email = :email ',
    'bind' => 
    array (
      'userid' => '17',
      'username' => '',
      'email' => '',
    ),
  ),
  '11c040f3fc265940ce7104046d4cda2a' => 
  array (
    'query' => 'UPDATE user_groups SET group_name = :group_name  WHERE usergroupid = :usergroupid ',
    'bind' => 
    array (
      'group_name' => 'Accountant',
      'usergroupid' => 9,
    ),
  ),
  '3b8d6d4849f4f63f09c270ab968a21c2' => 
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
  'bdb0538f07699d017c2d4eedda89d07b' => 
  array (
    'query' => 'SELECT * FROM ticket_category WHERE ticketcategoryid = :ticketcategoryid or ticket_category = :ticket_category ',
    'bind' => 
    array (
      'ticketcategoryid' => 'Payment Issue',
      'ticket_category' => '',
    ),
  ),
  '1630b2e8e9b55be1718133e22d2f726c' => 
  array (
    'query' => 'INSERT INTO ticket_category (ticket_category,createdby) VALUES (:ticket_category0,:createdby0)',
    'bind' => 
    array (
      'ticket_category0' => 'Payment Issue',
      'createdby0' => 17,
    ),
  ),
  '55881a45ab2ece5259fc515da8d3076e' => 
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
  'f7ef231e5ce0e2ef524e29853e2db254' => 
  array (
    'query' => 'SELECT * FROM ticket_category WHERE ticketcategoryid = :ticketcategoryid or ticket_category = :ticket_category ',
    'bind' => 
    array (
      'ticketcategoryid' => '1',
      'ticket_category' => '',
    ),
  ),
  '7a2268e02615ba299e194530a1e6157e' => 
  array (
    'query' => 'SELECT * FROM user_groups WHERE usergroupid = :usergroupid or group_name = :group_name ',
    'bind' => 
    array (
      'usergroupid' => '1',
      'group_name' => '',
    ),
  ),
  '7b62f1c6bf715a4eb48d6b4741c2c45c' => 
  array (
    'query' => 'SELECT * FROM ticket_category WHERE ticketcategoryid = :ticketcategoryid or ticket_category = :ticket_category ',
    'bind' => 
    array (
      'ticketcategoryid' => 'Payment Issue 1',
      'ticket_category' => '',
    ),
  ),
  'a1acf5a3fec3043de66d87c94d71630d' => 
  array (
    'query' => 'INSERT INTO ticket_category (ticket_category,createdby) VALUES (:ticket_category0,:createdby0)',
    'bind' => 
    array (
      'ticket_category0' => 'Payment Issue 1',
      'createdby0' => 17,
    ),
  ),
  'c340b13b554bbfd89d9649a0926cf97b' => 
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
  '5c6b53c1834dea3d865c00908f2d1d0b' => 
  array (
    'query' => 'UPDATE ticket_category SET ticket_category = :ticket_category  WHERE ticketcategoryid = :ticketcategoryid ',
    'bind' => 
    array (
      'ticket_category' => 'Payment issue 2',
      'ticketcategoryid' => 1,
    ),
  ),
  'bba9d335af9c4e56042cbd25e023d580' => 
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
  'd8117d07f30165996a656573a3243780' => 
  array (
    'query' => 'SELECT * FROM professional_body WHERE professionalbodyid = :professionalbodyid or professional_body = :professional_body or professional_body_title = :professional_body_title ',
    'bind' => 
    array (
      'professionalbodyid' => '14',
      'professional_body' => '',
      'professional_body_title' => '',
    ),
  ),
  'cd66a39c2d4780ebcf8b1557e906369d' => 
  array (
    'query' => 'SELECT * FROM professional_body WHERE professionalbodyid = :professionalbodyid or professional_body = :professional_body or professional_body_title = :professional_body_title ',
    'bind' => 
    array (
      'professionalbodyid' => '12',
      'professional_body' => '',
      'professional_body_title' => '',
    ),
  ),
  'a8411716c2928f015734a09b88d09301' => 
  array (
    'query' => 'DELETE FROM professional_body WHERE professionalid = :professionalid ',
    'bind' => 
    array (
      'professionalid' => 12,
    ),
  ),
  '836db356601648dcddfdab4327903a3e' => 
  array (
    'query' => 'DELETE FROM professional_body WHERE professionalbodyid = :professionalbodyid ',
    'bind' => 
    array (
      'professionalbodyid' => 12,
    ),
  ),
  '53f20b9874554495931f51ba119246ac' => 
  array (
    'query' => 'SELECT * FROM years WHERE yearid = :yearid or year = :year0 ',
    'bind' => 
    array (
      'yearid' => '3',
      'year0' => '',
    ),
  ),
  '4cfa2cfd4a2d380c35ab4c834ce24ca7' => 
  array (
    'query' => 'DELETE FROM years WHERE yearid = :yearid ',
    'bind' => 
    array (
      'yearid' => 3,
    ),
  ),
  'e4d1bf05fb9ccdc0c65318634d96f7d4' => 
  array (
    'query' => 'SELECT * FROM ticket_category WHERE ticketcategoryid = :ticketcategoryid or ticket_category = :ticket_category ',
    'bind' => 
    array (
      'ticketcategoryid' => '3',
      'ticket_category' => '',
    ),
  ),
  '2fee1cf5a209c6a4ef21d846ae05ded8' => 
  array (
    'query' => 'DELETE FROM ticket_category WHERE ticketcategoryid = :ticketcategoryid ',
    'bind' => 
    array (
      'ticketcategoryid' => 1,
    ),
  ),
  'c8896a9cf4b1c630d2bcc7d1eb0a7dfa' => 
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
  '7284efaa9acf260a9dd624c754c73c2d' => 
  array (
    'query' => 'SELECT * FROM ticket_department WHERE ticketdepartmentid = :ticketdepartmentid or ticket_department = :ticket_department ',
    'bind' => 
    array (
      'ticketdepartmentid' => 'officer',
      'ticket_department' => '',
    ),
  ),
  'a1c6613581d00871d5c570063f7a722d' => 
  array (
    'query' => 'INSERT INTO ticket_department (ticket_department,usergroupid,createdby) VALUES (:ticket_department0,:usergroupid0,:createdby0)',
    'bind' => 
    array (
      'ticket_department0' => 'officer',
      'usergroupid0' => '2',
      'createdby0' => 17,
    ),
  ),
  '004956f30117f7a2b1573a78f9c9da2c' => 
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
  '66227340898cab0f86370c4a4b68b4d4' => 
  array (
    'query' => 'SELECT * FROM ticket_department WHERE ticketdepartmentid = :ticketdepartmentid or ticket_department = :ticket_department ',
    'bind' => 
    array (
      'ticketdepartmentid' => '1',
      'ticket_department' => '',
    ),
  ),
  '5bdfbe0fdc9df60e443281c9b505ba61' => 
  array (
    'query' => 'SELECT * FROM user_groups WHERE usergroupid = :usergroupid or group_name = :group_name ',
    'bind' => 
    array (
      'usergroupid' => '2',
      'group_name' => '',
    ),
  ),
  '33cb32b1c546bd772c15861ce22c31ab' => 
  array (
    'query' => 'SELECT * FROM users WHERE userid = :userid or username = :username or email = :email ',
    'bind' => 
    array (
      'userid' => '1',
      'username' => '',
      'email' => '',
    ),
  ),
  '39973c4efc8f18e4f37d9d7e830856f4' => 
  array (
    'query' => 'SELECT * FROM ticket_department WHERE ticketdepartmentid = :ticketdepartmentid or ticket_department = :ticket_department ',
    'bind' => 
    array (
      'ticketdepartmentid' => 'officer 2',
      'ticket_department' => '',
    ),
  ),
  'e3ba650f4f0548f4a9c4cc82a34fac23' => 
  array (
    'query' => 'INSERT INTO ticket_department (ticket_department,usergroupid,createdby) VALUES (:ticket_department0,:usergroupid0,:createdby0)',
    'bind' => 
    array (
      'ticket_department0' => 'officer 2',
      'usergroupid0' => '2',
      'createdby0' => 17,
    ),
  ),
  '8114541051772c97c88bf01d318b37a9' => 
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
  'be2b2b2efd34aa7deec44feef226049a' => 
  array (
    'query' => 'SELECT * FROM ticket_department WHERE ticketdepartmentid = :ticketdepartmentid or ticket_department = :ticket_department ',
    'bind' => 
    array (
      'ticketdepartmentid' => '2',
      'ticket_department' => '',
    ),
  ),
  '72ee188506966dd7c031e2feaf1c3e90' => 
  array (
    'query' => 'DELETE FROM ticket_department WHERE ticketdepartmentid = :ticketdepartmentid ',
    'bind' => 
    array (
      'ticketdepartmentid' => 2,
    ),
  ),
  '3477ac8bb19b4c123c05537c7da304d2' => 
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
  '989673849746ffa40451bd29b0fe008c' => 
  array (
    'query' => 'UPDATE ticket_department SET ticket_department = :ticket_department  WHERE ticketdepartmentid = :ticketdepartmentid ',
    'bind' => 
    array (
      'ticket_department' => 'officer 3',
      'ticketdepartmentid' => 1,
    ),
  ),
  '3179c0060e6442b69e0bd33ad7613066' => 
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
  '6bfe619284ad9a053193ba6654e51f4a' => 
  array (
    'query' => 'SELECT * FROM qualification_types {where}',
    'bind' => 
    array (
    ),
  ),
  '2c74f54e9d2d079c090d3468d9a7b5a9' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'BMW',
    ),
  ),
  'b77caaa0a7a2d018b77b4c420d081b4f' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'BMW',
      'manufacturer_logo0' => 'bmw.jpg',
      'visible0' => '1',
    ),
  ),
  '424e6b67ba20350d7522f4c9c5c3ec4f' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'Audi',
    ),
  ),
  'dda883f70895f2bae84fa501dc5df872' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'Audi',
      'manufacturer_logo0' => 'audi.jpg',
      'visible0' => '1',
    ),
  ),
  '602276c19a57274cbf5c9a87940b402c' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'Acura',
    ),
  ),
  'b3ec0c6a414bce361252d770a01dbb4d' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'Acura',
      'manufacturer_logo0' => 'acura-official-logo.jpg',
      'visible0' => '1',
    ),
  ),
  '20defc4f9f114318cc91c7f02a7fb7bb' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'Cadillac',
    ),
  ),
  '0f87f1cb63e6c015d8f8d9d823ac49c4' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'Cadillac',
      'manufacturer_logo0' => 'cadillac.jpg',
      'visible0' => '1',
    ),
  ),
  '8649fdaae7661a1ccec0f84f72e9656d' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'Chevrolet',
    ),
  ),
  '2abb4fc624f487453e59867cd4d3f259' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'chrysler',
    ),
  ),
  'd05047b406a3b77ed18b6b0b5cb48bb3' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'chrysler',
      'manufacturer_logo0' => 'chrysler-official-logo-of-the-company-Copy.jpg',
      'visible0' => '1',
    ),
  ),
  '1688fb86b6492b96aaa68d48483d63d6' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'dodge',
    ),
  ),
  'cfa6c5c5099c6b45409ed0581b87edc5' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'dodge',
      'manufacturer_logo0' => 'dodge.jpg',
      'visible0' => '1',
    ),
  ),
  'b2d79a295ddcfc5010cd3542d54c71f9' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'ferrari',
    ),
  ),
  '38b577b7f2f6ca5cb60f98d0fdb5e84c' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'ferrari',
      'manufacturer_logo0' => 'ferrari.jpg',
      'visible0' => '1',
    ),
  ),
  'd08b439798f6f9141361406c93a59005' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'ford',
    ),
  ),
  '6224de13c108a2abfc15cc1d2b33d2b2' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'ford',
      'manufacturer_logo0' => 'ford.jpg',
      'visible0' => '1',
    ),
  ),
  '66d32ebd784d3331c53c0989ad04c812' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'gmc',
    ),
  ),
  '452bc37aa5875338fb1ca9075e6baf2b' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'gmc',
      'manufacturer_logo0' => 'gmc-official-logo-of-the-company.jpg',
      'visible0' => '1',
    ),
  ),
  '31d1f5e30d24928483e6af6af3e2b27f' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'honda',
    ),
  ),
  '65997fffeb9471bde0e54756d697295e' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'Hyundai',
    ),
  ),
  '94a85450bb2d60c04111f1b4edc5a4be' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'infiniti',
    ),
  ),
  '4a9661f5e850905636fb6bf72668615a' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'infiniti',
      'manufacturer_logo0' => 'infiniti-official-logo-of-the-company.jpg',
      'visible0' => '1',
    ),
  ),
  '852c449c582a1f1b777e31984232cb4f' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'jaguar',
    ),
  ),
  '2a5e3df8f0e6cb3749d4718f83fe3db8' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'jaguar',
      'manufacturer_logo0' => 'jaguar.jpg',
      'visible0' => '1',
    ),
  ),
  'f4676c5c88bd1d9d96726acb21abc89b' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'kia',
    ),
  ),
  'be989d4cae6a5e575163b36a142c6784' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'kia',
      'manufacturer_logo0' => 'kia.jpg',
      'visible0' => '1',
    ),
  ),
  '580e9ebf3cf6bf859176852cb06e6b87' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'land rover',
    ),
  ),
  '07e49c1f5d189787d1cea0fbe75ccb26' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'land rover',
      'manufacturer_logo0' => 'land-rover-official-logo-of-the-company.jpg',
      'visible0' => '1',
    ),
  ),
  '7cb254450b2f7c854ac390c11e4217ce' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'lexus',
    ),
  ),
  '11a9e12392c7705cc6880dad8de247e8' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'lexus',
      'manufacturer_logo0' => 'lexus-official-logo-of-the-company.jpg',
      'visible0' => '1',
    ),
  ),
  '024d9ef746aaeb5cea60f640dd9562f5' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'mazda',
    ),
  ),
  'f32adea31ed35fbdc8500ff321dc7d07' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'mazda',
      'manufacturer_logo0' => 'mazda.jpg',
      'visible0' => '1',
    ),
  ),
  '6d91afd3eb84862c9b81c34346f21691' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'mercedes benz',
    ),
  ),
  'bb65a335f9b63496bb22bf8308138d8c' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'mercedes benz',
      'manufacturer_logo0' => 'mercedes-benz-official-logo-of-the-company.jpg',
      'visible0' => '1',
    ),
  ),
  '01284e04ce72a2252e2801d1cedae039' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'mini',
    ),
  ),
  '5a4d4c4f46fe9e032d37e45be343b410' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'mini',
      'manufacturer_logo0' => 'mini.jpg',
      'visible0' => '1',
    ),
  ),
  '396b155ae186cdcb1ea1bc521be336eb' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'mg',
    ),
  ),
  '94a0f37c54f11f4351c325aab5496aff' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'mg',
      'manufacturer_logo0' => 'mg-official-logo-of-the-company1.jpg',
      'visible0' => '1',
    ),
  ),
  '6e8b1c4135cce47a0fc0a2e394803a0b' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'nissan',
    ),
  ),
  '0a68ddf1fbd79aa5dc18c6657e6f7c06' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'nissan',
      'manufacturer_logo0' => 'nissan.jpg',
      'visible0' => '1',
    ),
  ),
  'f0d94e91c75eb5607ec895275b93c6f0' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'peugeot',
    ),
  ),
  '7538f34e2b5388fdbfae8068865c7b53' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'peugeot',
      'manufacturer_logo0' => 'peugeot.jpg',
      'visible0' => '1',
    ),
  ),
  'abf2d2523426f2a443b031e52ca1b56a' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'Pontiac',
    ),
  ),
  '10d24a09bed250ab4ee875b8c73e21e3' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'Pontiac',
      'manufacturer_logo0' => 'Pontiac-Official-Logo-of-the-Company-1.jpg',
      'visible0' => '1',
    ),
  ),
  'efa126d767e79b1d2eeeeb6bbedb1ca5' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'Saturn',
    ),
  ),
  'da6e65fd15bf5cdfda6468f115f0b5d3' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'Saturn',
      'manufacturer_logo0' => 'Saturn-Official-Logo-of-the-Company-fb.jpg',
      'visible0' => '1',
    ),
  ),
  '4b5c977be1a6e8c42df56e8ae305bf73' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'subaru',
    ),
  ),
  'b829d654c1dc8696953973eb8970357b' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'subaru',
      'manufacturer_logo0' => 'subaru-logo1.jpg',
      'visible0' => '1',
    ),
  ),
  'ae1b60f877ea7811606da1e6f14bde84' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'suzuki',
    ),
  ),
  '3d8ca308eb9ec3bd9c3e421da7451d51' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'suzuki',
      'manufacturer_logo0' => 'suzuki.jpg',
      'visible0' => '1',
    ),
  ),
  '56f20f92dbd75078b91f9ceeb7c4ef18' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'toyota',
    ),
  ),
  'dcbc835130a14647f3930255b10bd527' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'toyota',
      'manufacturer_logo0' => 'toyota.jpg',
      'visible0' => '1',
    ),
  ),
  'ce69abde644a4f695aeda1ceb42e336a' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'volkswagen',
    ),
  ),
  '65c25464c23126ade3f4bc92071b3646' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'volkswagen',
      'manufacturer_logo0' => 'volkswagen.jpg',
      'visible0' => '1',
    ),
  ),
  '1a0c73bf008ed69863718fbbc4052189' => 
  array (
    'query' => 'SELECT * FROM manufacturers WHERE manufacturer_name = :manufacturer_name ',
    'bind' => 
    array (
      'manufacturer_name' => 'volvo',
    ),
  ),
  '6678fc33281a3931549dbb88b2c95e58' => 
  array (
    'query' => 'INSERT INTO manufacturers (manufacturer_name,manufacturer_logo,visible) VALUES (:manufacturer_name0,:manufacturer_logo0,:visible0)',
    'bind' => 
    array (
      'manufacturer_name0' => 'volvo',
      'manufacturer_logo0' => 'volvo.jpg',
      'visible0' => '1',
    ),
  ),
  '7611ad26c1b4e77169ccd5383a4861ff' => 
  array (
    'query' => 'SELECT * FROM global_status {where}',
    'bind' => 
    array (
    ),
  ),
  '40c1a40668e8472472fdef8fa74f489e' => 
  array (
    'query' => 'SELECT * FROM manufacturers {where}',
    'bind' => 
    array (
    ),
  ),
  '79577309059c7b7a2a772b2b89726a8f' => 
  array (
    'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0)',
    'bind' => 
    array (
      'service_type0' => 'diagnosis',
      'customer_name0' => 'ifeanyi amadi',
      'customer_email0' => 'hellojoesphi@gmail.com',
      'customer_phone0' => NULL,
      'customer_location0' => 'abuja',
      'customer_address0' => NULL,
      'manufacturerid0' => '21',
      'car_year0' => '2003',
      'needing_mechanic0' => 'no',
      'date_mechanic_should_visit0' => NULL,
      'time_mechanic_should_visit0' => NULL,
      'customer_comment0' => NULL,
      'statusid0' => '1',
    ),
  ),
  'd5137d930022244e191e97549f76a63e' => 
  array (
    'query' => 'INSERT INTO service_requests (service_type,customer_name,customer_email,customer_phone,customer_location,customer_address,manufacturerid,car_year,needing_mechanic,date_mechanic_should_visit,time_mechanic_should_visit,customer_comment,statusid) VALUES (:service_type0,:customer_name0,:customer_email0,:customer_phone0,:customer_location0,:customer_address0,:manufacturerid0,:car_year0,:needing_mechanic0,:date_mechanic_should_visit0,:time_mechanic_should_visit0,:customer_comment0,:statusid0)',
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
      'needing_mechanic0' => 'no',
      'date_mechanic_should_visit0' => NULL,
      'time_mechanic_should_visit0' => NULL,
      'customer_comment0' => NULL,
      'statusid0' => '1',
    ),
  ),
  '21a5a101477753ddf195b3261cba6a90' => 
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
  'b82e46e8efa05aaac0268830b5362889' => 
  array (
    'query' => 'SELECT manufacturer_name,manufacturerid FROM manufacturers {where}',
    'bind' => 
    array (
    ),
  ),
  '9a1c9ad699be810b3b3193917c72c5a3' => 
  array (
    'query' => 'SELECT * FROM newsletter_subscribers {where}',
    'bind' => 
    array (
    ),
  ),
  'ecff13f44c9cf5204604a5c1903d36e0' => 
  array (
    'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
    'bind' => 
    array (
      'email_address0' => 'hellojoesphi@gmail.com',
    ),
  ),
  '6db66b6265e19f57dc27729172abf897' => 
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
  '083071c91d52c2bd3185c2f4935e2e55' => 
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
  '9096135d56f7e2535b91bbf03fd49966' => 
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
  'e44925ad12911505319c77f5b4d8866b' => 
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
  '8594b73c58713c18214ba724a7d09201' => 
  array (
    'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
    'bind' => 
    array (
      'email_address0' => 'developer@tripmata.com',
    ),
  ),
  '4383ebf3f3d6a56e5457f54fbc7b5f5d' => 
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
  '8b1121cfe8f68127b619c048c62765c7' => 
  array (
    'query' => 'INSERT INTO {table} (customer_name,customer_email,customer_message,customer_phone) VALUES (:customer_name0,:customer_email0,:customer_message0,:customer_phone0)',
    'bind' => 
    array (
      'customer_name0' => 'ifeanyi amadi',
      'customer_email0' => 'hellojoesphi@gmail.com',
      'customer_message0' => 'This is my sample message',
      'customer_phone0' => '0800000000',
    ),
  ),
  '589f9121b29d7bf9c255dadbe1c8c7d8' => 
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
  '9dc4322991bef3f59f02e777c39b8cb3' => 
  array (
    'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
    'bind' => 
    array (
      'email_address0' => 'admin@pstosujicares.com',
    ),
  ),
  'c7f9291640733a192a11403c9dff5bf9' => 
  array (
    'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
    'bind' => 
    array (
      'email_address0' => 'info@damselscosmetics.com',
    ),
  ),
  '08aae403b9811e2cd032650c9d68ab39' => 
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
  'ad8965da3b5c23df9d242136d2a5aa53' => 
  array (
    'query' => 'INSERT INTO service_quotes (customer_name,customer_phone,customer_email,customer_location,car_issue,car_model,service_type,car_year,manufacturerid,number_of_cars,mileage) VALUES (:customer_name0,:customer_phone0,:customer_email0,:customer_location0,:car_issue0,:car_model0,:service_type0,:car_year0,:manufacturerid0,:number_of_cars0,:mileage0)',
    'bind' => 
    array (
      'customer_name0' => 'ifeanyi amadi',
      'customer_phone0' => '0800000000',
      'customer_email0' => 'hellojoesphi@gmail.com',
      'customer_location0' => 'abuja',
      'car_issue0' => 'I just got this car and i really need help!',
      'car_model0' => 'gm 2',
      'service_type0' => 'maintenance',
      'car_year0' => 'maintenance',
      'manufacturerid0' => '7',
      'number_of_cars0' => '1',
      'mileage0' => '0-100,000',
    ),
  ),
  'eec857b3cf12de3c7be1aa01254a9e0c' => 
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
  'db9b11ab114ab9ab81e37c1f5a7c56b8' => 
  array (
    'query' => 'INSERT INTO mechanic_report (mechanicid,serviceid,report) VALUES (:mechanicid0,:serviceid0,:report0)',
    'bind' => 
    array (
      'mechanicid0' => '1',
      'serviceid0' => '2',
      'report0' => 'This service is currently ongoing',
    ),
  ),
  '6c28ed69b7e1d2d089de35f181186795' => 
  array (
    'query' => 'SELECT * FROM mechanics {where}',
    'bind' => 
    array (
    ),
  ),
  'b8494a1f5c883b4b63a4e8564a1e1e8a' => 
  array (
    'query' => 'SELECT * FROM service_requests {where}',
    'bind' => 
    array (
    ),
  ),
  '215ef2485d9b3f271ba175c2a10a0a42' => 
  array (
    'query' => 'INSERT INTO mechanic_report (mechanicid,serviceid,report) VALUES (:mechanicid0,:serviceid0,:report0)',
    'bind' => 
    array (
      'mechanicid0' => '1',
      'serviceid0' => '2',
      'report0' => 'The client gave me 50,000 naria to buy a break pad for his car',
    ),
  ),
  'bf047d232c2381f3ffc43ae194b8d3a2' => 
  array (
    'query' => 'INSERT INTO newsletter_subscribers (email_address) VALUES (:email_address0)',
    'bind' => 
    array (
      'email_address0' => 'demo@test.com',
    ),
  ),
  '1f973c86bd8f8a826779dcc12fd2b347' => 
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
  'ac8a279e18e5e256f27732816202393a' => 
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
  'ec5317b29c7abe680699bd653c522e2c' => 
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
  '11e69673923553a2dafca615570144e1' => 
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
  '2e0ea623c7a7a0762b00e4c63fbe5deb' => 
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
  'ff5485ce7e27f56b8dabe40b6dbde7c4' => 
  array (
    'query' => 'INSERT INTO mechanic_report (mechanicid,serviceid,report) VALUES (:mechanicid0,:serviceid0,:report0)',
    'bind' => 
    array (
      'mechanicid0' => '4',
      'serviceid0' => '7',
      'report0' => 'I got there and the car wouldn\\\'t start. I think it needs a battery',
    ),
  ),
);
