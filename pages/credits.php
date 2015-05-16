<?php
	$contributors = [
		[
			'name' => 'Wildbow',
			'for' => 'tons of amazing stuff, including but not limited to being the creative mastermind behind Worm, everything Parahumans, and the power classification system used by this generator',
			'link' => ''
		],
		[
			'name' => '/u/ughzubat',
			'for' => 'coordination, images, descriptions, and mechanics and so much more',
			'link' => ''
		],
		[
			'name' => '/u/TELL_ME_TO_CALM_DOWN',
			'for' => 'unflipping tables',
			'link' => ''
		],
		[
			'name' => '/u/DrOlot',
			'for' => 'Tarot Card usage and concepts',
			'link' => ''
		],
		[
			'name' => 'Aaron C',
			'for' => 'backend code',
			'link' => ''
		],
		[
			'name' => '/u/Brutusness',
			'for' => 'looking at stuff and saying \"neat\"',
			'link' => ''
		],
		[
			'name' => '/u/misterspokes',
			'for' => 'merkstave rune information. Also stufff and or junk',
			'link' => ''
		]
	]
?>
<h2>Credits</h2>
<p>This is a creative work with many contributors. Special thanks go out to the following, for their efforts:</p>
<ul>
	<?php
		foreach ($contributors as $key) {
			echo '<li>' . $key['name'] . ' for ' . $key['for'] . '</td>.';
		}
	?>
</ul>
