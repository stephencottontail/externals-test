import { registerBlockType } from '@wordpress/blocks';

registerBlockType( 'ex/externals-test', {
	title: 'Externals Test',
	category: 'text',
	icon: 'embed-generic',
	edit: () => {
		return <p>Hello</p>
	},
	save: () => {
		return <p>Hello</p>
	}
} );

