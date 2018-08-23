( function( api ) {

	// Extends our custom "landing-pagely" section.
	api.sectionConstructor['landing-pagely'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
