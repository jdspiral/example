<?php return [

	/*
	|--------------------------------------------------------------------------
	| DvsUser
	|--------------------------------------------------------------------------
	|
	| This configuration is used to map attributes of the DvsUser Eloquent
	| model to fields in devise. This allows us to change the model attributes
	| using our front end editor in devise. This is also used in e2e testing
	| for testing purposes. It is okay to remove this mapping in your
	| application though.
	|
	*/

	'DvsUser' =>
	[
		'rules' =>
		[
			'name' => 'required',
			'email' => 'email|required',
			'password' => 'required',
		],

		'picks' =>
		[
			'Name' => ['name' => 'text'],
			'Email' => ['email' => 'text'],
			'Password' => ['password' => 'text'],
		],

		'types' =>
		[
			'Name' => 'text',
			'Email' => 'text',
			'Password' => 'text',
		],
	],
	'App\Brewer' =>
	[
		'rules' =>
		[
			'name' => 'required'
		],

		'picks' =>
		[
			'Name' => ['name' => 'text'],
			'Address' => ['address' => 'text'],
			'Description' => ['description' => 'wysiwyg'],
			'Website' => ['website' => 'text'],
		],

		'types' =>
		[
			'Name' => 'text',
			'Address' => 'text',
			'Website' => 'text',
			'Description' => 'wysiwyg',
		],
	]
];